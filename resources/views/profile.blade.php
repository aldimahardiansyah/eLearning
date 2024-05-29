<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>

<body>
    @php
        $role = 'Admin';
    @endphp
    <h1>Profile</h1>
    @if ($role == 'Admin')
        <h3>Selamat datang <?= $nama ?>, Anda login sebagai Admin. </h3>
    @endif
</body>

</html>
