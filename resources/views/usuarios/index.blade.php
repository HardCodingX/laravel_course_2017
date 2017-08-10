<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
          <table class="table">
            @foreach ($users as $user)
              <tr>
                <td><a href="/users/{{ $user->id }}">{{ $user->id }}</a></td>
                <td>{{ $user->Nombre }}</td>
                <td>{{ $user->Fecha_Creado }}</td>
                <td>{{ $user->Status }}</td>
                <td><a href="/users/{{ $user->id }}/delete">Borrar</a></td>
            @endforeach
          </table>
        </div>
    </body>
</html>
