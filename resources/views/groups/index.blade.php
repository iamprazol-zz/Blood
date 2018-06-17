@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">

            <div class="col-md-8 col-md-offset-2">

                <div class="panel panel-default">

                    <div class="panel-heading">Blood Groups</div>

                    <div class="panel-body">

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

                            </thead>


                            <tbody>

                                @foreach($groups as $group)

                                    <tr>
                                        <td>{{ $group->id }}</td>
                                        <td>{{ $group->b_group }}</td>
                                        <td>
                                            @foreach($user as $u)
                                                    @if ($group->b_group == $u->b_group )

                                                      {{ $u->b_group }}

                                                    @endif
                                            @endforeach
                                        </td>
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
