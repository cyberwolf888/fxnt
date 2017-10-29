<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function method()
    {
        return view('method');
    }

    public function brokers()
    {
        return view('brokers');
    }

    public function faqs()
    {
        return view('faqs');
    }

    public function priceandpayment()
    {
        return view('priceandpayment');
    }

    public function account_management()
    {
        return view('account_management');
    }

    public function disclaimer()
    {
        return view('disclaimer');
    }

    public function tradingresults()
    {
        return view('tradingresults');
    }
}
