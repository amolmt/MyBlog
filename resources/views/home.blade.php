@extends('layouts.app')
<style type="text/css">
    .avatar{
        border-radius: 100%;
        max-width: 100px;
    }
</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif

                @if(session('response'))
                    <div class="alert alert-success">{{session('response')}}</div>
                @endif
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                    <div class="col-md-4">
                        @if(!empty($profile))
                            <img src="{{url($profile->profile_pic)}}" alt="" class="avatar">
                        @else
                            <img src="{{url('images/icon.png')}}" alt="" class="avatar">
                        @endif

                        @if(!empty($profile))
                            <p class="lead">{{$profile->name}}</p>
                        @else
                            <p></p>
                        @endif

                        @if(!empty($profile))
                            <p class="lead">{{$profile->designation}}</p>
                        @else
                            <p></p>
                        @endif
                        <p></p>
                    </div>
                    <div class="col-md-8">
                        @if(count($posts) > 0)

                            @foreach($posts->all() as $post)
                                <h4>{{$post->post_title}}</h4>
                                <img src="{{$post->post_image}}" alt="">
                                <p>{{$post->post_body}}</p>
                                </hr>

                            @endforeach

                        @else
                            <p>This user don't have any posts!</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
