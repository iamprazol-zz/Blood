@extends('layouts.app')

@section('content')
<style type="text/css">
    footer{
        position: fixed;
        bottom: 0;
    }
</style>
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

                    <h6 class="card-header">Users Contacted</h6>

                    <div class="card-body">


                        <table class="table  table-hover table-sm">

                            <thead>

                            <th>
                                Name
                            </th>

                            <th>
                                Email
                            </th>


                            <th>
                                Subject
                            </th>

                            </thead>


                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>

                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->subject }}</td>

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