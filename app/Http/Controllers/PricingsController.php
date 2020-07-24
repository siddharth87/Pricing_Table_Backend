<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pricing;
class PricingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricings=Pricing::all();
        return view("pricing.pricing")->with("pricings",$pricings);

    }

}
