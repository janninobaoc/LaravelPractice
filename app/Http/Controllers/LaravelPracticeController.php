<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LaravelPractice;

class LaravelPracticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LaravelPractice::all();
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
        return LaravelPractice::create([
            'name' => $request->name,
            'age' => $request->age,
            'email' => $request->email,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
        ]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return LaravelPractice::findOrFail($id);
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
        return LaravelPractice::find($id)->update([
            'name' => $request->name,
            'age' => $request->age,
            'email' => $request->email,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
        ]);
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return LaravelPractice::find($id)->delete();
        //
    }
}
