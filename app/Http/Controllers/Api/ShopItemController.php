<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\ShopItem;
use Illuminate\Http\Request;

class ShopItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ShopItem::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> all();
        $item = new ShopItem();
        $item -> name = $data['name'];
        $item -> price = $data['price'];
        $item -> availability = $data['availability'];
        $item -> desc = $data['desc'];
        $item -> save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ShopItem  $shopItem
     * @return \Illuminate\Http\Response
     */
    public function show(ShopItem $shopItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ShopItem  $shopItem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ShopItem $shopItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ShopItem  $shopItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(ShopItem $shopItem)
    {
        //
    }
}
