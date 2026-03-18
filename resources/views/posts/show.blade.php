@extends('layouts.navbar')
@section('header','Show Page')
@section('contents')
<br><br><br>
<div class="container mt-5 d-flex">
    <div>
        <img src="{{$post->image}}" style="width: 500px;" alt="image">
    </div>
    <div class="card p-3">
        <div class="card-title">
            <div class="d-flex justify-content-between">
                <div class="d-flex">
                    <img src="{{asset('assets/image/thantzinaung.jpg')}}" style="width:30px; height:30px" class="rounded-circle" alt="thantzinaung">
                    <div>
                        <span class="ms-3 text-muted">{{$post->user->name}}</span>
                        <p class="ms-3 text-muted small">{{$post->created_at->format('d M Y - h:i:s')}}</p>
                    </div>
                </div>
                <div class="d-flex text-secondary fa-2x">
                    <div class="dropdown">
                        <button type="button" class="btn" data-bs-toggle="dropdown" aria-expanded="false" >
                            <span class="fw-bold fa-1.5rem">&#8942;</span>
                        </button>
                        
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a href="#" class="dropdown-item"> <i class="fa-solid fa-pen-to-square text-info me-2"></i> Edit</a></li>
                            <li><a href="#" class="dropdown-item" onclick="event.preventDefault(); if(confirm('Are you sure to delete this post?')){document.getElementById('postDelete-{{$post->id}}').submit()}"> <i class="fa-solid fa-trash text-danger me-2"></i> Delete</a></li>
                        </ul>
                        <form id="postDelete-{{$post->id}}" action="/posts/{{$post->id}}" method="POST">
                            @csrf
                            @method("DELETE")
                        </form>
                    </div>

                    <a href="/posts" class="text-muted ms-3 text-decoration-none">&times;</a>
                </div>
            </div>
            <h2>{{$post->title}}</h2>
        </div>
        <div class="card-body">
            <p>{{$post->content}}</p>
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
                        <i class="fa-regular fa-comment ms-2"></i>
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
        <div class="card-body" >
            <div style="height:200px; overflow-y:scroll; ">
                <div class="mb-3" >
                    @foreach ($comments as $comment)
                        <div class="d-flex">
                            <img src="{{asset('assets/image/thantzinaung.jpg')}}" width="30px" height="30px" class="rounded-circle me-3" alt="image">
                            <div>
                                <span class="text-muted small">{{$comment->user->name}}</span>
                                <p class="m-0 p-0">{{$comment->description}} </p>
                                <p class="text-muted small">{{$comment->created_at->format('d M')}} {{$comment->updated_at->diffForHumans()}}</p>
                            </div>
                        </div>
                            
                    @endforeach
                </div>
            </div>
            <form action="{{route('comments.store')}}" method="POST">
                @csrf

                <div class="input-group">
                    <input type="hidden" name="commentable_id" id="commentable_id" value="{{$post->id }}" />
                    <input type="hidden" name="commentable_type" id="commentable_type" value="App\Models\Post" />

                    <input type="text" name="description" class="form-control" placeholder="Write Something...">
                    <button type="submit" class="btn btn-info text-light"><i class="fa-solid fa-paper-plane"></i></button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection

@section('footer')
@endsection