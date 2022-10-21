
@extends('layout')

@section('content')
<h1 class="new-video-title"><i class="fa fa-bolt"></i> آخرین ویدیو‌ها</h1>
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
                    <a href="{{route('categories.videos.index',$video->category?->slug ?? 'fun')}}  ">
                        <span class="date"><i class="fa fa-tag"></i>{{$video->category?->name }}</span>
                    </a>
                

            </div>
        </div>
    </div>
    @endforeach

</div>

<h1 class="new-video-title"><i class="fa fa-bolt"></i> پربازدیدترین ویدیوها</h1>
<div class="row">
    @foreach ($mostViews as $mostView)
    <div class="col-lg-2 col-md-4 col-sm-6">
        <div class="video-item">
            <div class="thumb">
                <div class="hover-efect"></div>
                <small class="time">{{$mostView->TimeInHuman}}</small>
                <a href="{{route('videos.show',$mostView->slug)}}"><img src="{{$mostView->tumbnail}}" alt=""></a>
            </div>
            <div class="video-info">
                <a href="{{route('videos.show',$mostView->slug)}}" class="title">{{ Str::limit($mostView->description,50, '...')  }}</a>
                <a href="{{route('videos.edit',$video->slug)}}">
                    <i class="fa fa-pencil" aria-hidden="true"></i>
                    </a>
                <a class="channel-name" href="">{{Str::limit($mostView->name,10,'...')  }}<span>
                        <i class="fa fa-check-circle"></i></span></a>
                <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
                <span class="date"><i class="fa fa-clock-o"></i>{{$mostView->created_at->diffForHumans() }} </span>
                <span class="date"><i class="fa fa-tag"></i>{{$video->category?->name }}</span>

            </div>
        </div>
    </div>
    @endforeach
    



</div>

<h1 class="new-video-title"><i class="fa fa-bolt"></i> محبوب‌ترین‌ها</h1>
<div class="row">

@foreach ($mostPups as $mostPup)
<div class="col-lg-2 col-md-4 col-sm-6">
    <div class="video-item">
        <div class="thumb">
            <div class="hover-efect"></div>
            <small class="time">{{$mostPup->TimeInHuman}}</small>
            <a href="#"><img src="{{$mostPup->tumbnail}}" alt=""></a>
        </div>
        <div class="video-info">
            <a href="#" class="title">{{Str::limit($mostPup->description,50,'...')}}</a>
            <a href="{{route('videos.edit',$video->slug)}}">
                <i class="fa fa-pencil" aria-hidden="true"></i>
                </a>
            <a class="channel-name" href="">{{$mostPup->name}} <span>
                    <i class="fa fa-check-circle"></i></span></a>
            <span class="views"><i class="fa fa-eye"></i>2.8M بازدید </span>
            <span class="date"><i class="fa fa-clock-o"></i>{{$mostPup->created_at->diffForHumans()}}</span>
            <span class="date"><i class="fa fa-tag"></i>{{$video->category?->name }}</span>

        </div>
    </div>
</div>
@endforeach
@endsection
            
                
                
           