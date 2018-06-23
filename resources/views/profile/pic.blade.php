@extends('layouts.app')

@section('content')
    <div class="row">

    <div class="col-md-9  m-auto ">
        <div class="card">

            <div class="card-header"><h4>Change Profile Pic</h4></div>


                <div class="card-body">
                    <div class="col-md-3">
                        <div class="card-img-top"><h4>{{Auth::user()->username}}</h4></div>
                        <div class="card-img"><img src="/avatars/{{ Auth::user()->avatar}}" style="width:150px; height:150px; float:left; border-radius:50%;"></div>
                    </div>

                    <div class="col-md-9">


                        <form action="{{ route('profile.upload') }}" method="post" enctype="multipart/form-data">

                                    <input type="hidden" name="_token" value="{{csrf_token()}}"/>

                                    <div class="form-group row">
                                        <label for="pic" class="col-md-4 col-form-label text-md-right">{{ __('Choose a pic') }}</label>

                                        <div class="col-md-8">
                                            <input type="file" id="pic" name="pic" class="form-control" required/>

                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Change') }}
                                            </button>
                                        </div>
                                    </div>

                        </form>
                    </div>
                </div>
        </div>
    </div>
    </div>


@endsection