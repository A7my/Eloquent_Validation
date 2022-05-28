@extends('../app')

@section('title')
Edit Post
@endsection

@section('content')
<form method="POST" action="{{route('posts.update' , $post->id)}}">
    @csrf
    @method('PUT')
<div class="form-group">
    <label for="exampleInputEmail1">Your Title</label>
    <input type="text" value="{{$post->title}}" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Title Name">
</div>

<div class="form-group">
    <label for="exampleFormControlTextarea1">Body</label>
    <textarea name="body" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$post->body}}</textarea>
</div>
<button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
