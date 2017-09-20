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
                        <ul>
                            @foreach($tasks as $task)
                                @if( ! $task['complete'])
                                    <a href= "{{$task['anchor']}}">
                                        <li>
                                            {{$task['title']}}
                                        </li>
                                    </a>
                                @else
                                    <a href= "{{$task['anchor']}}">
                                        <li>
                                            <del>{{$task['title']}}</del>
                                        </li>
                                    </a>
                                @endif
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
