@extends('layouts.app')

@section('content')
    <div class="col-md-10 m-auto">
        <div class="card sm-hidden">

            <div class="card">

                <div class="card-header">

                    Update a request

                </div>

                <div class="card-body">

                    <form action="{{ route('request.update' , ['id' => $requests->id]) }}" method="post">

                        {{ csrf_field() }}





                        <div class="form-group row">
                            <label for="contents" class="col-md-4 col-form-label text-md-right">{{ __('Reason') }}</label>

                            <div class="col-sm-7">
                                <textarea id="contents" type="text" cols="20" rows="10" class="form-control{{ $errors->has('contents') ? ' is-invalid' : '' }}" name="contents" required autofocus>{{ $requests->contents}}</textarea>
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
                                <input id="required_till" type="date" class="form-control{{ $errors->has('required_till') ? ' is-invalid' : '' }}" name="required_till" value="{{ $requests->required_till }}" required autofocus>

                                @if ($errors->has('required_till'))
                                    <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('required_till' , 'Entered date is invalid') }}</strong>
                                                        </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address"   value="{{ $requests->address }}"  required>

                            </div>
                        </div>

                        <div class="form-group">

                            <button class="btn btn-success pull-right" type="submit">Update Request</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection