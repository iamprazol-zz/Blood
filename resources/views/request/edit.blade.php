@extends('layouts.app')

@section('content')
    <div class="col-md-8">
        <div class="card sm-hidden">

            <div class="card">

                <div class="card-header">

                    Update a request

                </div>

                <div class="card-body">

            <form action="{{ route('request.update' , ['id' => $requests->id]) }}" method="post">

                {{ csrf_field() }}



                <div class="form-group">

                   <lable for="contents">Reason</lable>
                    <textarea name="contents" id="contents" cols="30" rows="10" value="{{ old('contents') }}" class="form-control">{{ $requests->contents }}</textarea>

                    <lable for="date" >Required till</lable>
                    <input type="date" id="date" name="required_till" value ="{{ $requests->required_till }}" class="form-control"/>
                </div>

                <div class="form-group">

                    <button class="btn btn-success pull-right" type="submit">Update Request</button>

                </div>

            </form>

        </div>
    </div>
    </div>

@endsection