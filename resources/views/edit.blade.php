<h1>Edit Peserta</h1>
<form action="/edit" method="POST">
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <p>{{$data['password']}}</p>
    <input type="text" name="password" value="{{$data['password']}}"> <br><br>
    <button type="submit">Update</button>
</form>