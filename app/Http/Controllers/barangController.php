<?php

namespace App\Http\Controllers;

use App\barangModel;
use App\kategoriModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

class barangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangs = barangModel::with('kategoriModels')->get();
        return view('databarang')->with('barangs', $barangs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorii = DB::table('kategori')->get();
        return view('inputbarang')->with('categorii', $categorii);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new barangModel();
        $data->kode_barang = $request->kode_barang;
        $data->nama_barang = $request->nama_barang;
        $data->id_kategori = $request->kategori_barang;
        $data->harga_jual = $request->harga_jual;
        $data->harga_beli = $request->harga_beli;
        $data->stock_barang = $request->stock_barang;
        $barangs = barangModel::where('kode_barang', $request->kode_barang)->first();
        if ($data->kode_barang == $barangs['kode_barang']) {
            return redirect()->route('barang-view.index')->with('failed', 'Nama Barang Sudah Ada !');
        } else {
            $data->save();
            // $data->sendApiEmailVerificationNotification();
            return redirect()->route('barang-view.index')->with('suksesssss', 'You are successfully added all fields!');
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
        $barangg = barangModel::find($id);
        $categorii = DB::table('kategori')->get();
        return view('editbarang')->with('categorii', $categorii)->with('barangg', $barangg);
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
        $update =  DB::table('barang')->where('id', $request->id_barang)->update([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'id_kategori' => $request->kategori_barang,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
            'stock_barang' => $request->stock_barang,

        ]);
        if ($update) {
            return redirect()->route('barang-view.index')->with('suksesedit', 'Data berhasil diubah!');
        } else {
            $barangg = barangModel::find($id);
            $categorii = DB::table('kategori')->get();
            return view('editbarang')->with('categorii', $categorii)->with('barangg', $barangg)->with('failed', 'Account name or email already exists !');
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
        $data = barangModel::where('id', $id)->first();
        $data->delete();
        return redirect()->route('barang-view.index')->with('deletee', 'Data berhasi dihapus!');
    }
}
