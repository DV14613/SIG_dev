<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Administrador de Contenidos">
    <meta name="author" content="Cargolap Logistica S.A">
    <meta name="keyword" content="Administrador Interno de Contenidos">
    <link rel="shortcut icon" href="<?= BASE_ASSETS ?>img/favicon.png">

    <title><?= APPNAME ?></title>
    <!-- CSS -->
    <link href="<?= BASE_ASSETS ?>css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Incluir un archivo php -->    
    <?php include BASE_RELATIVE.'/layouts/common/head.php'; ?>
    
    <h1>Vista 1</h1>
    <br>
    <img src="<?= BASE_ASSETS ?>/img/logo_cargolap.png">
    <table border="1">
        <tr>
            <th>Id</th>
            <th>Login</th>
            <th>Email</th>
            <th>Clave</th>
        </tr>
        <?php foreach ($tupla as $registro) : ?>
            <tr>
                <td><?= $registro['id'] ?></td>
                <td><?= $registro['login'] ?></td>
                <td><?= $registro['email'] ?></td>
                <td><?= $registro['clave'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>

</html>