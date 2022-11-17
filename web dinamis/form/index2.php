<html>
    <head> 
        <title>Menggunakan metode POST</title>
    </head>
    <body>
        <h1>Menggunakan Metode Post</h1>
        <form method="POST">
            <!-- Passing Data di dalam body request tanpa memnampilkan secara url-->
            <div>
                <label>Email</label> <br>
                <input type="email" name="email">
            </div>
            <div>
                <label>Password</label> <br>
                <input type="password" name="password">
            </div>
            <div>
                <button>Login</button>
            </div>
            <?php 
            $email = @$_POST['email'];
            $password = @$_POST['password'];

            echo "email = {$email} <br>";
            echo "passwordnya = {$password}";

            ?>
        </form>
    </body>
</html>