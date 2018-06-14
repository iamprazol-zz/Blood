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

        <div class="card col-md-8 ml-auto">

            @foreach($requests as $request)

                <div class="card card-deck">

                    <div class="card-header">


                        <span><b>{{ $requests->user->avatar }}</b> , {{ $requests->created_at->diffForHumans() }}</span>

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
