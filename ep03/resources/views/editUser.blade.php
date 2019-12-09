<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edição de Usuário</title>
</head>

<body>
    <form action="{{route('user.edit', ['user'=> $user])}}" method="post">
        @csrf
        @method('put')
        <label for="">Nome do usuário</label>
        <input name="name" type="text" value="{{$user->name}}">

        <label for="">E-mail do usuário</label>
        <input name="email" type="email" value="{{$user->email}}">

        <label for="">Senha do usuário</label>
        <input name="password" type="password">

        <input type="submit" value="Editar Usuário">
    </form>
</body>

</html>
