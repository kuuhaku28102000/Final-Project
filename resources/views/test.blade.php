<form action="{{ url('dangnhap') }}" method="POST">
   
    @csrf
    <input type="text" name="user" id="">
    <input type="password" name="password" id="">
    <input type="submit" value="Submit">
</form>