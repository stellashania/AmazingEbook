@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center" style="margin-top: 2rem; margin-bottom: 2rem">
        <div class="col-md-10 text-center">

            <div class="text-start">
                <div class="h2 pb-2">Cart</div>
            </div>

            <table class="table table-striped table-warning">
                <thead>
                    <tr>
                        <th class="col-md-9">Author</th>
                        <th class="col-md-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-md-9">Veronica Roth</td>
                        <td class="col-md-3"><button type="button"
                                class="btn btn-danger btn-rounded rounded-pill btn-sm m-0 px-3">X</button></td>
                    </tr>
                    <tr>
                        <td class="col-md-9">Veronica Roth</td>
                        <td class="col-md-3"><button type="button"
                                class="btn btn-danger btn-rounded rounded-pill btn-sm m-0 px-3">X</button></td>
                    </tr>
                    <tr>
                        <td class="col-md-9">Veronica Roth</td>
                        <td class="col-md-3"><button type="button"
                                class="btn btn-danger btn-rounded rounded-pill btn-sm m-0 px-3">X</button></td>
                    </tr>
                    <tr>
                        <td class="col-md-9">Veronica Roth</td>
                        <td class="col-md-3"><button type="button"
                                class="btn btn-danger btn-rounded rounded-pill btn-sm m-0 px-3">X</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="container">
        <div class="col-md-6 offset-md-10">
            <button type="submit" class="btn btn-warning text-dark">
                Submit
            </button>
        </div>
    </div>
@endsection
