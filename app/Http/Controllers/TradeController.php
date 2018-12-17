<?php

namespace App\Http\Controllers;

use App\Trade;
use App\User;

use Illuminate\Http\Request;

class TradeController extends Controller
{


    public function tradeRequest(Request $request)
    {
        //dd($request->sticker_owner_id, Auth()->user()->name);

        $trade = new Trade([
            'owner_id' => $request->input('owner_id'),
            'owner_sticker_id' => $request->input('owner_sticker_id'),
            'trader_id' => Auth()->user()->id,
            'tradeNotify' => true,
        ]);

        //dd($trade);

        $trade->save();
        //dd($trade->traderUser->name);
        return redirect('/users/home');
    }


    public function tradeNotify()
    {
        //
        /*
        $trade->tradeNotify = false;
        $trade->save();
        return redirect('/users/mytrades');
        */
    }

    public function traderStickersShow($id)
    {

        $trader = User::find($id);
        return view('users.traderStickers')->with('trader', $trader);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function show(Trade $trade)
    {
        return view('users.trade')->with('trades', Trade::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function edit(Trade $trade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trade $trade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Trade  $trade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trade $trade)
    {
        //
    }
}
