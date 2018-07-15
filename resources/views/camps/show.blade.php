@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-12 m-auto">

                <div class="card">
                <h4 class="card-header">Blood donation camps</h4>
                <div class="card-body">
                    @foreach($camps as $camp)
                        <div class="card-body col-md-11 m-auto">
                            <h5 class="card-header">{{ $camp->title }}</h5>
                            <div class="card-img-top"><img src="/images/{{ $camp->camp_pic }}" style="float: left; height: 300px; width: 100%;"></div>
                            <div class="card-title"><h6>{{ $camp->camp_date }} :</h6></div>
                            <p class="card-text">
                                {{ $camp->contents }}
                            </p>
                        </div>
                        <hr>
                    @endforeach

                        <div class="pagination page-link">

                            {{ $camps->links() }}

                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection