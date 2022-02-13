@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center" style="margin-top: 2rem; margin-bottom: 2rem">
        <div class="card text-dark bg-light mb-3" style="width: 70rem;">
            <div class="card-header" style="background-color: #f1c5ae; font-size:1.2rem">
                {{ __('message.ebook_detail') }}</div>
            <div class="card-body" style="padding-left: 2rem; background-color: #ecddd0">
                <div class="row">
                    <div class="col-3">
                        {{ __('message.title') }}
                    </div>
                    <div class="col-9">
                        {{ $ebook->title }}
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-3">
                        {{ __('message.author') }}
                    </div>
                    <div class="col-9">
                        {{ $ebook->author }}
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-3">
                        {{ __('message.description') }}
                    </div>
                    <div class="col-9">
                        {{ $ebook->description }}
                    </div>
                </div>

                <div class="col-md-6 offset-md-5">
                    <form action="/rent/{{ $ebook->id }}" method="POST">
                        @csrf
                        <input type="submit" value="{{ __('message.rent') }}" class="btn btn-warning text-dark">
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
