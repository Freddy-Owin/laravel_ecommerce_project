<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Hash;
use App\Customer;

class CustomerController extends Controller
{
    public function create()
    {
      return view('customer.create');
    }

    
}
