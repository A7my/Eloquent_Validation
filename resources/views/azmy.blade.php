<form action="{{route('azmy.store')}}" method="POST">
@csrf
<input type="text" name="text1" value="{{old('text1')}}">

@error('text1')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<input type="text" name="text2" value="{{old('text1')}}">


@error('text2')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
<input type="submit">
</form>
