@extends('layouts.app')

@section('content')

    <div class="row">

        <div class="col-md-4">
            @if(Auth::check())
                <a href="{{ route('request.create') }}" class="form-control btn btn-primary">Request for blood</a>
                <hr>
                <a href="{{ route('groups.search') }}" class="form-control btn btn-danger">Search for a donor</a>
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

               <a href=" {{ route('forum.show' , ['id' => $group->id])}}" style="text-decoration: none;" >{{ $group->b_group }}</a>
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



                        <span><img width="50px" src="/avatars/{{ $request->user->avatar }}" /> {{ $request->user->name }} , <b>{{ $request->created_at->diffForHumans() }}</b></span>
                            <a href="{{ route('request.show' , ['id' => $request->id]) }}" class="btn btn-info btn-sm pull-right" style="margin-right: 8px;">View</a>

                        @if(Auth::id() == $request->user->id)

                                <a href="{{ route('request.edit' , ['id' => $request->id]) }}" class="btn btn-info btn-sm pull-right" style="margin-right: 8px;">Edit</a>


                            @endif


                    </div>

                        <div class="card-body">

                            <h6 class="card-title text-danger ">Reason :</h6>

                            <p class="card-text text-center">
                                {{ $request->contents }}

                            </p>

                            <button class="btn btn-outline-danger btn-sm">Required till  :   {{ $request->required_till }}</button>


                        </div>

                        <div class="card-footer">

                            <a href="{{ route('forum.show' , ['id' => $request->groups->id]) }}" class="btn btn-outline-primary btn-pill btn-sm pull-right" style="margin-right: 8px;">{{ $request->groups->b_group }}</a>

                            @if($request->is_user_available())

                                <a href="{{ route('request.unavailable' , ['id' => $request->id]) }}" class="btn btn-danger btn-sm">I can't go<span class="badge">{{ $request->available->count() }}</span></a>

                            @else

                                <a href="{{ route('request.available' , ['id' => $request->id]) }}" class="btn btn-success btn-sm">I am going<span class="badge">{{ $request->available->count() }}</a>


                            @endif

                        </div>

                </div>


        </div>

                <hr>
            @endforeach

                <div class="card-footer">

                    {{ $requests->links() }}

                </div>


        </div>
    </div>

@endsection
