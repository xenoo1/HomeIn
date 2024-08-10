<?php


namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Property;

class DashboardController extends Controller
{
    public function index()
    {
        $customerCount = Customer::count();
        $propertyCount = Property::count();
    
        return view('dashboard', compact('customerCount', 'propertyCount'));
    }
    
}
