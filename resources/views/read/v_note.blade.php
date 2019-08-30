@extends('layouts.master')

@section('title', 'home')

@section('content')
    <h2>halaman note</h2>
    <br>
    <p>
    	<a href="/addnote">Tambah data</a>
    </p>
     <br/>
     

     <ul>
     	@foreach ($data as $item)
     	  <li>{{$item->title}}</li>
     	@endforeach
     </ul>
 @endsection
