@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center" style="margin-top: 2rem; margin-bottom: 2rem">
        <div class="col-md-10 text-center">

            <div class="text-start">
                <div class="h2 pb-2">Home</div>
            </div>

            <table class="table table-striped table-hover table-warning">
                <thead>
                    <tr>
                        <th>Author</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ebooks as $item)
                        <tr onclick="window.location='/ebook-detail/{{ $item->id }}'" style="cursor: pointer">
                            <td>{{ $item->author }}</td>
                            <td>{{ $item->title }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection



{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
