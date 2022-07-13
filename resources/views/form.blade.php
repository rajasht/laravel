<h1>Login Form</h1>
<br><br>
<form action="user" method="POST">
    @csrf
    <input type="text" name="Username" placeholder="Enter Username"/>
    <br>
    <span style="color:red">@error('Username'){{$message}}@enderror</span>
    <br>
    <input type="password" name="Password" placeholder="Enter Password"/>
    <br>
    <span style="color:red">@error('Password'){{$message}}@enderror</span>
    <br>
    <button type="submit">Login</button>

</form>