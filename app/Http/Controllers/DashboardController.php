<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class DashboardController extends Controller
{
    public function index()
    {
        $customer = Customer::count();
        // $customerKota = Customer::

        return view('dashboard', compact('customer'));
    }


}
