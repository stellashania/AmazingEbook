@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="col-md-8 text-center" style="padding-left:2rem">
            <div class="text-start">
                <div class="h2 pt-2">Update Role</div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center" style="margin-top: 1rem; margin-bottom: 2rem">
        <div class="card" style="width: 50rem;">
            <div class="card-body">
                <h5 class="card-title pb-4 text-center">Veronica Roth</h5>
                <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-2">
                        <label for="role" class="col-md-4 col-form-label text-md-end">
                            {{-- {{ __('Name') }} --}}
                            Role
                        </label>

                        <div class="col-md-5">
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

                    <div class="row pt-4 mb-0 text-center">
                        <div class="col-md-6 offset-md-3">
                            <button type="submit" class="btn text-light" style="background-color: #35455d">
                                {{-- {{ __('Register') }} --}}
                                Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        {{-- </div> --}}
    </div>
@endsection
