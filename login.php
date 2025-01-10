<?php
require 'koneksi.php';
$email = $_POST["email"];
$password = $_POST["password"];

$query_sql = "SELECT * FROM tbl_users 
            WHERE email = '$email' AND password = '$password'";

$result = mysqli_query($conn, $query_sql);

if (mysqli_num_rows($result) > 0) {
    header("Location: dashboard.html");
} else {
    echo "
    <html>
    <head>
        <style>
            body {
                background-image: url('404.jpg');
                background-size: cover;
                background-position: center;
                height: 100vh;
                display: flex;
                justify-content: center; /* Horizontally center */
                align-items: center; /* Vertically center */
                margin: 0;
                font-family: Arial, sans-serif;
            }
            .container {
                text-align: center;
                background-color: rgba(255, 255, 255, 0.7); /* Slightly transparent background */
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
                width: 80%;
                max-width: 600px;
            }
            h1 {
                color: #333;
                font-size: 24px;
                margin-bottom: 20px; /* Space between the text and link */
            }
            a {
                text-decoration: none;
                color: #fff;
                background-color: #007BFF;
                padding: 10px 20px;
                border-radius: 5px;
                display: inline-block;
                font-size: 16px;
                text-align: center;
            }
            a:hover {
                background-color: #0056b3;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <h1>Email atau Password Anda Salah. Silahkan Coba Login Kembali.</h1>
            <a href='index.html'><strong>Login</strong></a>
        </div>
    </body>
    </html>
    ";
}
?>
