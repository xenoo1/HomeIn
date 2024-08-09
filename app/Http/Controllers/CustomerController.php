<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Orderlist;
use App\Models\Property;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->nama = $request->input('nama');
        $customer->email = $request->input('email');
        $customer->no_hp = $request->input('no_hp');
        $customer->alamat = $request->input('alamat');
        $customer->save();
    
        if ($request->input('property_id')) {
            $orderlist = new Orderlist();
            $orderlist->customer_id = $customer->id;
            $orderlist->property_id = $request->input('property_id');
            $orderlist->status = 'pending';
            $orderlist->save();
        }
    
        // Redirect ke WhatsApp admin
        $adminWhatsAppNumber = '6281361569750'; // ganti dengan nomor WhatsApp admin
        $message = "New Inquiry from {$customer->first_name} {$customer->last_name}.";
        $waUrl = "https://wa.me/{$adminWhatsAppNumber}?text=" . urlencode($message);
        return redirect($waUrl);
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customers.show', compact('customer'));
    }

    public function edit($id)
    {
        $customer = Customer::find($id);
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::find($id);
        $customer->nama = $request->input('nama');
        $customer->email = $request->input('email');
        $customer->no_hp = $request->input('no_hp');
        $customer->alamat = $request->input('alamat');
        $customer->save();

        return redirect()->route('customers.index');
    }

    public function destroy($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        return redirect()->route('customers.index');
    }

    public function simpanData(Request $request)
    {
        // Simpan data ke database
        $customer = new Customer();
        $customer->nama = $request->nama;
        $customer->email = $request->email;
        $customer->no_hp = $request->no_hp;
        $customer->alamat = $request->alamat;
        $customer->save();
    
        // Mengarahkan ke halaman WhatsApp
        $waUrl = 'https://wa.me/6281361569750?text=Halo,%20saya%20ingin%20bertanya%20tentang%20properti';
        return redirect($waUrl);
    }
  
}
