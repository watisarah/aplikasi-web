<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Note;

class NoteController extends Controller
{
    public function index()
    {
        $data = Note::all();
        dd($data);
    	return view('read.v_note', compact('data'));
    }
     public function show($id)
    {
    	$nama = "sarah";
    	$page = "ini halaman ke ".$id;
    	$hobi = ['coding','membaca',"menulis",'travelling'];
    	return view('read.v_note', compact('nama','page','hobi'));
    }
     public function create()
    {
      return view('create.c_note');
    }
public function dashboard()
{
    return view('read.v_dashboard');
}
}
