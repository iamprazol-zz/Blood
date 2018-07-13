@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-10 m-auto">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Full Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('e-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
                                <input id="user_name" type="text" class="form-control" name="user_name" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('Mobile') }}</label>

                            <div class="col-md-6">
                                <input id="mobile" type="tel" class="form-control{{ $errors->has('mobile') ?' is-invalid' : '' }}" name="mobile" required>

                                @if ($errors->has('mobile'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('mobile','It must be at least 10 digits') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="form-group row">
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                <select name="gender" class="custom-select" id="gender">
                                    <option >Male</option>
                                    <option >Female</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="groups_id" class="col-md-4 col-form-label text-md-right">{{ __('Blood Group') }}</label>

                            <div class="col-md-6">
                                <select name="groups_id" class="custom-select" id="groups_id">
                                    <option value="" selected="">Choose One</option>
                                    <option value="1">A+</option>
                                    <option value="2">A-</option>
                                    <option value="3">B-</option>
                                    <option value="4">B+</option>
                                    <option value="5">AB-</option>
                                    <option value="6">AB+</option>
                                    <option value="7">O-</option>
                                    <option value="8">O+</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="dob" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Birth') }}</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control{{ $errors->has('dob') ?' is-invalid' : '' }}" name="dob" value="{{ old('dob') }}"  required>

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
                                <input id="address" type="text" class="form-control" name="address"  placeholder="city , district" value="{{ old('address') }}"  required>

                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="pic" class="col-md-4 col-form-label text-md-right">{{ __('Upload a pic of Citizenship') }}</label>

                            <div class="col-md-6">
                                <input type="file" id="pic" name="pic" class="form-control" required/>

                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection