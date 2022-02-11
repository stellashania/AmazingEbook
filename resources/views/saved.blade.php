@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center" style="margin-top: 2rem; margin-bottom: 2rem">
        <div class="alert alert-success text-center py-5" role="alert" style="width: 70rem; height: 20rem">
            <h4 class="alert-heading pt-5" style="padding-top: 1rem">Saved!</h4>
            <a class="text-center pt-2" href="{{ url('home2') }}">
                {{-- {{ __('Forgot Your Password?') }} --}}
                Click here to "Home"
            </a>
        </div>
    </div>
@endsection
