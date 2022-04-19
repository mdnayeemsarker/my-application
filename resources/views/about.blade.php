<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Us</title>
</head>

<body>
    <a href="{{ url('/') }}">Home</a>
    <h2>This is an About Us Page</h2>

    <br>
    <form action="{{ route('about.store') }}" method="post">
        @csrf
        <input type="text" name="name" placeholder="Write Your Name Here.">
        <input type="email" name="email" placeholder="Write Your Email Here.">
        <input type="phone" name="phone" placeholder="Write Your Phone Here.">
        <button type="submit">Submit</button>
    </form>


</body>

</html>
