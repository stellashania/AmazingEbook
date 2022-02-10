@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center" style="margin-top: 2rem; margin-bottom: 2rem">
        <div class="col-md-10 text-center">
            <table class="table table-striped table-warning">
                <thead>
                    <tr>
                        <th>Author</th>
                        <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Veronica Roth</td>
                        <td>Divergent</td>
                    </tr>
                    <tr>
                        <td>J.K. Rowling</td>
                        <td>Harry Potter</td>
                    </tr>
                    <tr>
                        <td>James Dashner</td>
                        <td>Maze Runner</td>
                    </tr>
                    <tr>
                        <td>The Hunger Games</td>
                        <td>Suzanne Collins</td>
                    </tr>
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
