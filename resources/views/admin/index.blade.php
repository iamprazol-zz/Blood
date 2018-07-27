@extends('layouts.app')

@section('content')

    <div class="col-md-25">
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

                <h6 class="card-header">Users</h6>

                            <div class="card-body">


                                <table class="table  table-hover table-sm" style="width: 25%; height: 25%;">

                                    <thead>

                                    <th>
                                        Name
                                    </th>

                                    <th>
                                        Email
                                    </th>

                                    <th>
                                        Blood Group
                                    </th>


                                    <th>
                                        Gender
                                    </th>

                                    <th>
                                        Age
                                    </th>

                                    <th>
                                        Contact
                                    </th>

                                    <th>
                                        Status
                                    </th>

                                    <th>
                                        Option
                                    </th>


                                    </thead>


                                    <tbody>
                                    @foreach($users as $user)
                                        <tr>

                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->groups->b_group }}</td>
                                            <td>{{ $user->gender }}</td>
                                            <td>{{ $user->getAge() }}</td>
                                            <td>{{ $user->mobile }}</td>
                                            <td>{{ $user->verify }}</td>
                                            <td>
                                                @if($user->is_admin($user->id))
                                                    <a href="{{ route('admin.remove' , ['id' => $user->id])  }}" class="btn btn-danger btn-sm pull-left">Remove Admin</a>
                                                @else
                                                    <a href="{{ route('admin.make' , ['id' => $user->id])  }}" class="btn btn-info btn-sm pull-left">Make Admin</a>
                                                @endif
                                            </td>



                                        </tr>
                                    @endforeach
                                    </tbody>

                                </table>




                        </div>
                    </div>
                    <hr>


            </div>

        </div>
    </div>


@endsection