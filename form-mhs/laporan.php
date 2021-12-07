<html>

<head>
    <title>Laporan</title>
</head>

<body>
    <?php
    if (isset($_POST['save'])) {
        $nobp = strip_tags($_POST['nobp']);
        $Nama = strip_tags($_POST['Nama']);
        $mk = strip_tags($_POST['mk']);
        $uts = strip_tags($_POST['uts']);
        $uas = strip_tags($_POST['uas']);
        if ($mk == 'M') {
            $sks = 3;
            $nm_mk = 'Web Programing';
        } else {
            $sks = 3;
            $nm_mk = 'Rekayasa Perangkat Lunak';
        }
        $nilai = 0.4 * $uts + 0.6 * $uas;
        if ($nilai >= 80 && $nilai <= 100) {
            $huruf = 'A';
            $ket = 'Sangat Baik';
        } elseif ($nilai >= 65 && $nilai <= 79) {
            $huruf = 'B';
            $ket = 'Baik';
        } elseif ($nilai >= 55 && $nilai <= 54) {
            $huruf = 'C';
            $ket = 'Cukup';
        } elseif ($nilai >= 45 && $nilai <= 53) {
            $huruf = 'D';
            $ket = 'Kurang';
        } else {
            $huruf = 'E';
            $ket = 'Sangat Kurang';
        }

    ?>
        <table border="1" width="50%" align="center" cellspacing="0" cellpadding="5">
            <tr>
                <td colspan="3" align="center" style="background:#ccc;">Laporan Nilai</td>
            </tr>
            <tr>
                <td width="30%">Nobp/Nama Mahasiswa</td>
                <td align="center">:</td>
                <td><?php echo $nobp . '/' . $nama; ?></td>

            </tr>
            <tr>
                <td>Mata Kuliah</td>
                <td align="center">:</td>
                <td><?php echo $nm_mk; ?> </td>

            </tr>
            <tr>
                <td>SKS</td>
                <td align="center">:</td>
                <td><?php echo $sks; ?> </td>

            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td align="center">:</td>
                <td><?php echo $uts; ?> </td>

            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td align="center">:</td>
                <td><?php echo $uas; ?> </td>

            </tr>
            <tr>
                <td>Nilai Akhir</td>
                <td align="center">:</td>
                <td><?php echo $nilai; ?> </td>

            </tr>
            <tr>
                <td>Nilai Huruf</td>
                <td align="center">:</td>
                <td><?php echo $huruf; ?> </td>

            </tr>
            <tr>
                <td>Keterangan</td>
                <td align="center">:</td>
                <td><?php echo $ket; ?> </td>

            </tr>


        </table>
    <?php } ?>
</body>

</html>