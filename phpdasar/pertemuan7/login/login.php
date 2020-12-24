<?php 

// cek apakah tombol submit sudah tekan atau belum
if(isset($_POST["submit"])) { 

// cek username dan password
if($_POST["username"] == "admin" && $_POST["password"] == "123") {
// jika benar redirect halaman admin
header("Location: admin.php");
exit;
} else {
// jika salah tampilkan pesan salah
$error = true;
}

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>

<body>

    <h1>Login Admin</h1>

    <?php 
    if(isset($error)) : ?>
    <p>ERROR NIH</p>    
    <?php endif; ?>


    <form action="" method="post">

        <ul>
            <li>
                <label for="username">Username:</label>
                <input type="text" name="username" id="username">
            </li>
            <li>
                <label for="password">Password:</label>
                <input type="password" name="password" id="password">
            </li>
        </ul>

        <button type="submit" name="submit">Submit</button>

    </form>

</body>

</html>