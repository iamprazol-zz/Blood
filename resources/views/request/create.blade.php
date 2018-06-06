@extends('layouts.app')

@section('content')
    <body>
        <form action="{{ route('request.store') }}" method="post">
            <lable for="request">Request for blood :</lable>
            <textarea name="req" id="request" cols="30" rows="10"></textarea>
            <input type="submit" value="Submit">
        </form>
    </body>

    @endsection