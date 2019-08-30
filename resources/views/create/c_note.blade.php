@extends('layouts.master')

@section('title', 'tambah note')

@section('content')
<h2> Tambah Data</h2>
<table>
	<tr>
		<td>title</td>
		<td><input type="text" name="title"> </td>
	</tr>
	<tr>
		<td>Description</td>
		<td><textarea name="Description"></textarea></td>
	</tr>
	<tr>
		<td><button type="submit">simpan</button></td>
	</tr>
</table>


 @endsection