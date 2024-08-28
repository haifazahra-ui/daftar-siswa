<?php

$students = [
    [
        "nama" => "Haifazahra",
        "kelas" => "XI",
        "jurusan" => "PPLG",
        "umur" => 17,
        "keterangan" => "hadir"
    ],
    [
        "nama" => "Ira",
        "kelas" => "XI",
        "jurusan" => "PPLG",
        "umur" => 15,
        "keterangan" => "alfa"
    ],
];

// var_dump($students);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1> Daftar Siswa</h1>
    <?php foreach ($students as $student) :?>
      <ul style="margin-bottom: 20px:">
        <li>Nama: <?php echo $student['nama']?></li>
        <li>Kelas: <?php echo $student['kelas']?></li>
        <li>Jurusan: <?php echo $student['jurusan']?></li>
        <li>Umur: <?php echo $student['umur']?></li>
        <li>Keterangan: <?php echo $student['keterangan']?></li>
      </ul>
    <?php endforeach ?>
    </body>
    </html>