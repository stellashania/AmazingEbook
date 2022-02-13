@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="col-md-8 text-center" style="padding-left:2rem">
            <div class="text-start">
                <div class="h2 pt-2">{{ __('message.update_role') }}</div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center" style="margin-top: 1rem; margin-bottom: 2rem">
        <div class="card" style="width: 50rem;">
            <div class="card-body">
                <h5 class="card-title pb-4 text-center">{{ $user->first_name }} {{ $user->middle_name }}
                    {{ $user->last_name }}</h5>

                <form method="POST" action="/update-role/{{ $user->id }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-2">
                        <label for="role" class="col-md-4 col-form-label text-md-end">
                            {{-- {{ __('Name') }} --}}
                            {{ __('message.role') }}
                        </label>

                        <div class="col-md-5">
                            <select name="role" id="role"
                                class="form-select form-control @error('role') is-invalid @enderror">

                                @foreach ($roles as $item)
                                    <option value="{{ $item->id }}"
                                        {{ $item->id == $user->role_id ? 'selected' : '' }}>{{ $item->description }}
                                    </option>
                                @endforeach

                            </select>

                            @error('role')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row pt-4 mb-0 text-center">
                        <div class="col-md-6 offset-md-3">
                            <input type="submit" value="{{ __('message.save') }}" class="btn text-light"
                                style="background-color: #35455d">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- </div> --}}
    </div>
@endsection
