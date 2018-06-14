@extends('layouts.app')

@section('content')

    <a href="{{ route('request.create') }}" class="form-control btn btn-primary">Request for blood</a>
    <hr>

    @foreach($request as $req)
    <b>Blood type :</b><p>{{ $req->b_group }}</p>

    <b>Case : </b><p>{{ $req->contents }}</p>

    <b>Required till : </b><p>{{ $req->required_till }}</p>
@endforeach


@endsection
