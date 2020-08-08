@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    @foreach ($plays as $play)
                    {{$play->game->id}}
                    @endforeach

                    <hr>
                    <form action="{{url('create')}}" method="POST">
                        @csrf
                        <input type="submit" value="Create New Game" class="btn btn-primary">
                    </form>
                    <hr>
                    <form action="{{url('join')}}" method="get">
                        @csrf
                        <input type="number" name="id" required>
                        <input type="submit" value="Join Game" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
