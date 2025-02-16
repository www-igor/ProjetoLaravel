<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

       
    </head>
   <body>
    <h1>Login adm</h1>

<form action="{{ route('loginAdm.login') }}" method="POST">
    @csrf
    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email"><br>
    <label for="password">Senha:</label><br>
    <input type="password" id="password" name="password"><br><br>
    <input type="submit" value="Submit">
    </form>
   </body>
</html>
