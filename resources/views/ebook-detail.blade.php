@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center" style="margin-top: 2rem; margin-bottom: 2rem">
        <div class="card text-dark bg-light mb-3" style="width: 70rem;">
            <div class="card-header" style="background-color: #f1c5ae; font-size:1.2rem">E-Book Detail</div>
            <div class="card-body" style="padding-left: 2rem; background-color: #ecddd0">
                <div class="row">
                    <div class="col-3">
                        Title
                    </div>
                    <div class="col-9">
                        {{ $ebook->title }}
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-3">
                        Author
                    </div>
                    <div class="col-9">
                        {{ $ebook->author }}
                    </div>
                </div>

                <div class="row my-3">
                    <div class="col-3">
                        Description
                    </div>
                    <div class="col-9">
                        {{ $ebook->description }}
                    </div>
                </div>

                {{-- <h5 class="card-title">Light card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p> --}}

                <div class="col-md-6 offset-md-5">
                    {{-- <button type="submit" class="btn btn-warning text-dark">
                        Rent
                    </button> --}}
                    <form action="/rent/{{ $ebook->id }}" method="POST">
                        @csrf
                        <input type="submit" value="Rent" class="btn btn-warning text-dark">
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
