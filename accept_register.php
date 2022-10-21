<?php
require('koneksi.php');

$nama_lengkap = $_POST['nama_lengkap'];
$username = $_POST['username'];
$password = $_POST['password'];

// proses enkripsi
$salted_pass = $password . $username;
$encrypted_pass = encryptPass($salted_pass);

$data = mysqli_query($koneksi,"INSERT INTO user (nama_lengkap, username, password) VALUES ('$nama_lengkap', '$username', '$encrypted_pass');");

if($data==1){
?>

<script>
    alert('You have successfully registered, Please log in again!')
    let url="index.php";
    window.location.href=url;
</script>

<?php
}

else{
?>

<script>
    alert('You did not register successfully, please try again!')
    let url="register.php";
    window.location.href=url;
</script>

<?php
}

function encryptPass($pass) {
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

