@extends('layouts.app')

@section('content')
    <div class="row">

    <div class="col-md-10 ">
        <div class="card">

            <div class="card-header">Edit Your Profile</div>

            <div class="card-body">

            <form action="{{route('profile.update')}}" method="post">
                <input type="hidden" name="_token" value="{{csrf_token()}}"/>


                <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $u->email }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_name" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="user_name" type="text" class="form-control" name="user_name" value="{{ $u->username }}" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="tel" class="form-control{{ $errors->has('mobile') ?' is-invalid' : '' }}" name="mobile" value="{{ $u->mobile }}" required>

                                @if ($errors->has('mobile'))
                                    <span class="invalid-feedback">
                                                <strong>{{ $errors->first('mobile','It must be at least 10 digits') }}</strong>
                                            </span>
                                @endif
                            </div>

                        </div>


                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control{{ $errors->has('dob') ?' is-invalid' : '' }}" name="dob" value="{{ $u->dob }}"  required>

                                @if ($errors->has('dob'))
                                    <span class="invalid-feedback">
                                                <strong>{{ $errors->first('dob','You must be 18 yrs old') }}</strong>
                                            </span>
                                @endif

                            </div>
                        </div>

                <div class="form-group row">
                    <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                    <div class="col-md-6">
                        <input id="address" type="text" class="form-control" name="address"   value="{{ $u->address }}"  required>

                    </div>
                </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>

        </form>
                </div>
            </div>
        </div>
    </div>

@endsection
