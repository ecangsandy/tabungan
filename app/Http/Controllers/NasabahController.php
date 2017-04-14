<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Yajra\Datatables\Datatables;
use App\User;

class NasabahController extends Controller
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
        $nasabah = User::all();
     /*   $halaman = 'nasabah';*/
        return view('nasabah.index',['nasabah' => $nasabah]); 
    }/*, compact('halaman')*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('nasabah.create');
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
        $this->validate ($request, [
            'nip' => 'required|max:10',
            'nama' => 'required',
            'email' => 'required|email|max:255|unique:users',
            'alamat' => 'required',
            'password' => 'required',
            ]);

        $nasabah = new User;
        $nasabah->nip = $request->nip;
        $nasabah->name = $request->nama;
        $nasabah->email = $request->email;
        $nasabah->alamat = $request->alamat;
        $nasabah->password = Hash::make($request->password);
        $nasabah->save();

        return redirect()->route('nasabah.index')->with('alerts-success','Data Berhasil disimpan!');
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
        $nasabah = User::findOrFail($id);
        return view('nasabah.edit',compact('nasabah'));
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
        $this->validate ($request, [
            'nip' => 'required',
            'nama' => 'required',
            'email' => 'required|email|max:255',
            'alamat' => 'required',
            'password' => 'required',
            ]);

        $nasabah = User::findOrFail($id);
        $nasabah->nip = $request->nip;
        $nasabah->name = $request->nama;
        $nasabah->email = $request->email;
        $nasabah->alamat = $request->alamat;
        $nasabah->password = Hash::make($request->password);
        $nasabah->save();

        return redirect()->route('nasabah.index')->with('alter-success', 'Data Berhasil di Ubah');
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
        $nasabah = User::findOrFail($id);
        $nasabah->delete();
        return redirect()->route('nasabah.index')->with('alerts-success', 'Data hasben Delete');
    }
}
