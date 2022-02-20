@extends('layouts.app')

@section('content')

<br>
<br>

    <div class="position-relative">
        <div class="position-absolute top-50 start-50 translate-middle-x">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="ml-4 text-lg leading-7 fs-1 font-bold">
                    <h1 class="">School Management System</h1>
                </div>
            </div>

            <br>
            <br>

            @if (Route::has('login'))
            <div class="d-grid gap-2 col-6 mx-auto mt-8">
                @auth
                    <a href="{{ url('/home') }}" class="btn btn-primary">Home</a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-primary">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                    @endif
                @endauth
            </div>
        @endif
        </div>
    </div>
    
@endsection