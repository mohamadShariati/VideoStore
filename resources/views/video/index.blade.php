
@extends('layout')

@section('content')
<h1 class="new-video-title"><i class="fa fa-bolt"></i> {{$category->name}} </h1>
<div class="row">

    <!-- video-item -->
    @foreach ($videos as $video)
        
    <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="video-item">
            <div class="thumb">
                <div class="hover-efect"></div>
                <small class="time">{{$video->TimeInHuman}}</small>
                <a href="#"><img src="{{$video->tumbnail}}" alt=""></a>
            </div>
            <div class="video-info">
                <a href="{{route('videos.show',$video->slug)}}" class="title">{{$video->description}}</a>
                <a href="{{route('videos.edit',$video->slug)}}">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>
                <a class="channel-name" href="">{{$video->name}} <span>
                        <i class="fa fa-check-circle"></i></span></a>
                <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                <span class="date"><i class="fa fa-clock-o"></i>{{$video->created_at->diffForHumans()}}</span>
                <span class="date"><i class="fa fa-tag"></i>{{$video->category?->name }}</span>
            </div>
        </div>
    </div>
    @endforeach

</div>
<div class="text-center">
  {{$videos->links()}}
</div>

@endsection
            
                
                
           