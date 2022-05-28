@extends('../app')

@section('title')
Index
@endsection

@section('content')
<table class="table table-dark">
<thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Body</th>
        <th scope="col">Created At</th>
        <th scope="col">Upated At</th>
        <th scope="col">Edit</th>
        <th scope="col">Delete</th>
    </tr>
</thead>
<tbody>

@forelse($posts as $post)
    <tr>
        <th scope="row">{{$loop->index+1 }} {{"Of"}} {{$loop->count}}</th>
        <td>{{$post->title}}</td>
        <td>{{$post->body}}</td>
        <td>{{$post->created_at}}</td>
        <td>{{$post->updated_at}}</td>
        <td><a href="{{route('posts.edit' , $post->id)}}" class="btn btn-primary btn-sm" role="button" aria-pressed="true" >Edit</a></td>
        <!-- <td><a href="{{route('posts.destroy' , $post->id)}}" class="btn btn-secondary btn-sm" role="button" aria-pressed="true" >Delete</a></td> -->

        <form action="{{route('posts.destroy' , $post->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
        </tr>
    <tr>
@empty
<h3>No Posts</h3>

@endforelse

@if(Session::has('mymsg'))
<div class="alert alert-warning" role="alert">
{{Session::get('mymsg')}}
</div>
@endif
@if(Session::has('delmsg'))
<div class="alert alert-warning" role="alert">
{{Session::get('delmsg')}}
</div>

@endif
</tbody>
</table>
@endsection
