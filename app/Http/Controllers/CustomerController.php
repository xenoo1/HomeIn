<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Orderlist;
use App\Models\Property;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->nama = $request->input('nama');
        $customer->email = $request->input('email');
        $customer->no_hp = $request->input('no_hp');
        $customer->alamat = $request->input('alamat');
        $customer->save();

        $orderlist = new Orderlist();
        $orderlist->customer_id = $customer->id;
        $orderlist->property_id = $request->input('property_id');
        $orderlist->status = 'pending';
        $orderlist->save();

        // Redirect ke WhatsApp admin
        $adminWhatsAppNumber = '6281361569750'; // ganti dengan nomor WhatsApp admin
        $message = "New Inquiry from {$customer->first_name} {$customer->last_name}.";
        $waUrl = "https://wa.me/{$adminWhatsAppNumber}?text=" . urlencode($message);

        return redirect($waUrl);
    }
  
}
