<!DOCTYPE html>
<html>
<center>
<head>
    <title>Select</title>
    <style>
        table,
        tr,
        td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
</head>
<body>
    <h2>Daftar Mata Kuliah</h2>
    <a href="index.php">Input mata kuliah baru</a>
    <table>
        <thead>
            <tr>
                <td>kode_matkul</td>
                <td>nama_matkul</td>
                <td>jam_matkul</td>
                <td>ruang_kelas</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <?php
        include "connection.php";
        $query = mysqli_query($conf, 'SELECT * FROM mata_kuliah');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
                <td><?php echo $data['kode_matkul'] ?></td>
                <td><?php echo $data['nama_matkul'] ?></td>
                <td><?php echo $data['jam_matkul'] ?></td>
                <td><?php echo $data['ruang_kelas'] ?></td>
                <td>
                    <a href="update.php?kode_matkul=<?php echo $data['kode_matkul']; ?>">Update</a>
                    <a href="delete.php?kode_matkul=<?php echo $data['kode_matkul']; ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</center>
</html>