<html>
    <head>
        <title>Login Ges</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
       <center> <h1>Login Aplikasi</h1> </center>
        <h6>User Access</h6>
        <div class="login">
            <form action="proses.php" method="post">
                <table>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="text" name="email" id="email"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td>:</td>
                        <td><input type="password" name="pass" id="pass"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    <td><input type="submit" value="login"></td>
                </tr>
                <tr>
                    <td>Kembali ke Menu Utama <a href="../index.php">sini</a></td>
                </tr>
            </table>
        </form>
    </div>
    </body>
</html>