@extends('layouts.app')
	@section('title', 'Create Guardian')
		@section('content')
<div class="container">
	<form class="form-horizontal" action="{{ route('student.store') }}" method="post">

	@csrf
		<div class="row justify-content-center">
		<table>
			<tr>
				<td>General Information</td>
			</tr>
			<tr>
				<td>
					<label for="id" class="">Identification Document</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="document" id="document" placeholder="ID">
					</div>
				</td>
				<td>
					<label for="titulo" class="">Last Name</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name">
					</div>
				</td>
				<td>
					<label for="titulo" class="">First Name</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name">
					</div>
				</td>
			</tr>
			<tr>
				<td>Contact Information</td>
			</tr>
			<tr>
				<td>
					<label for="id" class="">Email</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="email" id="email" placeholder="email@serv.ext">
					</div>
				</td>
				<td>
					<label for="titulo" class="">Home Phone</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="homephone" id="homephone" placeholder="+582125550000">
					</div>
				</td>
				<td>
					<label for="titulo" class="">Mobile Phone</label>
					<div class="col-lg-10">
						<input type="text" class="form-control" name="mobilephone" id="mobilephone" placeholder="5415542323">
					</div>
				</td>
			</tr>
			<tr>
				<td>Agregar Alumno(a)</td>
			</tr>
						<tr>

				<td>
					<select id="student" name="student" class="form-control">
						<option>------Seleccionar------</option>
						@foreach($students as $student)
						<option value="{{ $student->document }}">{{ $student->document }}</option>
						@endforeach
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<button type="submit" class="btn btn-primary">Registrar</button>
				</td>
			</tr>
		</table>
		</div>
		</div>
	</form>
</div>
@endsection
@section('scripts')
<div id="vue-app">
<script type="text/javascript">
    $(document).ready(function () {
        // inicializamos el plugin
        $('#student').select2({  });
    });
</script>
</div>
@endsection
