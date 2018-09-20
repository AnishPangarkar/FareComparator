@extends('app')
@section('content')
        <div class="col-sm-3 center-div">
            <div class="card text-center">
                <div class="card-header">
                    {{'Addresses'}}
                </div>
                <div class="card-body">
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
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
                </div>
            </div>
        </div>

@endsection
