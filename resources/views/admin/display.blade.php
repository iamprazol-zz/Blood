@extends('layouts.app')

@section('content')
<style type="text/css">
    footer{
        position: fixed;
        bottom: 0;
    }
</style>
    <div class="row">

        <div class="col-md-4">

            <div class="card sm-hidden">
                <h5 class="card-header">
                    Admin Control
                </h5>
                <div class="card-body">

                        <ul class="list-group">

                            <li class="list-group-item"><a href="{{ route('admin.index') }}">Manage User</a></li>
                            <li class="list-group-item"><a href="{{ route('admin.verifyadmin') }}">Verify Admin</a></li>
                            <li class="list-group-item"><a href="{{ route('admin.verifyindex') }}">Verify User</a></li>
                            <li class="list-group-item"><a href="{{ route('camps.create') }}">Create a Camp</a></li>
                            <li class="list-group-item"><a href="{{ route('admin.display') }}">Edit a camp</a></li>
                            <li class="list-group-item"><a href="{{ route('admin.contact') }}">Manage Contact us</a></li>

                        </ul>


                </div>
            </div>
        </div>


        <div class="col-md-8 m-auto">
            <div class="card sm-hidden">

                <h4 class="card-header">
                    Camps
                </h4>

                <div class="card-body">

                    <table class="table table-hover table-sm">

                        <thead class="thead-light">

                        <th>
                            Id
                        </th>

                        <th>
                            Title
                        </th>

                        <th>
                            Contents
                        </th>


                        <th>
                            Options
                        </th>



                        </thead>


                        <tbody>
                        @foreach($camps as $camp)
                            <tr>

                                <td>{{ $camp->id }}</td>
                                <td>{{ $camp->title }}</td>
                                <td>{{ str_limit($camp->contents , 35) }}</td>
                                <td>
                                    <a href="{{ route('camps.edit' , ['id' => $camp->id]) }}" class="btn btn-info btn-sm pull-left">Edit</a>
                                  <br><br>

                                    <form action="{{ route('camps.destroy' , ['id' => $camp->id]) }}" method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button class="btn btn-sm btn-danger pull-left" type="submit">Destroy</button>
                                    </form>

                                </td>

                            </tr>
                        @endforeach
                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>

@endsection
