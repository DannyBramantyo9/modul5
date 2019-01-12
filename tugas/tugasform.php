<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="tugasform.css">

    <!-- font awesome 4 Plugin -->
    <link rel="stylesheet" href="plugin/fa/css/font-awesome.css">
</head>
<body>

    <h1 class="tengah">Login Form</h1>
    <div class="konten">
        <div class="atas">
            <div class="grup">
            </div>
            <form action="hasil.php"method="post">
                <div class="grup">
                  <label for="">Email</label>
                    <input type="text" placeholder="Masukkan Email Anda" name="email">
                </div>

                <div class="grup">
                  <label for="">Password</label>
                    <input type="password" placeholder="Masukkan Password Anda" name="pass">
                </div>

                <div class="button2">
                    <div class="grup tengah">
                        <button type="submit" class="tombol kirim" action="hasil.php">Submit</button>
                        <button type="button" class="tombol hapus">Clear</button>
                    </div>
                </div>

            </form>
        </div>

    </div>

</body>
</html>
