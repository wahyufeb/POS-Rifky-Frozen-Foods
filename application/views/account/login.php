<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Masuk </title>
</head>
<body>
    <form action="<?=base_url()?>Login/proses_login" method="post">
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><button type="submit">Masuk</button></td>
        </tr>
    </table>
    </form>
</body>
</html>