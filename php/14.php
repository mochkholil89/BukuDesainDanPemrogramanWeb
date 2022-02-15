<html>  
<head><title>Halaman Login</title></head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>Username</td>
                <td> : </td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>: </td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td><input type="submit" name="login" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
if (isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username=="aknblitar" && $password=="aknblitar"){
        echo "LOGIN BERHASIL<br>";
        echo "Username yang diinputkan : <b>$username</b><br>";
        echo "Password yang diinputkan : <b>$password</b>";
    }
    else{
        echo "LOGIN GAGAL!! <br> Maaf Username Atau Password Salah !";
    }
}
?>