<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US</title>
</head>
<body>
    <h1>Contact Us Anytime</h1>
    <form action="{{route('contact')}}" method="post">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="email" name="email" placeholder="email">
        <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
        <input type="submit" value = "Submit">



    </form>
</body>
</html>