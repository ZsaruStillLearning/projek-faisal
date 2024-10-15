<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Kontak</h1>

    <ul>
        @foreach($contacts as $contact)
        <li>
         {{ $contact->name }} ({{ $contact->email }})
        </li>
        @endforeach
    </ul>
</body>
</html>