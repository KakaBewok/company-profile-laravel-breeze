<?php

namespace App\Http\Controllers;

use App\Models\CompanyStatistic;
use App\Models\OurPrinciple;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $statistics = CompanyStatistic::take(4)->get();
        $principles = OurPrinciple::take(4)->get();
        $products = Product::take(3)->get();
        return view('front.index', compact('statistics', 'principles', 'products'));
    }
}
