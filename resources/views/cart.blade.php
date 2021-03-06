@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center" style="margin-top: 2rem; margin-bottom: 2rem">
        <div class="col-md-10 text-center">

            <div class="text-start">
                <div class="h2 pb-2">{{ __('message.cart') }}</div>
            </div>

            <table class="table table-striped table-warning">
                <thead>
                    <tr>
                        <th class="col-md-9">{{ __('message.author') }}</th>
                        <th class="col-md-3">{{ __('message.action') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($orders as $item)
                        <tr>
                            <td class="col-md-9">{{ $item->ebooks->title }}</td>
                            <td class="col-md-3">
                                <form action="/{{ app()->getLocale() }}/delete-order/{{ $item->id }}" method="POST">
                                    @csrf
                                    <input type="submit" value="X"
                                        class="btn btn-danger btn-rounded rounded-pill btn-sm m-0 px-3">
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2">{{ __('message.no_ebook_ordered') }}</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="container">
        <div class="col-md-6 offset-md-10">
            <form action="/{{ app()->getLocale() }}/submit-order" method="POST">
                @csrf
                @if ($orders->isEmpty())
                    <input type="submit" value="{{ __('message.submit') }}" class="btn btn-warning text-dark" disabled>
                @else
                    <input type="submit" value="{{ __('message.submit') }}" class="btn btn-warning text-dark">
                @endif
            </form>
        </div>
    </div>
@endsection
