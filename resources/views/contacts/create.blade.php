<?php
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>document</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <h1>Tambah Kontak</h1>

        <form action="{{ route('contacts.store') }}" method="post">
            @csrf
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name"><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>
            <label for="phone">Telepon:</label>
            <input type="text" id="phone" name="phone"><br><br>
            <input type="submit" value="Simpan">
        </form>
    </body>
</html>