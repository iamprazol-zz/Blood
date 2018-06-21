@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card sm-hidden">

                <h4 class="card-header">
                    Blood Groups
                </h4>

                <div class="card-body">

                    <ul class="list-group">

                        @foreach($groups as $group)

                            <li class="list-group-item">

                                <a href="{{ route('groups.donor' , ['id' => $group->id]) }}" style="text-decoration: none;"> {{ $group->b_group }}</a>

                            </li>

                        @endforeach

                    </ul>

                </div>
            </div>
        </div>

        <div class="col-md-8">
                <div class="card sm-hidden">

                    <div class="card-header">
                        <h4>Donors</h4>
                    </div>


                    <div class="card-body">



                            <table class="table table-hover">

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


                                </thead>

                                <tbody>
                                @foreach($users as $user)
                                <tr>

                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->groups->b_group }}</td>
                                    <td>{{ $user->gender }}</td>
                                    <td>{{ $user->age }}</td>
                                    <td>{{ $user->mobile }}</td>

                                </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>

                </div>

            </div>



@endsection