@extends('layouts.app')
@section('title', 'Guardians')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<table>
			<tr>
				<td>Identification Document</td>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Email</td>
				<td>Home Phone</td>
				<td>Mobile Phone</td>
			</tr>
			@isset($guardians)
			@foreach($guardians as $guardian)
			<tr>
				<td>{{$guardian->document}}</td>
				<td>{{$guardian->firstname}}</td>
				<td>{{$guardian->lastname}}</td>
				<td>{{$guardian->email}}</td>
				<td>{{$guardian->homephone}}</td>
				<td>{{$guardian->mobilephone}}</td>
			</tr>
				<td>Alumnos que representa</td>
			<tr>
			</tr>
				<td>Nombre</td>
				<td>Curso</td>
			<tr>
			</tr>
			@endforeach
			@endisset
			<tr>
				<td>
					<a href="{{route('guardian.create')}}">
					<button type="" class="btn btn-primary">Add Guardian</button>
					</a>
					<a href="{{route('home')}}">
					<button type="" class="btn btn-primary">Menu</button>
					</a>
				</td>
			</tr>
		<table>
	</div>
</div>
@endsection