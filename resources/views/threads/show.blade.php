@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$thread->title}}</div>

                <ul class="list-group">
                    <li class="list-group-item"> {{$thread->body}} </li>
                </ul>
            </div>
            <form method="POST" action="/threads/{{$thread->id}}/comment">
                {{ csrf_field() }}
                <textarea type="text" name="body" class="form-control" rows="4"></textarea>
                <br>
                
                <div class="form-group">
                    <button class="btn btn-primary">Reply</button>
                </div>
            <form>
        </div>
    </div>
</div>
@endsection
