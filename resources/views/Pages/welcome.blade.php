@extends('layout.master')
@section('judul')
welcome
@endsection
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>SELAMAT DATANG {{$firstName}} {{$lastName}}</h1>
    <h5> Terima Kasih telah bergabung di website Kami. Media Belajar Kita Bersama !</h5>
</body>
</html>
@endsection