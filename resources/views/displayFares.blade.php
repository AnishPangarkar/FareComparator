@extends('app')
@section('content')
    @php
        \Log::alert('json printed from blade');
        \Log::alert($json['prices'][0]);
        $iterator = $json['prices'];
    @endphp
    <div class="row">
    @foreach($iterator as $value)
        <div class="col-sm-3">
            <div class="card text-center">
                <div class="card-header">
                    {{$value['localized_display_name']}}
                </div>
                <div class="card-body">
                    {{'Fare Estimate: USD$'.$value['low_estimate'].'-'.$value['high_estimate']}}
                    <br>
                    {{--{{'Distance:'.$value['distance']}}--}}
                    {{--{{'Duration:'.$value['duration']}}--}}
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    @endforeach
    </div>
    <div class="center-wrapper">
        <a href="{{ url()->previous() }}" class="btn btn-danger">Back</a>
    </div>
@endsection