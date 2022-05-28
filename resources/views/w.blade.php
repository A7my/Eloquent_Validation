<form action="{{url('w2')}}">
    @csrf
    @method('PUT')
<input type="text" name="title">
<input type="submit">
</form>
