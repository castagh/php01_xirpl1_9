<!DOCTYPE html>
<html>
<head>
    <title>Array Numerik dan Assosiatif</title>
</head>
<body>
    <?php
    $Nama_Siswa[0]=array(
        'Nama'=>"Satria",
        'Kelas'=>"RPL 1",
    );
    $Nama_Siswa[1]=array(
        'Nama'=>"Arsyi",
        'Kelas'=>"RPL 2",
    );
    $Nama_Siswa[2]=array(
        'Nama'=>"Dhika",
        'Kelas'=>"RPL 3",
    );
    $Nama_Siswa[3]=array(
        'Nama'=>"Evan",
        'Kelas'=>"RPL 4",
    );
    $Nama_Siswa[4]=array(
        'Nama'=>"Fabian",
        'Kelas'=>"RPL 5",
    );
    $Nama_Siswa[5]=array(
        'Nama'=>"Irvan",
        'Kelas'=>"RPL 6",
    );
    $Hasil = array_slice($Nama_Siswa,0,2);
    echo '<pre>';
    print_r($Hasil);
    echo '</pre>';
    ?>
</body>
</html>