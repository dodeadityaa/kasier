<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class datauserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('users')->get();
        return view('datauser')->with('users', $users);
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
        $data = new User();
        $data->name = $request->name;
        $data->username = $request->username;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->no_telp = $request->no_telp;
        $data->level = $request->level;
        $data->password = bcrypt($request->password);

        $admins = User::where('username', $request->username)->first();
        if ($data->username == $admins['username']) {
            return redirect()->route('user-view.index')->with('failed', 'Nama atau Email Sudah Ada !');
        } else {
            $data->save();
            // $data->sendApiEmailVerificationNotification();
            return redirect()->route('user-view.index')->with('suksesssss', 'You are successfully added all fields!');
        }
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
        $where = array('id' => $id);
        $users = User::where($where)->first();
        return Response::json($users);
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
        $update =  DB::table('users')->where('id', $request->id_admin)->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'level' => $request->level,
            'password' => bcrypt($request->password),

        ]);
        if ($update) {
            return redirect()->route('user-view.index')->with('suksesedit', 'Data berhasil diubah!');
        } else {
            return redirect()->route('user-view.index')->with('failed', 'Account name or email already exists !');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = User::where('id', $id)->first();
        $data->delete();
        return redirect()->route('user-view.index')->with('deletee', 'Data berhasi dihapus!');
    }
}
