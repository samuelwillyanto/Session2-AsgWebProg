<!DOCTYPE html>
<html>
<center>
<head>
    <title>Update</title>
</head>
<style>
    p {
        width: 350px;
    }
    thead {
        background-color: #cccddd;
    }
</style>
<body>
    <h2>PHP MySQL Query Update</h2>
    <form action="proses_update.php" method="post">
        <?php
        $kode_matkul = $_GET['kode_matkul'];
        include "connection.php";        
        $query = mysqli_query($conf, "SELECT * FROM mata_kuliah where kode_matkul = '$kode_matkul'");
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <table>
                <input type="hidden" name="kode_matkul" value="<?php echo $data['kode_matkul']; ?>">
                <tr>
                    <td>Nama Matkul</td>
                    <td><input type=" text" name="nama_matkul" value="<?php echo $data['nama_matkul']; ?>"></td>
                </tr>
                <tr>
                    <td>Jam Matkul</td>
                    <td><input type="text" name="jam_matkul" value="<?php echo $data['jam_matkul']; ?>"></td>
                </tr>
                <tr>
                    <td>Ruang Kelas</td>
                    <td><input type="text" name="ruang_kelas" value="<?php echo $data['ruang_kelas'];  ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="Simpan"></td>
                </tr>
            </table>
        <?php } ?>
    </form>
</body>
</center>
</html>