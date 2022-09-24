<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="{{route('login')}}" method="post">
        @csrf
        <div>
            <input type="email" placeholder="enter your email" name="email" id="" required>
        </div>
        <div>
            <input type="password" placeholder="enter your password" name="password" id="" required>
        </div>
        <div>
            <input type="submit" name="submit" id="" required>
        </div>
    </form>
</body>
</html>