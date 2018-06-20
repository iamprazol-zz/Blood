@extends('layouts.app')

@section('content')

    <div class="row">
<div class="col-md-4">
    @if(Auth::check())
    <a href="{{ route('request.create') }}" class="form-control btn btn-primary">Request for blood</a>
    <hr>
    @endif
        <div class="card sm-hidden">

            <h4 class="card-header">
                Blood Groups
            </h4>

            <div class="card-body">

                <ul class="list-group">

                    @foreach($groups as $group)

                        <li class="list-group-item">

                            <a href="{{ route('forum.show' , ['id' => $group->id]) }}" style="text-decoration: none;"> {{ $group->b_group }}</a>

                        </li>

                        @endforeach

                </ul>

            </div>
        </div>
</div>


    <div class="col-md-8">
        @foreach($requests as $request)
            <div class="card sm-hidden">

                <div class="card">

                    <div class="card-header">



                        <span><img width="50px" src="{{ $request->user->avatar }}"/> {{ $request->user->name }} , <b>{{ $request->created_at->diffForHumans() }}</b></span>


                    </div>

                    <div class="card-body">

                        <p class="text-center">

                            {{ $request->contents }}

                        </p>

                    </div>

                    <div class="card-footer">

                        <span>

                            {{ $request->required_till }}

                        </span>

                    </div>

                </div>


        </div>
        @endforeach

            <div class="card-footer">

                {{ $requests->links() }}

            </div>

    </div>

    </div>


@endsection
