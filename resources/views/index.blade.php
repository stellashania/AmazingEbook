@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mb-3 border-light" style="background-color: #ecddd0">
            <div class="card-body text-center">
                <h5 class="card-title">{{ __('message.welcome') }}</h5>
                <p class="card-text">{{ __('message.find_ebook') }}</p>
            </div>
            <img class="card-img-top" src="../storage/images/book_thumbnail2.jpg" alt=""
                style="height: 50%; width:100%; object-fit: contain">
        </div>
    </div>
@endsection
