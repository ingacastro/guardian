@extends('layouts.app')
@section('title', 'Students')
@section('content')
<div class="container">
	<div class="row justify-content-center">
	Lista de Estudiantes
		<table>
			<tr>
				<td>Identification Document</td>
				<td>First Name</td>
				<td>Last Name</td>
				<td>Email</td>
				<td>Home Phone</td>
				<td>Mobile Phone</td>
			</tr>
			{{--@foreach($students as $student)--}}
			<tr>
			{{--<td>{{$student->document}}</td>
				<td>{{$student->firstname}}</td>
				<td>{{$student->lastname}}</td>
				<td>{{$student->email}}</td>
				<td>{{$student->homephone}}</td>
			<td>{{$student->mobilephone}}</td>--}}
			</tr>
			{{--@endforeach--}}
		<table>	
	</div>
	
</div>
	@include('studentCreate')
	
@endsection