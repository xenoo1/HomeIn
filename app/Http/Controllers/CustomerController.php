<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Orderlist;
use App\Models\Property;
use App\Models\Notification;


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
    // Validate the incoming request, including the property_id
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'no_hp' => 'required|string|max:20',
        'alamat' => 'required|string|max:255',
        'property_id' => 'required|exists:properties,id',
    ]);

    // Check if the customer already exists
    $existingCustomer = Customer::where('email', $request->input('email'))->first();
    if ($existingCustomer) {
        // Update the existing customer
        $existingCustomer->update([
            'nama' => $request->input('nama'),
            'no_hp' => $request->input('no_hp'),
            'alamat' => $request->input('alamat'),
        ]);
        $customer = $existingCustomer;
    } else {
        // Create a new customer
        $customer = new Customer();
        $customer->nama = $request->input('nama');
        $customer->email = $request->input('email');
        $customer->no_hp = $request->input('no_hp');
        $customer->alamat = $request->input('alamat');
        $customer->save();
    }

    // Handle the property_id and create an orderlist and notification
    $property = Property::find($request->input('property_id'));
    if ($property) {
        // Create a new orderlist
        $orderlist = new Orderlist();
        $orderlist->customer_id = $customer->id;
        $orderlist->property_id = $property->id;  // Assign the valid property_id
        $orderlist->status = 'pending';  // Ensure this matches the enum values
        $orderlist->save();

        // Create a notification
        $notificationController = new NotificationController();
        $notification = $notificationController->createNotification($customer, $property);
    } else {
        // Handle the case where the property is not found (optional)
        return redirect()->back()->with('error', 'Property not found.');
    }
    
    // Redirect to WhatsApp admin
    $adminWhatsAppNumber = '6281361569750'; // Replace with admin's WhatsApp number
    $message = "New Inquiry from {$customer->nama}.";
    $waUrl = "https://wa.me/{$adminWhatsAppNumber}?text=Halo,%20saya%20ingin%20bertanya%20tentang%20properti%20" . urlencode($message);
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
