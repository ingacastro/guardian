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

        </div>
			<table>
				<div class="col-md-8 offset-md-4">
					MENÚ PRINCIPAL
				</div>
				<div class="col-md-8 offset-md-4">
					<a href="{{ route('student.index') }}"><button type="submit" class="btn btn-primary">
						{{ __('Students') }}
					</button></a>
					<a href="{{ route('guardian.index') }}"><button type="submit" class="btn btn-primary">
						{{ __('Guardians') }}
					</button></a>
					<button type="submit" class="btn btn-primary">
						{{ __('Courses') }}
					</button>
					<button type="submit" class="btn btn-primary">
						{{ __('Employees') }}
					</button>
				</div>
				</table><Br>
    </div>
</div>
@endsection
