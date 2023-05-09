<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download page del mio sito</title>
</head>
<body>
    <header style="display:flex; justify-content:space-between">
        <img src="https://cdn.logo.com/hotlink-ok/logo-social.png" style="width:100px;" alt="logo mio sito">
        <nav style="display:flex;">
            <ul style="list-style-type:none; display:inline;">
                <li style="display:inline;"><a href="{{route('home')}}">HOME</a></li>
                <li style="display:inline;"><a href="{{route('about')}}">ABOUT US</a></li>
                <li style="display:inline;"><a href="{{route('contact')}}">CONTACT US</a></li>
                <li style="display:inline;"><a href="{{route('download')}}">DOWNLOAD</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>{{$message}}</h1>
        <h3>Potrai scaricare:</h3>
        <ul>
            @foreach($downloadList as $downloadItem)
                <li><a href="#">{{$downloadItem}}</a></li>
            @endforeach
        </ul>
    </main>
</body>
</html>