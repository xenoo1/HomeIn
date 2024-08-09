<?php

namespace App\Http\Controllers;

use App\Models\Orderlist;
use Illuminate\Http\Request;

class OrderlistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderlist = Orderlist::all(); 
        return view('orderlist.index', compact('orderlist'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Orderlist $orderlist)
    {
        $data = compact('orderlist'); // This should work
        return view('your-view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(orderlist $orderlist)
    {
        return view('orderlist.edit', compact('orderlist'));
    }

    /** 
     * Update the specified resource in storage.
     */
    public function update(Request $request, Orderlist $orderlist)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'property_id' => 'required|exists:properties,id',
            'status' => 'required|in:pending,paid,nonpaid', // Ensure these match the schema
        ]);

        // Update the Orderlist instance with validated data
        $orderlist->update($validatedData);

        // Redirect back to the index route with a success message
        return redirect()->route('orderlist.index')->with('success', 'Order updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Orderlist $orderlist)
    {
        $orderlist->delete();
        return redirect()->route('orderlist.index');
    }
}
