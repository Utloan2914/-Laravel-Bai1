<h2> Demo View Unicode </h2>
{{-- <h3> {{$title}} </h3> --}}
    @if(session('mess'))
        {{session('mess')}}
    @endif
    <form action="" method="POST" >
    <input type="text" name="username" placeholder="Username..." value="{{old('username')}}">
    <button name="submit">Submit</button>
    @csrf
</form>