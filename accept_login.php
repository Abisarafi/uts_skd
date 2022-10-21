<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];
$_SESSION["username"] = $username;

//proses enkripsi
$salted_pass = $password . $username;
$dencrypted_pass = dencryptPass($salted_pass);

require('koneksi.php');
$data = mysqli_query($koneksi, "SELECT *FROM user WHERE password='$dencrypted_pass' and username='$username'");
if(mysqli_num_rows($data)==1){
    $d = mysqli_fetch_array($data); 

?>



        <script>
            alert('You have successfully logged in')
            let url="halamanUser.php";
            window.location.href=url;
        </script>

<?php
} else if(mysqli_num_rows($data)==0){
?>

        <script>
            alert('Failed to logged in')
            let url="index.php";
            window.location.href=url;
        </script>

<?php
    exit;
}

function dencryptPass($pass) {
    include 'lib/lib.php';

    $plain = str_replace(' ', '', $pass);
    $kunci = 'skdaubin';
    $panjang_plain = strlen($plain);
    $panjang_kunci = strlen($kunci);

    $index_x = 0;
    $index_y = 0;
    $hasil_cipher = array();
    $hasil_akhir = '';

    while ($index_x < $panjang_plain) {
        $x = substr($plain, $index_x, 1);
        $y = substr($kunci, $index_y, 1);

        $hasil_cipher[$index_x] = $tabel_vigenere[huruf_ke_angka($x)][huruf_ke_angka($y)];

        $index_x++;
        $index_y++;

        if ($index_y == $panjang_kunci) {
            $index_y = 0;
        }
    }

    $i = 0;
    while ($i < $index_x) {
        $hasil_akhir .= $hasil_cipher[$i];
        $i++;
    }

    return $hasil_akhir;
}
?>
