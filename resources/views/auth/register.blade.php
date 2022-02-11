@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card border-light">
                    <div class="card-header" style="background-color:#f1c5ae; font-size:1.2rem">{{ __('Register') }}
                    </div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row mb-3">
                                <label for="first_name" class="col-md-4 col-form-label text-md-end">
                                    {{-- {{ __('Name') }} --}}
                                    First Name
                                </label>

                                <div class="col-md-6">
                                    <input id="first_name" type="text"
                                        class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                        value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="middle_name" class="col-md-4 col-form-label text-md-end">
                                    {{-- {{ __('Name') }} --}}
                                    Middle Name
                                </label>

                                <div class="col-md-6">
                                    <input id="middle_name" type="text"
                                        class="form-control @error('middle_name') is-invalid @enderror" name="middle_name"
                                        value="{{ old('middle_name') }}" required autocomplete="middle_name" autofocus>

                                    @error('middle_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="last_name" class="col-md-4 col-form-label text-md-end">
                                    {{-- {{ __('Name') }} --}}
                                    Last Name
                                </label>

                                <div class="col-md-6">
                                    <input id="last_name" type="text"
                                        class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                        value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-4 col-form-label text-md-end">
                                    Gender
                                </div>

                                <div class="col-md-6 col-form-label text-md">
                                    <div class="form-check form-check-inline">
                                        <input id="gender1" type="radio"
                                            class="form-check-input  radio-inline @error('gender') is-invalid @enderror"
                                            name="gender" value="
                                                            {{-- {{ old('gender') }} --}}
                                                            1
                                                            " required autocomplete="gender">
                                        <label class="form-check-label" for="gender1">
                                            Male
                                        </label>

                                        @error('gender1')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-check form-check-inline">
                                        <input id="gender2" type="radio"
                                            class="form-check-input radio-inline @error('gender') is-invalid @enderror"
                                            name="gender" value="
                                                            {{-- {{ old('gender') }} --}}
                                                            2
                                                            " required autocomplete="gender">
                                        <label class="form-check-label" for="gender2">
                                            Female
                                        </label>

                                        @error('gender2')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="role" class="col-md-4 col-form-label text-md-end">
                                    {{-- {{ __('Name') }} --}}
                                    Role
                                </label>

                                <div class="col-md-6">
                                    <select name="role" id="role"
                                        class="form-select form-control @error('role') is-invalid @enderror">
                                        <option selected value="">Choose Role</option>
                                        <option value="1">Admin</option>
                                        <option value="2">User</option>
                                    </select>

                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="picture" class="col-md-4 col-form-label text-md-end">
                                    {{-- {{ __('Name') }} --}}
                                    Display Picture
                                </label>

                                <div class="col-md-6">
                                    <input type="file" id="picture" name="picture"
                                        class="form-control-file @error('picture') is-invalid @enderror" required>
                                    @error('picture')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row pt-4 mb-0">
                                <div class="col-md-6 offset-md-5">
                                    <button type="submit" class="btn text-light" style="background-color: #35455d">
                                        {{ __('Register') }}
                                    </button>
                                </div>

                                <a class="text-center pt-2" href="{{ url('login') }}">
                                    {{-- {{ __('Forgot Your Password?') }} --}}
                                    Already have an account? Click here to log in!
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
