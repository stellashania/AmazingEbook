@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center" style="margin-top: 2rem; margin-bottom: 2rem">
        <div class="col-md-10 text-center">

            <div class="text-start">
                <div class="h2 pb-2">Account Maintenance</div>
            </div>

            <table class="table table-striped table-warning">
                <thead>
                    <tr>
                        <th class="col-md-9">Account</th>
                        <th class="col-md-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="col-md-9">Veronica Roth - User</td>
                        <td class="col-md-3">
                            <button type="button" class="btn btn-warning btn-rounded rounded-pill btn-sm m-0 px-3">Update
                                Role</button>
                            <button type="button"
                                class="btn btn-danger btn-rounded rounded-pill btn-sm m-0 px-3">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-md-9">Veronica Roth - User</td>
                        <td class="col-md-3">
                            <button type="button" class="btn btn-warning btn-rounded rounded-pill btn-sm m-0 px-3">Update
                                Role</button>
                            <button type="button"
                                class="btn btn-danger btn-rounded rounded-pill btn-sm m-0 px-3">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-md-9">Veronica Roth - User</td>
                        <td class="col-md-3">
                            <button type="button" class="btn btn-warning btn-rounded rounded-pill btn-sm m-0 px-3">Update
                                Role</button>
                            <button type="button"
                                class="btn btn-danger btn-rounded rounded-pill btn-sm m-0 px-3">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="col-md-9">Veronica Roth - User</td>
                        <td class="col-md-3">
                            <button type="button" class="btn btn-warning btn-rounded rounded-pill btn-sm m-0 px-3">Update
                                Role</button>
                            <button type="button"
                                class="btn btn-danger btn-rounded rounded-pill btn-sm m-0 px-3">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
