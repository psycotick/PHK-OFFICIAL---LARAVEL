<!DOCTYPE html>
    <head>
        <title>Registro</title>
    </head>

    <body>
        <form action="/register" method="POST">
            @csrf
            <input type="text" name="name">
            <input type="text" name="surname">
            <input type="email" name="email">
            <input type="text" name="username">
            <input type="password" name="password">
            <input type="password" name="password_confirmation">
            <input type="submit" name="Ingresar">
        </form>
    </body>
