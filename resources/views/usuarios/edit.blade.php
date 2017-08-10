<!DOCTYPE html>
<html>
    <head>
        <title>Home</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="container">
          <form method="post" action="/users/{{ $user[0]->id }}">
            <p>{{ $user[0]->id }}</p>
            <p>{{ $user[0]->Fecha_Creado }}</p>

            <input name="Nombre" type="text" value="{{ $user[0]->Nombre }}" placeholder="Nombre" />
            <input name="Status" type="text" value="{{ $user[0]->Status }}" placeholder="Status" />

            <input type="submit" value="Actualziar" />

          </form>
        </div>
    </body>
</html>
