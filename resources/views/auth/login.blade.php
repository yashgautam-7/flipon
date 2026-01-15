<form action="{{route('userlogin')}}"  method="POST">
    @csrf
    <h3>User Info</h3>
    <label for="">Email</label>
    <input type="text" name="email" placeholder="Enter User Mail" /> </br>

    <label for="">Password</label>
    <input type="password" name="password" placholder="Enter Password" / ></br> </br>

    <button type="submit"> LOG IN </button>
</form>
