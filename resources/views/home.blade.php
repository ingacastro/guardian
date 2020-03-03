@extends('layouts.app')
@section('title', 'Menú Principal')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{--<div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
					@if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                </div>

            </div>
			--}}
			<div class="card">
			MENÚ PRINCIPAL
			</div>
        </div>
			<table>
				<div class="col-md-8 offset-md-4">
					<a href="{{ route('student.index') }}"><button type="submit" class="btn btn-primary">
						{{ __('Estudiantes') }}
					</button></a>
					<a href="{{ route('student.create') }}"><button type="submit" class="btn btn-primary">
						{{ __('Profesores') }}
					</button></a>
					<button type="submit" class="btn btn-primary">
						{{ __('Cursos') }}
					</button>
					<button type="submit" class="btn btn-primary">
						{{ __('Empleados') }}
					</button>
				</div>
				</table><Br>
    </div>
</div>
@endsection
