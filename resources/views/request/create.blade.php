@extends('layouts.app')


@section('content')
    <div class="container">
        <div class="row justify-content-center">

            <div class="col-md-10">
                <div class="card-header"><h1>{{ __('Requests For Blood') }}</h1></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('request/create') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="b_group" class="col-md-4 col-form-label text-md-right">{{ __('Blood Group') }}</label>

                            <div class="col-md-6">

                                <select name="b_group_select_box">
                                    <option name="b_group" value="A+">A Positive(A+)<br></option>
                                    <option name="b_group" value="B+">B Positive(B+)<br></option>
                                    <option name="b_group" value="AB+">AB Positive(AB+<br></option>
                                    <option name="b_group" value="AB-">AB Negetive(AB-)<br></option>
                                    <option name="b_group" value="O+">O Positive(O+)<br></option>
                                    <option name="b_group" value="O-">O Negative(O-)</option>

                                </select>

                                @if ($errors->has('b_group'))
                                    <span class="invalid-feedback">
                    <strong>{{ $errors->first('b_group') }}</strong>
                </span>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
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


    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <form action=""method="post" enctype="multipart/form-data">
                <input type="submit" class="btn btn-primary">
            </form>

            <a class="btn btn-link" href="{{ route('request') }}">
            </a>
        </div>
    </div>

@endsection