@extends('layouts.master')


@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form method="POST" action="/auth/register">
                {!! csrf_field() !!}


                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{ old('email') }}" required>
                </div>


                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" required>
                </div>


                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>


                <div class="form-group">
                    <label for="password_confirmation">Confirm Password:</label>
                    <input type="password" name="password_confirmation" id="password" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-default">Register</button>
            </form>
            @include('errors')
        </div>
    </div>
@stop