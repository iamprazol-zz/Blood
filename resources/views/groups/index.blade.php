@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 m-auto">

            <div class="card sm-hidden">

                <div class="card-header">
                    <h4>Blood Groups</h4>

                    <a href="{{ route('groups.search') }}" class="btn btn-outline-danger btn-sm pull-right">Search for a donor</a>
                </div>


                <div class="card-body">

                        <table class="table table-hover">

                            <thead>

                                <th>
                                    id
                                </th>

                                <th>
                                    Type
                                </th>

                                <th>
                                    Total no of donors
                                </th>

                            <th>
                                Total requests
                            </th>

                            </thead>


                            <tbody>

                                @foreach($groups as $group)

                                    <tr>
                                        <td>{{ $group->id }}</td>
                                        <td>{{ $group->b_group }}</td>
                                        <td>{{ $group->user->count() }}</td>
                                        <td>
                                            {{ $group->requests->count() }}
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
