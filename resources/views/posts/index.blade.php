@extends('layouts.navbar')

@section('header','blog')
@section('contents')
    <br/><br/>
    <div class="container mt-5">

        <div class="d-flex justify-content-between">
            {{$posts->links()}}
            <div>
                <button class="btn btn-primary">Create Post</button>
            </div>
        </div>
        
        @foreach ($posts as $idx=>$post)
            <div class="d-flex mb-4">
                <div style="flex-shrink: 0;">
                    <img src="{{$post->image}}" style="width:600px !important; height:500px !important; " alt="image{{++$idx}}">
                </div>
                <div class="card p-3">
                    <div class="card-title">
                        <div class="d-flex">
                            <img src="{{asset('assets/image/thantzinaung.jpg')}}" style="width:30px; height:30px" class="rounded-circle" alt="thantzinaung">
                            <div>
                                <span class="ms-3 text-muted">{{$post->user->name}}</span>
                                <p class="ms-3 text-muted small">{{$post->created_at->format('d M Y')}}</p>
                            </div>
                        </div>
                        <h2>{{$post->title}}</h2>

                    </div>
                    <div class="card-body">
                        <p>{{Str::limit($post->content,300)}}</p>
                        <a href="/posts/{{$post->id}}">View More</a>
                    </div>
                    <div class="card-body mb-0 pb-0">
                        <hr>
                        <div class="d-flex justify-content-between">
                            <div class="d-flex text-muted">
                                <div class="d-flex me-5">
                                    <p>5 viewers</p>
                                    <i class="fa-regular fa-eye ms-2"></i>
                                </div>
                                <div class="d-flex">
                                    <p>1 Comment</p>
                                    <a href="/posts/{{$post->id}}">
                                        <i class="fa-regular fa-comment ms-2"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex text-muted ms-auto">
                                <p>2</p>
                                <a href="#" class="ms-2 text-decoration-none">
                                    <i class="fa-solid fa-heart text-danger"></i>
                                    {{-- <i class="fa-regular fa-heart text-danger"></i> --}}
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}
    </div>
@endsection
@section('footer')
@endsection