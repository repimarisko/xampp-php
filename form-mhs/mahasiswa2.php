<html>

<head>
    <title>Form</title>
</head>

<body>
    <h2 align="center">&nbsp;</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="input">
        <table border="0" width="50%" align="center" cellpadding="5">
            <tr>
                <td colspan="3"><b>Nobp :***&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nama:***</b></td>
            </tr>
            <tr>
                <td colspan="3" style="background:#ccc;">Input nilai</td>
            </tr>
            <tr>
                <td>Nobp</td>
                <td width="3%">:</td>
                <td><input type="text" name="nobp" style="width: 60%;" placeholder="isi nobp"></td>
            </tr>

            <tr>
                <td>Nama Mahasiswa</td>
                <td width="3%">:</td>
                <td><input type="text" name="nama" style="width: 60%;" placeholder="isi nama"></td>
            </tr>

            <tr>
                <td>Mata kuliah</td>
                <td>:</td>
                <td>
                    <input type="radio" name="mk" value="M" checked> Web programing
                    <input type="radio" name="mk" value="N">Rekayasa Perangkat lunak
                </td>
            </tr>

            <tr>
                <td>Nilai Uts</td>
                <td>:</td>
                <td><input type="number" name="uts" style="width: 50%;" placeholder="Nilai Uts"></td>
            </tr>

            <tr>
                <td>Nilai Uas</td>
                <td>:</td>
                <td><input type="number" name="uas" style="width: 40%;" placeholder="Nilai Uas"></td>
            </tr>

            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>

            <tr>
                <td>&nbsp;</td>
                <td><input type="reset" name="reset" value="batal"></textarea></td>
                <td><input type="submit" name="save" value="simpan"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['save'])) {
        $nobp    = strip_tags($_POST['nobp']);
        $nama    = strip_tags($_POST['nama']);
        $mk      = strip_tags($_POST['mk']);
        $uts     = strip_tags($_POST['uts']);
        $uas     = strip_tags($_POST['uas']);

        if ($mk == "M") {
            $sks  = 3;
            $nm_mk = 'Web Programing';
        } else {
            $sks    = 3;
            $nm_mk  = 'Rekayasa Perangkat lunak 1';
        }

        $nilai = 0.4 * $uts + 0.6 * $uas;

        if ($nilai >= 80 && $nilai <= 100) {
            $huruf  = "A";
            $ket    = "Sangat Baik";
        } elseif ($nilai >= 65 && $nilai <= 79) {
            $huruf  = "B";
            $ket    = "Baik";
        } elseif ($nilai >= 55 && $nilai <= 64) {
            $huruf  = "C";
            $ket    = "Cukup";
        } elseif ($nilai >= 45 && $nilai <= 54) {
            $huruf  = "D";
            $ket    = "Kurang";
        } else {
            $huruf  = "E";
            $ket    = "Sangat Kurang";
        }

    ?>
        <table border="1" width="50%" align="center" cellpadding="5" cellspaccing="0">
            <tr>
                <td colspan="3" align="center" style="background: #ccc;">LAPORAN NILAI</td>
            </tr>
            <tr>
                <td width="30%">Nobp/Nama Mahasiswa</td>
                <td align="center">:</td>
                <td><?php echo $nobp . '/' . $nama; ?></td>
            </tr>

            <tr>
                <td>Mata Kuliah</td>
                <td align="center">:</td>
                <td><?php echo $nm_mk; ?></td>
            </tr>

            <tr>
                <td>SKS</td>
                <td align="center">:</td>
                <td><?php echo $sks; ?></td>
            </tr>

            <tr>
                <td>Nilai Uts</td>
                <td align="center">:</td>
                <td><?php echo $uts; ?></td>
            </tr>

            <tr>
                <td>Nilai uas</td>
                <td align="center">:</td>
                <td><?php echo $uas; ?></td>
            </tr>


            <tr>
                <td>Nilai akhir</td>
                <td align="center">:</td>
                <td><?php echo $nilai; ?></td>
            </tr>

            <tr>
                <td>Nilai huruf</td>
                <td align="center">:</td>
                <td><?php echo $huruf; ?></td>
            </tr>

            <tr>
                <td>Keterangan</td>
                <td align="center">:</td>
                <td><?php echo $ket; ?></td>
            </tr>
        </table>

    <?php   }   ?>
</body>

</html>