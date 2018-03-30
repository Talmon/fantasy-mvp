@extends('layouts.master')

@section('content')

    <div class="col-sm-8 blog-main">

        <h1>Create a Post</h1>
        <hr>


        <form method="POST" action="/posts">

            {{ csrf_field()  }}

            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="title" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Body</label>
                <textarea type="body" class="form-control" id="body" name="body"> </textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>

            @include('layouts.errors')
        </form>

    </div>

@endsection
