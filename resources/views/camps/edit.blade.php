@extends('layouts.app')

@section('content')
    <div class="col-md-10 m-auto">
        <div class="card sm-hidden">

            <div class="card">

                <div class="card-header">

                    Update a request

                </div>

                <div class="card-body">

                    <form action="{{ route('camps.update' , ['id' => $camps->id]) }}" method="post">

                        {{ csrf_field() }}

                        <div class="form-group row">
                            <lable for="title" class="col-md-4 col-form-label text-md-right">Title</lable>

                            <div class="col-md-6">
                                <input type="text" id="title"  name="title" value ="{{ $camps->title  }}" class="form-control"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <lable for="contents" class="col-md-4 col-form-label text-md-right">Description</lable>

                            <div class="col-md-6">
                                <textarea name="contents"  id="contents" cols="30" rows="10"  class="form-control">{{ $camps->contents }}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <lable for="camp_date" class="col-md-4 col-form-label text-md-right">Camp Date</lable>

                            <div class="col-md-6">
                                <input type="text" id="camp_date" name="camp_date" value ="{{ $camps->camp_date  }}" class="form-control"/>
                            </div>
                        </div>



                        <div class="form-group">

                            <button class="btn btn-success pull-right" type="submit">Update Request</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection