@extends('app')

@section('title')
Add Post
@endsection

@section('content')
<form method="POST" action="{{route('posts.store')}}">
    @csrf
<div class="form-group">
    <label for="exampleInputEmail1">Title</label>
    <input id="title" type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
@error('title')
    <p style="color:red">{{ $message }}</p>
        <!-- <div class="alert alert-danger">{{ $message }}</div> -->

@enderror

    <!-- <input type="text" name="title" class="form-control" value="{{old('title')}}" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title Name"> -->
</div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Body</label>
    <textarea placeholder="Post Body" name="body" class="form-control @error('body') is-invalid @enderror" id="exampleFormControlTextarea1" rows="3">{{old('body')}}</textarea>

    @error('body')
        <p style="color:red">{{ $message }}</p>
        <!-- <div class="alert alert-danger">{{ $message }}</div> -->
    @enderror
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
@if(Session::has('msg'))
<div class="alert alert-warning" role="alert">
    {{Session::get('msg')}}
</div>
@endif

<!-- @if ($errors->any())
<div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif -->
@endsection




