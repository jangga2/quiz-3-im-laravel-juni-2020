<?php

namespace App\Http\Controllers;
use App\Models\ArtikelModel;
use App\Models\UserModel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function create(){
        return view('artikel.form');
    }

    public function index(){
        $artikel = ArtikelModel::get_all();
        return view('artikel.index', compact('artikel'));
    }

    public function store(Request $request){
        $artikel = ArtikelModel::save($request->all());
        redirect('/artikel');
    }


    public function show($id){
        $artikel = ArtikelModel::find_by_id($id);
        return view('artikel.show', compact('artikel'));
    }

    public function edit($id){
        $artikel = ArtikelModel::find_by_id($id);
        return view('artikel.edit', compact($artikel));
    }

    public function update($id, Request $request){
        $item = ArtikelModel::update($id, $request->all());
        return redirect('/artikel');
    }


}
