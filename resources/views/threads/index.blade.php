@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Forum Threads</div>

                    <div class="panel-body">
                        @if (isset($threads) && count($threads) > 0)
                            @foreach ($threads as $thread)
                                <article>
                                    <h4><a href="{{route('threads.show',['id'=>$thread->id])}}">{{ $thread->title }}</a></h4>
                                    <div class="body">{{ $thread->body }}</div>
                                </article>
                                <hr>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
