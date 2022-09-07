@extends('layout')

@section('header')
    <!-- header -->
    <header class="header" style="background-color: rgb(12, 19, 58); background-image: url({{asset("images/photography.jpg")}});">
      <div class="header-text">
        <h1>tomorrow Blogs</h1>
        <h4>Dashboard of news content ...</h4>
      </div>
      <div class="overlay"></div>
    </header>
  
@endsection

@section('main')
    <!-- main -->
    <main class="container">
      <h2  style="color: whitesmoke"  class="header-title">Latest Blog Posts</h2>
      <section class="cards-blog latest-blog">
        @foreach ($posts as $post )
        <div class="card-blog-content">
         <img src="{{asset($post->imagePath)}}" alt="" />
         <p style="color: whitesmoke">
           {{$post->created_at->diffForHumans()}}
           <span>Written By {{$post->user->name}}</span>
         </p>
         <h4>
           <a href="{{route('blog.show', $post)}}">{{$post->title}}</a>
         </h4>
       </div>
        @endforeach
      </section>
    </main>
@endsection