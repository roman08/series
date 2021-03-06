<?php

namespace cinema\Http\Controllers;

use Illuminate\Http\Request;

use cinema\Http\Requests;
use cinema\Http\Controllers\Controller;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
         return View('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function contacto()
    {
        return view('contacto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function review()
    {
        return view('review');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function admin()
    {
        return view('admin.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
