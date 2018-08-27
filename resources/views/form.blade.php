@extends('app')
@section('content')
    <form action="/createRide" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="from">From:</label>
            <input type="text" class="form-control" id="from" name="from">
        </div>
        <div class="form-group">
            <label for="to">To:</label>
            <input type="text" class="form-control" id="to" name="to">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </form>
@endsection

{{--@section('scripts')--}}
    {{--<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>--}}
    {{--<!-- Include all compiled plugins (below), or include individual files as needed -->--}}
    {{--<script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}
{{--@endsection--}}


{{--@section('footer_scripts')--}}
    {{--<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">--}}
{{--@endsection--}}