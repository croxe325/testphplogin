<?php
/* nama server kita */
$servername = "localhost";

/* nama database kita */
$database = "testphp";

/* nama user yang terdaftar pada database (default: root) */
$username = "root";

/* password yang terdaftar pada database (default : "") */
$password = "";

// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);

// mengecek koneksi
if (!$conn)
{
    die("Maaf koneksi anda gagal : " . mysqli_connect_error());
}
if (isset($_POST["tujuan"]))
{

    $tujuan = $_POST["tujuan"];

    if ($tujuan == "LOGIN")
    {
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT username, password FROM user WHERE username = '$username'";

        $result = mysqli_query($conn, $sql);
        list($username, $password_db) = mysqli_fetch_array($result);

        //jika data ditemukan dalam database, maka akan melakukan validasi dengan password_verify
        if (mysqli_num_rows($result) > 0)
        {

            /*
            validasi login dengan password_verify
            $userpass -----> diambil dari password yang diinputkan user lewat form login
            $password -----> diambil dari password dalam database
            */
            if (password_verify($password, $password_db))
            {

                //buat session baru
                session_start();
                $_SESSION['username'] = $username;

                //jika login berhasil, user akan diarahkan ke halaman admin
                echo '<script language="javascript">
                        window.alert("LOGIN BERHASIL!");
                        window.location.href="./";
                      </script>';
                die();
            }
            else
            {
                //Jika password tidak cocok, maka user akan diarahkan ke form login dan menampilkan pesan error
                echo '<script language="javascript">
                        window.alert("LOGIN GAGAL! Silakan coba lagi");
                        window.location.href="./";
                      </script>';
            }
        }
        else
        {
            //jika data tidak ditemukan dalam database, maka user akan diarahkan ke halaman error maka user akan diarahkan ke form login dan menampilkan pesan error
            echo '<script language="javascript">
                    window.alert("LOGIN GAGAL! Silakan coba lagi");
                    window.location.href="./";
                  </script>';
        }
    }
    else
    {
        $username = $_POST["username"];
        $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        $email = $_POST["email"];

        $query_sql = "INSERT INTO user (username, password, email) 
                                               VALUES ('$username', '$password', '$email')";

        if (mysqli_query($conn, $query_sql))
        {
            echo "
                        <h1>Username $username berhasil terdaftar</h1>
                        <a href='pages/login.php'>Kembali Login</h1>
                    ";
        }
        else
        {
            echo "Pendaftaran Gagal : " . mysqli_error($conn);
        }
    }
}

// tutup koneksi
mysqli_close($conn);
?>
