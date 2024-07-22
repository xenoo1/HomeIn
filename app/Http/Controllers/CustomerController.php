<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'nama' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'etode_pembayaran' => 'required',
            'property' => 'required',
            'tatus' => 'required',
        ]);

        $customer = new Customer();
        $customer->nama = $request->input('nama');
        $customer->email = $request->input('email');
        $customer->no_hp = $request->input('no_hp');
        $customer->alamat = $request->input('alamat');
        $customer->metode_pembayaran = $request->input('metode_pembayaran');
        $customer->property = $request->input('property');
        $customer->status = $request->input('status');
        $customer->save();

        //...
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        $customer->update($request->all());
        return redirect()->route('customers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return redirect()->route('customers.index');
    }
}
