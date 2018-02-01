@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                @if(Auth::user()->role_id == 2)
                    <div class="panel-heading">Go to <a href="{{url("/job/create")}}"> Dashboard </a> and create new Job.</div>
                @else
                    <div class="panel-heading">Go to Dashboard: <a href="{{url("/")}}"> Dashboard </a></div>
                @endif
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
