<!DOCTYPE html>
<html lang="en"></html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link rel="stylesheet" href="css/login.css">

</head>
<body>
   <div class="container" style="height: 480px">
        <form form method="POST" action="{{ route('login') }}">
            @csrf
            <h2>Sign In</h2>
            <div class="input-box">
                <input type="text" name="email" required>
                <span>Email</span>
            </div>
                <div class="input-box">
            <input type="text" required="required">
            <span>Username</span>
            <i></i>
            </div>
            <div class="input-box">
            <input password="password" required="required">
            <span>Password</span>
            <i></i>
            </div>
            <div class="input-box">
             <input type="checkbox" onclick="showHide()" id="password">
             <span> Tampilkan Password</span>
            </div>
            <div class="links">
            <a href="#">Forgot Password?</a>
            <a href="#">Sign Up</a>
            </div>
            <input type="submit" value="Login">
        </form>
    </div>    

        <script>
        function showHide() {
        var inputan = document.getElementById("password");
        if (inputan.type === "password") {
            inputan.type = "text";
        } else {
            inputan.type = "password";
        }
        } 
</script>
</body>