<?php
$title = 'Latihan 1';
$subtitle = 'Daftar Mahasiswa';
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
</head>
<body>
    <h1><?= $title ?></h1>
    <h2><?= $subtitle ?></h2>
    <?php
    $students = [
        [
            'Nama' => 'Adam Arthur Faizal',
            'Nim' => 'AAAAA',
            'Prodi' => 'Teknik Informatika',
            'Angkatan' => 2019
        ],
        [
            'Nama' => 'Aksal Syah Falah',
            'Nim' => 'BBBBB',
            'Prodi' => 'Teknik Informatika',
            'Angkatan' => 2019
        ],
        [
            'Nama' => 'Aqil Satria Ramadhanu',
            'Nim' => 'CCCCC',
            'Prodi' => 'Teknik Informatika',
            'Angkatan' => 2019
        ],
        [
            'Nama' => 'Sari Eka Nur Marifah',
            'Nim' => 'DDDDD',
            'Prodi' => 'Teknik Informatika',
            'Angkatan' => 2019
        ],
        [
            'Nama' => 'Tri Wulandari',
            'Nim' => 'EEEEE',
            'Prodi' => 'Teknik Informatika',
            'Angkatan' => 2019
        ],
    ];
    ?>

    <ul>
    <?php foreach ($students as $student): ?>
        <li><a href="latihan2.php?nama=<?= $student['Nama']?>&nim=<?= $student['Nim']?>&prodi=<?= $student['Prodi']?>&angkatan=<?= $student['Angkatan']?>" id="link"><?= $student['Nama'] ?></a></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>