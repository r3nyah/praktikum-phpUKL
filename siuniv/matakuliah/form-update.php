<?php
    include '../connect.php';
    $id_mk = $_GET['id_mk'];
    $query = "SELECT * FROM matakuliah WHERE id_mk = $id_mk";

    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Update Data Matakuliah</title>
    </head>
    <body>
        <form action="update.php" method="POST">
            <table>
                <tr>
                    <td><label for="nama">Nama Matakuliah</label></td>
                    <td>:</td>
                    <td><input type="text" name="nama_mk" id="nama" value="<?php echo $row['nama_mk']; ?>" ></td>
                </tr>

                <tr>
                    <td><label for="nama">sks</label></td>
                    <td>:</td>
                    <td><input type="text" name="sks" id="sks" value="<?php echo $row['sks']; ?>" ></td>
                </tr>

                <tr>
                    <td><label for="nama">semester</label></td>
                    <td>:</td>
                    <td><input type="text" name="semester" id="sks" value="<?php echo $row['semester']; ?>" ></td>
                </tr>

                <tr>
                    <td></td>
                    <td><input type="hidden" name="id_mk" value="<?php echo $row['id_mk']; ?>" ></td>
                    <td><input type="submit" value="Simpan" name="btnSimpan"></td>
                </tr>
            </table>
        </form>
    </body>
</html>