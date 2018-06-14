@extends('layouts.app')

@section('content')

    <div class="container">

        <div class="class col-md-10 ml-auto">

            <div class="panel panel-default">

                <div class="panel-heading">

                    Blood Groups

                </div>

                <div class="panel-body">

                    <ul class="list-group">

                        @foreach($groups as $group)

                            <li class="list-group-item">

                                {{ $group->b_group }}

                            </li>

                            @endforeach

                    </ul>

                </div>

            </div>

        </div>


        <div class="class col-md-10 ml-auto">

        <div class="class col-md-4">


            @foreach($requests as $request)

                <div class="panel panel-default">

                    <div class="panel-heading">


                        <span><b>{{ $requests->users->avatar }}</b> , {{ $requests->created_at->diffForHumans() }}</span>

                    </div>

                    <div class="panel-body">

                        <p class="text-center">

                            {{ $requests->contents }}

                        </p>

                    </div>

                    <div class="panel-footer">

                        <span>

                            {{ $requests->required_till }}

                        </span>

                    </div>

                </div>

            @endforeach

        </div>

    </div>

@endsection
