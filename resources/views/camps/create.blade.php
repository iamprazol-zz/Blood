@extends('layouts.app')


@section('content')

    <div class="row ">

        <div class="col-md-10 m-auto">

            <div class="card sm-hidden">

                <h4 class="card-header">{{ __('Create a camp') }}</h4>

                <div class="card-body">
                    <form method="post" action="{{ route('camps.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Title of the camp') }}</label>

                            <div class="col-md-6">
                                <input name="title" class="form-control" id="title"/>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="contents" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-sm-7">
                                <textarea id="contents" type="text" cols="20" rows="10" class="form-control{{ $errors->has('contents') ? ' is-invalid' : '' }}" name="contents"  required autofocus></textarea>

                                @if ($errors->has('contents'))
                                    <span class="invalid-feedback">
                                                            <strong>{{ $errors->first('contents') }}</strong>
                                                        </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="camp_date" class="col-md-4 col-form-label text-md-right">{{ __('Camp Date') }}</label>

                            <div class="col-sm-6">
                                <input id="camp_date" type="text" class="form-control{{ $errors->has('camp_date') ? ' is-invalid' : '' }}" name="camp_date" placeholder="eg. 29th august,2018" required autofocus>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="pic" class="col-md-4 col-form-label text-md-right">{{ __('Choose a pic') }}</label>

                            <div class="col-md-8">
                                <input type="file" id="pic" name="pic" class="form-control" required/>

                            </div>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success pull-right" type="submit">Submit</button>
                        </div>

                    </form>
                </div>

            </div>

        </div>

    </div>



@endsection