<?php
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>document</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <h1>Edit Kontak</h1>

        <form action="{{ route('contacts.update', $contact->id) }}" method="post">
            @csrf
            @method('PUT')
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" value="{{ $contact->name }}"><br><br>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $contact->email }}"><br><br>
            <label for="phone">Telepon:</label>
            <input type="text" id="phone" name="phone" value="{{ $contact->phone }}"><br><br>
            <input type="submit" value="Simpan">
        </form>
    </body>
</html>