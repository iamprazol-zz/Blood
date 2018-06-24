@extends('layouts.app')

@section('content')

    <div class="row">

    <div class="col-md-10 m-auto">
        <div class="card">
            <div class="card-header">My Profile</div>

            <div class="card-body">


                    <div class="col-md-5 m-auto">
                        <div class="card-img-top"><h4>{{Auth::user()->username}}</h4></div>
                        <div class="card-img"><img src="/avatars/{{ Auth::user()->avatar}}" style="width:150px; height:150px; float:left;border-radius:50%;"></div>
                        <a href="{{ route('profile.pic') }}" class="btn btn-outline-primary btn-pill btn-sm pull-right"> Change Image</a>
                    </div>



                <table class="table table-hover">

                            <thead>

                            <tr>
                                <th>                                My Info :
                                </th>
                            </tr>

                            </thead>


                            <tbody>
                                <tr>
                                    <td>Full Name :</td><td>{{ Auth::user()->name }}</td>
                                </tr>

                                <tr>
                                    <td>Email :</td><td>{{ Auth::user()->email }}</td>
                                </tr>


                                <tr>
                                    <td>Blood Group :</td><td>{{ Auth::user()->groups->b_group }}</td>
                                </tr>


                                <tr>
                                    <td>Gender</td><td>{{ Auth::user()->gender }}</td>
                                </tr>


                                <tr>
                                    <td>Age :</td><td>{{ Auth::user()->getAge() }}</td>
                                </tr>


                                <tr>
                                    <td>Mobile :</td><td>{{ Auth::user()->mobile }}</td>
                                </tr>

                                <tr>
                                    <td>Address :</td><td>{{ Auth::user()->address }}</td>
                                </tr>




                            </tbody>

                        </table>
                <a href="{{ route('profile.edit') }}" class=" btn btn-info pull-right">Edit Your Profile</a>



            </div>



                </div>
            </div>
        </div>




@endsection