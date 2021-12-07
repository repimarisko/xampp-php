<html>

<head>
    <title>Form</title>
</head>

<body>

    <h2 align="center">&nbsp;</h2>
    <form action="laporan.php" method="post" name="input">
        <table border="0" width="50%" align="center" cellpadding="5">
            <tr>
                <td colspan="3"><b>Nobp :********&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Nama :*******************</b></td>
            </tr>
            <tr>
                <td colspan="3" style="background:#ccc;">Input Nilai</td>
            </tr>
            <tr>
                <td>Nobp</td>
                <td width="3%">:</td>
                <td><input type="text" name="nobp" style="width:60%;" placeholder="Isi NoBp"></td>

            </tr>
            <tr>
                <td> Nama Mahasiswa</td>
                <td width="3%">:</td>
                <td><input type="text" name="nama" style="width:90%;" placeholder="Isi Nama Mahasiswa"></td>

            </tr>
            <tr>
                <td> Mata Kuliah</td>
                <td>:</td>
                <td>


                    <input type="radio" name="mk" value="M" checked> Web Programing
                    <input type="radio" name="mk" value="N" checked>Rekayasa Perangkat Lunak


                </td>

            </tr>
            <tr>
                <td>
                    Nilai UTS
                </td>
                <td><input type="number" name="uts" style="width:70%;" placeholder="Nilai UTS"></td>
            </tr>
            <tr>
                <td>
                    Nilai UAS
                </td>
                <td><input type="number" name="uas" style="width:70%;" placeholder="Nilai UAS"></td>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <td><input type="reset" name="reset" value="Batal"></textarea></td>
                <td><input type="submit" name="save" value="Simpan"></td>
            </tr>

        </table>
    </form>


</body>


</html>