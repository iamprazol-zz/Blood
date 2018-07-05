@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card sm-hidden">

                <h4 class="card-header">
                    Search for a donor
                </h4>

                <div class="card-body">


                    <form action="{{ route('groups.donor') }}" method="get">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="groups_id">Blood Group : </label>
                                    <select name="groups_id" class="custom-select" id="groups_id">
                                        @foreach($groups as $group)
                                            <option value="{{ $group->id }}">{{ $group->b_group }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label for="address">Address : </label>
                                    <input type="text" name="address"  class="form-control" id="address" placeholder="city , district">
                                </div>
                            </div>

                        </div>



                        <input class="btn btn-primary btn-pill d-flex ml-auto mr-auto" type="submit" value="Search">


                    </form>


                    <button class="btn btn-sm btn-outline-danger"> Total Donors : &nbsp;&nbsp;<span class="badge-pill badge-outline-dark">{{ $users->count() }}</span></button>



                    <div class="card-body">


                        <table class="table table-hover table-sm">

                            <thead class="thead-light">

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
                                Address
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
                                    <td>{{ $user->address }}</td>

                                </tr>
                            @endforeach
                            </tbody>

                        </table>

                    </div>


                </div>
            </div>
        </div>
    </div>









@endsection