@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-10">
                <div class="card-header"><h1>{{ __('Requests For Blood') }}</h1></div>

                <div class="card-body">
                    <form method="post" action="{{ route('request.store') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="b_group" class="col-md-4 col-form-label text-md-right">{{ __('Blood Group') }}</label>

                            <div class="col-md-6">
                                <select name="b_group" class="custom-select" id="b_group">
                                    <option value="" selected="">Choose One</option>
                                    <option value="1">A+</option>
                                    <option value="2">A-</option>
                                    <option value="3">B+</option>
                                    <option value="4">B-</option>
                                    <option value="5">AB+</option>
                                    <option value="6">AB-</option>
                                    <option value="7">O+</option>
                                    <option value="8">O-</option>
                                </select>

                                @if ($errors->has('b_group'))
                                    <span class="invalid-feedback">
                    <strong>{{ $errors->first('b_group') }}</strong>
                </span>
                                @endif
                            </div>
                        </div>


        <div class="form-group row">
        <label for="contents" class="col-md-4 col-form-label text-md-right">{{ __('Reason') }}</label>

        <div class="col-sm-6">
            <input id="contents" type="text" class="form-control{{ $errors->has('contents') ? ' is-invalid' : '' }}" name="contents" value="{{ old('contents') }}" required autofocus>

            @if ($errors->has('contents'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('contents') }}</strong>
                                    </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="required_till" class="col-md-4 col-form-label text-md-right">{{ __('Required Date') }}</label>

        <div class="col-sm-6">
            <input id="required_till" type="date" class="form-control{{ $errors->has('required_till') ? ' is-invalid' : '' }}" name="required_till" value="{{ old('required_till') }}" required autofocus>

            @if ($errors->has('required_till'))
                <span class="invalid-feedback">
                                        <strong>{{ $errors->first('required_till') }}</strong>
                                    </span>
            @endif
        </div>
    </div>


    <div class="form-group">
        <button class="btn btn-success pull-right" type="submit">Submit</button>
    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection