@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center" style="margin-top: 2rem; margin-bottom: 2rem">
        <div class="col-md-10 text-center">

            <div class="text-start">
                <div class="h2 pb-2">{{ __('message.account_maintenance') }}</div>
            </div>

            <table class="table table-striped table-warning">
                <thead>
                    <tr>
                        <th class="col-md-9">{{ __('message.account') }}</th>
                        <th class="col-md-3">{{ __('message.action') }}</th>
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
                                        <input type="submit" value="{{ __('message.update_role') }}"
                                            class="btn btn-warning btn-rounded rounded-pill btn-sm px-2" disabled>

                                        <input type="submit" value="{{ __('message.delete') }}"
                                            class="btn btn-danger btn-rounded rounded-pill btn-sm px-3"
                                            style="margin-left: 1rem" disabled>
                                    </div>
                                @else
                                    <div class="d-flex justify-content-center">
                                        <a href="/{{ app()->getLocale() }}/update-user/{{ $item->id }}"
                                            class="btn btn-warning btn-rounded rounded-pill btn-sm px-2">{{ __('message.update_role') }}</a>

                                        <form action="/{{ app()->getLocale() }}/delete-user/{{ $item->id }}"
                                            method="POST">
                                            @csrf
                                            <input type="submit" value="{{ __('message.delete') }}"
                                                class="btn btn-danger btn-rounded rounded-pill btn-sm px-3"
                                                style="margin-left: 1rem">
                                        </form>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">{{ __('message.no_users_registered') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
