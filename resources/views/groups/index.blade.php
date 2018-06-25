@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 m-auto">

            <div class="card sm-hidden">

                <h4 class="card-header">
                    Blood Groups
                </h4>


                <div class="card-body card-deck">
                    <div class="col-md-5 m-auto">


                        <table class="table table-hover table-sm">

                            <thead class="thead-light">

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
                    <div class="col-md-25 m-auto">


                    <canvas id="myChart" width="400px" height="400px"></canvas>

                    <script src="/js/chart.bundle.js"></script>
                    <script src="/js/utils.js"></script>


                    <script>
                        var ctx = document.getElementById("myChart").getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: {
                                labels: ["AB-", "AB+", "B-", "B+", "A-", "A+" ,"O-" , "O+"],
                                datasets: [{
                                    label: 'No Of Donors',
                                    data: [@foreach($groups as $group)
                                        {{$group->user->count()}},
                                        @endforeach
                                    ],
                                    backgroundColor: [
                                        'rgba(54, 162, 235, 0.2)',
                                        'rgba(255, 99, 132, 0.2)',
                                        'rgba(255, 206, 86, 0.2)',
                                        'rgba(75, 192, 192, 0.2)',
                                        'rgba(153, 102, 255, 0.2)',
                                        'rgba(255, 159, 64, 0.2)',
                                        'rgba(200, 189, 167, 0.2)',
                                        'rgba(150, 255,132, 0.2)' ,

                                    ],
                                    borderColor: [
                                        'rgba(54, 162, 235, 1)',
                                        'rgba(255, 99, 132, 1)',
                                        'rgba(255, 206, 86, 1)',
                                        'rgba(75, 192, 192, 1)',
                                        'rgba(153, 102, 255, 1)',
                                        'rgba(255, 159, 64, 1)',
                                        'rgba(200, 189,167, 1)',
                                        'rgba(150, 255,132, 1)' ,



                                    ],
                                    borderWidth: 1
                                }]
                            },
                            options: {
                                scales: {
                                    yAxes: [{
                                        ticks: {
                                            beginAtZero:true
                                        }
                                    }]
                                }
                            }
                        });
                    </script>

                </div>


            </div>

            </div>
        </div>
    </div>





@endsection

