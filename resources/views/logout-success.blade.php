@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center" style="margin-top: 2rem; margin-bottom: 2rem">
        <div class="alert alert-success text-center py-5" role="alert" style="width: 70rem; height: 16rem">
            <h4 class="alert-heading pt-5" style="padding-top: 1rem">{{ __('message.logout_success') }}</h4>
        </div>
    </div>
@endsection
