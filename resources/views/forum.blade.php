@extends('layouts.app')

@section('content')

    <div class="body">

        <div class="card col-md-8 ">

            

                <div class="card-header">

                    Blood Groups

                </div>

                <div class="card-body">

                    <ul class="list-group">

                        @foreach($groups as $group)

                            <li class="list-group-item">

                                {{ $group->b_group }}

                            </li>

                            @endforeach

                    </ul>

                </div>

            

        </div>

<<<<<<< HEAD
        <div class="card col-md-8 ml-auto">
=======

        <div class="class col-md-10 ml-auto">
>>>>>>> ca03e81c84199095543e9e82eaa9b9ec8be9827e

        <div class="class col-md-4">


            @foreach($requests as $request)

                <div class="card card-deck">

                    <div class="card-header">


                        <span><b>{{ $requests->users->avatar }}</b> , {{ $requests->created_at->diffForHumans() }}</span>

                    </div>

                    <div class="card-body">

                        <p class="text-center">

                            {{ $requests->contents }}

                        </p>

                    </div>

                    <div class="card-footer">

                        <span>

                            {{ $requests->required_till }}

                        </span>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

@endsection
