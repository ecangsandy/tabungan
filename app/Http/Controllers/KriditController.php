<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Kridit;
use App\Tabungan;

class KriditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

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
        $user = User::all('id','nip');

        return view('kridit.create', ['user' => $user]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate ($request, [
            'id_user' => 'required',
            'kridit' => 'required',
            'keterangan',
            'admin',
            ]);

        $kridit = new Kridit;
        $kridit->id_users = $request->id_user;
        $kridit->kridit = $request->kridit;
        $kridit->keterangan = $request->keterangan;
        $kridit->admin = $request->admin;
        $kridit->save();

        $saldo = new Tabungan;
        $saldo->id_user = $request->id_user;
        $saldo->kridit = $request->kridit;
        $saldo->admin = $request->admin;
        $saldo->save();

        $message = 'sukses';

        return view('dashboard', compact('message'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
