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
                           <lable for="contents" class="col-md-4 col-form-label text-md-right">Reason</lable>

                            <div class="col-md-6">
                            <textarea name="contents" class="form-control" id="contents" cols="30" rows="10"  class="form-control">{{ $requests->contents }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <lable for="date" class="col-md-4 col-form-label text-md-right">Required till</lable>

                            <div class="col-md-6">
                            <input type="date" id="date" class="form-control" name="required_till" value ="{{ $requests->required_till }}" class="form-control"/>
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