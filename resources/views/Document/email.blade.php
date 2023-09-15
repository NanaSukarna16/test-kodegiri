<!DOCTYPE html>
<html>

<head>
    <title>Email Document</title>
</head>

<body>
    <h1>Selamat Datang</h1>
    <p>Ini adalah pesan email yang dikirim dari aplikasi test Nana Sukarna.</p>
    <p>DATA DOCUMENT</p>
    <h3>{{$data->title}}</h3>
    <p>{{$data->content}}</p>
    <img style="max-width: 150px;" class="mr-3" alt="Bootstrap Media Preview"
        src="{{asset('storage/signatures/'.$data->signing)}}" />
</body>

</html>