<?php

namespace App\Http\Controllers;

use App\Models\Retailer;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRetailer;
use Auth;

class RetailerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $retailers = Retailer::orderbydesc('id')->get();
        return view('retailer/index',['retailers' => $retailers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('retailer/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRetailer $request)
    {
        $created_by = Auth::user()->id;
        $retailer = Retailer::create([
            "name" => $request['name'],
            "phone" => $request['phone'],
            "created_by" => $created_by,            
        ]);
        return redirect('retailer');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Retailer  $retailer
     * @return \Illuminate\Http\Response
     */
    public function show(Retailer $retailer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Retailer  $retailer
     * @return \Illuminate\Http\Response
     */
    public function edit(Retailer $retailer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Retailer  $retailer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Retailer $retailer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Retailer  $retailer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Retailer $retailer)
    {
        //
    }
}
