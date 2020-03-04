@extends('layouts.app')
@section('title', 'Students')
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
			
			@foreach($students as $student)
			<tr>
			<td>{{$student->document}}</td>
				<td>{{$student->firstname}}</td>
				<td>{{$student->lastname}}</td>
				<td>{{$student->email}}</td>
				<td>{{$student->homephone}}</td>
			<td>{{$student->mobilephone}}</td>
			</tr>
			@endforeach
						<tr>
				<td>
					<a href="{{route('student.create')}}">
					<button type="" class="btn btn-primary">Add Student</button>
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