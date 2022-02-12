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
                    @forelse ($users as $item)
                        <tr>
                            <td class="col-md-9">
                                {{ $item->first_name }} {{ $item->middle_name }} {{ $item->last_name }} -
                                {{ $item->roles->description }}
                            </td>
                            <td class="col-md-3">
                                @if ($item->id == Auth::user()->id)
                                    <div class="d-flex justify-content-center">
                                        <input type="submit" value="Update Role"
                                            class="btn btn-warning btn-rounded rounded-pill btn-sm px-2" disabled>

                                        <input type="submit" value="Delete"
                                            class="btn btn-danger btn-rounded rounded-pill btn-sm px-3"
                                            style="margin-left: 1rem" disabled>
                                    </div>
                                @else
                                    <div class="d-flex justify-content-center">
                                        <a href="/update-user/{{ $item->id }}"
                                            class="btn btn-warning btn-rounded rounded-pill btn-sm px-2">Update Role</a>

                                        <form action="/delete-user/{{ $item->id }}" method="POST">
                                            @csrf
                                            <input type="submit" value="Delete"
                                                class="btn btn-danger btn-rounded rounded-pill btn-sm px-3"
                                                style="margin-left: 1rem">
                                        </form>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">No Users have been Registered</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
