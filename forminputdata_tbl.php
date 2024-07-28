<?php
$koneksi=mysqli_connect("localhost","root","","inputdatadiri_b");
if (isset($_POST["tblsubmit"])) {
$nim= $_POST["fnim"];
$nama= $_POST["fnama"];
$semester= $_POST["fsemester"];
$prodi= $_POST["fprodi"];
$kelas= $_POST["fkelas"];
$nohp= $_POST["fnohp"];

$query="INSERT INTO inputdatadiri_b VALUES ('$nim','$nama','$semester','$prodi','$kelas','$nohp')";
mysqli_query($koneksi,$query);
}
?>

<html>

<head>

    <title>FROM INPUT DATA </title>
</head>

<body>
    <table style="color:rgb(8, 6, 222);" border='1' align="center cellspacing=" 0" <tr>
        <td>
            <form style="color:rgb(8, 1, 222);" method="post" name form omyy_tbl"action="">
                <table>
                    <tr>
                        <td colspan="3 align=" center height="24">
                            <b style="color:rgb(8, 186, 222);">INPUT DATA MAHASISWA </b>
                        </td>
                    </tr>
                    <tr style="color:rgb(8, 1, 222);">
                        <td>NIM</td>
                        <td align="center">:</td>
                        <td><input type="text" name="fnim" required> </td>
                    </tr>

                    <tr style="color:rgb(8, 1, 222);">
                        <td>NAMA</td>
                        <td align="center">:</td>
                        <td><input type="text" name="fnama" required> </td>
                    </tr>

                    <tr style="color:rgb(8, 1, 222);">
                        <td>SEMESTER</td>
                        <td align="center">:</td>
                        <td><input type="text" name="fsemester" required> </td>
                    </tr>

                    <tr style="color:rgb(8, 1, 222);">
                        <td>PRODI</td>
                        <td align="center">:</td>
                        <td><input type="text" name="fprodi" required> </td>
                    </tr>

                    <tr style="color:rgb(8, 1, 222);">
                        <td>KELAS</td>
                        <td align="center">:</td>
                        <td><input type="text" name="fkelas" required> </td>
                    </tr>

                    <tr style="color:rgb(8, 1, 222);">
                        <td>NOHP</td>
                        <td align="center">:</td>
                        <td><input type="text" name="fnohp" required> </td>
                    </tr>

                    <tr style="color:rgb(8, 186, 222);">

                        <td colspan="2" align="center"> <button type="submit" name="tblsubmit"> SIMPAN</button>
                        </td>

                        <td style="color:rgb(8, 186, 222);">

                            <button type="reset" name="tblreset">BATAL</button>
                        </td>
                    </tr>
                </table>
            </form>

</html>