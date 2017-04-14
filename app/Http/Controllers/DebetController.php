<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Debet;
use App\Tabungan;

class DebetController extends Controller
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

        return view('debet.create', ['user' => $user]);
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
            'debet' => 'required',
            'keterangan',
            'admin',
            ]);

        $debet = new Debet;
        $debet->id_users = $request->id_user;
        $debet->debet = $request->debet;
        $debet->keterangan = $request->keterangan;
        $debet->admin = $request->admin;
        $debet->save();

        $saldo = new Tabungan;
        $saldo->id_user = $request->id_user;
        $saldo->debet = $request->debet;
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
