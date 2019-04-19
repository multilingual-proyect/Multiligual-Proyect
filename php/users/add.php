<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Administración - Multilingual</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Estilos CSS -->
    <link rel="stylesheet" type="text/css" media="screen" href="../../css/admin.css">
    <!-- Font awesome (iconos) -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Fuentes personalizadas -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">
    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.4.0.slim.min.js"integrity="sha256-ZaXnYkHGqIhqTbJ6MB4l9Frs/r7U4jlx7ir8PJYBqbI=" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Formulario para ingresar los nuevos usuarios -->
    <form action="">
        <div class="form-icon">
            <i class="fas fa-user-plus"></i>
        </div>
        <h1> Agregar usuario </h1>

        <input type="text" placeholder="Nombre">
        <input type="text" placeholder="Correo">
        <input type="text" placeholder="Contraseña">
        <input type="text" placeholder="Inscripción">
        <div class="center-button">
        <input type="submit" value="Agregar">
        </div>

    </form>

    <!-- En esta tabla se muestran los usuarios registrados, además; se tendrá que actualizar cada vez que se agregue un nuevo usuario -->
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Contraseña</th>
            <th>Inscripción</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Carlollos curiosón</td>
            <td>carlolloscurioson@gmail.com</td>
            <td>contraseñadeejemplo</td>
            <td>01/01/2001</td>
        </tr>
    </table>

</body>
</html>