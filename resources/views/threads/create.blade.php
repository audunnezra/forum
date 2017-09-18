@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create a new thread</div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="title">Title : </label>
                        <br></br>
                        <input id="thread-title">
                        <br></br>
                        <label id="thread-body">Body : </label>
                        <br></br>
                        <textarea rows="6" cols="99" placeholder="Write something here. . ."></textarea>
                        @foreach($countries as $name)
                            @if($name == "Irland")
                            <p>{{$name}}</p>
                            @else
                            <h1>{{$name}}</h1>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
