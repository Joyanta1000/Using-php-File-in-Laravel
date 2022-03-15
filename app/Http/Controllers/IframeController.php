<?php

namespace App\Http\Controllers;

use App\Iframe;
use Illuminate\Http\Request;

class IframeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('iframe.index');
    }

    public function php_files_index()
    {
        return view('php_files.index');
    }

    public function php_files_submit(Request $request)
    {

        // echo '<h1>' . $request->input('name') . '</h1>';
        // $iframe = new Iframe;
        // $iframe->name = $request->name;
        // $iframe->save();

        // return redirect('php_files/index');

        return view('php_files.submit', ['name' => $request->name]);
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
     * @param  \App\Iframe  $iframe
     * @return \Illuminate\Http\Response
     */
    public function show(Iframe $iframe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Iframe  $iframe
     * @return \Illuminate\Http\Response
     */
    public function edit(Iframe $iframe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Iframe  $iframe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Iframe $iframe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Iframe  $iframe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Iframe $iframe)
    {
        //
    }
}
