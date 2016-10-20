<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Item;
use View;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(
            Item::where('item_id', Auth::guard('api')->id())
                ->get()
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         // load the create form (app/views/item/create.blade.php)
        // return "asasfa";
        return View::make('item.create');
    }

    public function test()
    {
         // load the create form (app/views/item/test.blade.php)
        // return "asasfa";
        return View::make('item.test');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name = $request->input('name');
        $regNumber = $request->input('reg_num');
        $price = $request->input('price');
        $description = $request->input('description');
        $place = $request->input('place');
        $bought = $request->input('bought');

        return Item::create([
            'name' => $name, 
            'reg_num' => $regNumber, 
            'price' => $price, 
            'description' => $description, 
            'place' => $place, 
            'bought' => $bought
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Item::find($id); // all()->get()
    }

    public function showAll() {
        return Item::all();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = Item::find($id)->first();

        $name = $request->input('name');
        $note = $request->input('item');

        if(!empty($name)) {
            $item->name = $name;
        }

        $item->name = $name;

        $item->save(); 

        // Session::flash('message', 'Successfully updated nerd!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // delete
        $item = Item::find($id);
        $item->delete();

        // redirect
        // Session::flash('message', 'Successfully deleted the nerd!');
        // return Redirect::to('nerds');
    }
}
