@extends('layouts.master')

@section('content')

   <h1>{{ $post->title }}</h1>

   <p class="lead">
      {{ $post->body }}
   </p>

   <hr>
   <article>
      @foreach($post->comments as $comment)
         <div class="list-group">
          <div class="list-group-item">
             {{ $comment->body  }}
          </div>
         </div>
      @endforeach
   </article>

   <div class="card card-block">
      <form  method="POST" action="/posts/{{  $post->id }}/comments"  class="">
         {{ csrf_field() }}
         <div class="form-group">
            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
         </div>

         <div class="form-group">
            <button class="form-control btn btn-primary">Add Comment</button>
         </div>

      </form>

      @include('layouts.errors')
   </div>
@endsection