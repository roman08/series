<?php

namespace cinema\Http\Controllers;

use Illuminate\Http\Request;
use cinema\User;
use cinema\Http\Requests;
use cinema\Http\Requests\UserCreateRequest;
use cinema\Http\Requests\UserUpdateRequest;
use Session;
use Redirect;
use cinema\Http\Controllers\Controller;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users=User::paginate(2);
        return view('usuario.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(UserCreateRequest $request)
    {
        \cinema\User::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'password'=>bcrypt($request['password'])
            ]);
        return redirect('/usuario')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('usuario.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::find($id);
        $user->fill($request->all());
        $user->save();
        Session::flash('message','Usuario Editado Correctamente');
        return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        Session::flash('message','Usuario Eliminado Correctamente');
        return Redirect::to('/usuario');

    }
}
