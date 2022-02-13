@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center" style="margin-top: 2rem; margin-bottom: 2rem">
        <div class="col-md-10 text-center">

            <div class="text-start">
                <div class="h2 pb-2">{{ __('message.home') }}</div>
            </div>

            <table class="table table-striped table-hover table-warning">
                <thead>
                    <tr>
                        <th>{{ __('message.author') }}</th>
                        <th>{{ __('message.title') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ebooks as $item)
                        {{-- <tr onclick="window.location='/ebook-detail/{{ $item->id }}'" style="cursor: pointer">
                            <td>{{ $item->author }}</td>
                            <td>{{ $item->title }}</td>
                        </tr> --}}

                        <tr onclick="window.location='/{{ app()->getLocale() }}/ebook-detail/{{ $item->id }}'"
                            style="cursor: pointer">
                            <td>{{ $item->author }}</td>
                            <td>{{ $item->title }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
