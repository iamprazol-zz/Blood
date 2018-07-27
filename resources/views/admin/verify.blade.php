@extends('layouts.app')

@section('content')


    <div class="col-md-12">
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

            <div class="col-md-8">
                <div class="card sm-hidden">

                    <div class="card-header">User info</div>

                    <div class="card-body">

                        <table class="table table-hover">


                            <tbody>
                            <tr>
                                <td>Full Name :</td><td>{{ $user->name }}</td>
                            </tr>

                            <tr>
                                <td>Email :</td><td>{{ $user->email }}</td>
                            </tr>


                            <tr>
                                <td>Blood Group :</td><td>{{ $user->groups->b_group }}</td>
                            </tr>


                            <tr>
                                <td>Gender</td><td>{{ $user->gender }}</td>
                            </tr>


                            <tr>
                                <td>Age :</td><td>{{ $user->getAge() }}</td>
                            </tr>


                            <tr>
                                <td>Mobile :</td><td>{{ $user->mobile }}</td>
                            </tr>

                            <tr>
                                <td>Address :</td><td>{{ $user->address }}</td>
                            </tr>

                            <tr>
                                <td>DOB :</td><td>{{ $user->getdob() }}</td>
                            </tr>

                            <tr>
                                <td>Citizenship :</td><td><img src="/images/{{ $user->citizenship }}" style="float: left; height: 300px; width: 100%;"></td>
                            </tr>




                            </tbody>

                        </table>

                        @if(!$user->is_verified($user->id))
                            @if($user->admin == 1)
                            <a href="{{ route('admin.verified' ,[ 'id' => $user->id]) }}" class="btn btn-primary pull-right">Verify user as admin</a>
                            @else
                            <a href="{{ route('admin.verified' ,[ 'id' => $user->id]) }}" class="btn btn-primary pull-right">Verify user</a>
                            @endif
                        @endif

                    </div>



                </div>
            </div>
        </div>
    </div>






@endsection