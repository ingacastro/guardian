@extends('layouts.app')
@section('title', 'Create Student')
@section('content')
<div class="container">
	<form class="form-horizontal">
	@csrf
		<div class="row justify-content-center">
		<table>
			<tr>
				<td>General Information<td>
			</tr>
			<tr>
				<td>
				   <div class="form-group">
						<label for="id" class="col-lg-2 control-label">Identification Document</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="id" placeholder="ID">
						</div>
					</div>
				<td>
			</tr>
			<tr>
				<td>
					<div class="form-group">
						<label for="titulo" class="col-lg-2 control-label">Last Name</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="lastname" placeholder="Last Name">
						</div>
					</div>
				<td>
			</tr>
			<tr>
				<td>
					<div class="form-group">
						<label for="titulo" class="col-lg-2 control-label">First Name</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="firstname" placeholder="First Name">
						</div>
					</div>
				<td>
			</tr>
			<tr>
				<td><td>
			</tr>
		</table>
		</div>
	</form>
</div>
@endsection