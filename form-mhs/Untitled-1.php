<html>

<head>
    <title>Form</title>
</head>

<body>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="input">
        <table border="0" width="50%" align="center" cellpadding="5">
            <tr>
                <td colspan="3"><b>Nobp : 19101152630187<p></p> Nama:Syahreza Aulia Rahman</b></td>
            </tr>
            <tr>
                <td colspan="3" style="background:#ccc;">Input Gaji Pegawai</td>
            </tr>
            <tr>
                <td>No Slip Pegawai</td>
                <td width="3%">:</td>
                <td><input type="text" name="slip" style="width: 60%;" placeholder="isi slip pegawai"></td>
            </tr>

            <tr>
                <td>Nama Bulan</td>
                <td width="3%">:</td>
                <td><input type="radio" name="bulan" checked>Januari
                    <input type="radio" name="bulan">februari
                    <input type="radio" name="bulan">Maret
                    <input type="radio" name="bulan">April
                    <input type="radio" name="bulan">Mei
                    <input type="radio" name="bulan">Juni
                    <input type="radio" name="bulan">Juli
                    <input type="radio" name="bulan">Agustus
                    <input type="radio" name="bulan">September
                    <input type="radio" name="bulan">Oktober
                    <input type="radio" name="bulan">November
                    <input type="radio" name="bulan">Desember

                </td>
            </tr>


            <tr>
                <td>Tahun</td>
                <td>:</td>
                <td><input type="number" name="tahun" style="width: 50%;" placeholder="Tahun"></td>
            </tr>

            <tr>
                <td>Kode Pegawai</td>
                <td>:</td>
                <td>
                    <input type="radio" name="kode_pegawai" value="M" checked>P001
                    <input type="radio" name="kode_pegawai" value="N">P002
                    <input type="radio" name="kode_pegawai" value="B">P003
                </td>
            </tr>


            <tr>
                <td>jumlah jam lembur</td>
                <td>:</td>
                <td><input type="number" name="jumlah jam lembur" style="width: 40%;" placeholder="Nilai Uas"></td>
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
        $slip   = strip_tags($_POST['slip']);
        $bulan    = strip_tags($_POST['bulan']);
        $tahun      = strip_tags($_POST['tahun']);
        $kode_pegawai     = strip_tags($_POST['kode_pegawai']);
        $jumlahjamlembur     = strip_tags($_POST['jumlah jam lembur']);
        $nama      = strip_tags($_POST['nama']);
        $jam     = strip_tags($_POST['jam']);

        if ($kode_pegawai == "M") {
            $nama = 'Annisa';
            $golongan = 'I';
        } elseif ($kode_pegawai == "N") {
            $nama = "Syukri";
            $golongan = "II";
        } else {
            $nama = "Ulfa";
            $golongan = "III";
        }

        if ($golongan == "I") {
            $gaji_pokok = 2500000;
            $Tunjangan = 500000;
            $Uang_lembur = 35000;
        } elseif ($golongan == "II") {
            $gaji_pokok = 3500000;
            $Tunjangan = 600000;
            $Uang_lembur = 45000;
        } else {
            $gaji_pokok = 4000000;
            $Tunjangan = 700000;
            $Uang_lembur = 55000;
        }


        $gaji_lembur = $Uang_lembur / $jam * $jumlahjamlembur;
        $total_gaji = $gaji_pokok + $Tunjangan + $gaji_lembur;



    ?>
        <table border="1" width="50%" align="center" cellpadding="5" cellspaccing="0">
            <tr>
                <td colspan="3" align="center" style="background: #ccc;">LAPORAN NILAI</td>
            </tr>
            <tr>
                <td width="30%">LAPORAN GAJI PEGAWAI</td>
                <td align="center">:</td>
                <td><?php echo $slip; ?></td>
            </tr>

            <tr>
                <td>Bulan/Tahun</td>
                <td align="center">:</td>
                <td><?php echo  $bulan . '/' . $tahun; ?></td>
            </tr>

            <tr>
                <td>Nama Pegawai/Golongan</td>
                <td align="center">:</td>
                <td><?php echo $nama . '/' . $golongan; ?></td>
            </tr>

            <tr>
                <td>Jam Lembur</td>
                <td align="center">:</td>
                <td><?php echo $jam; ?></td>
            </tr>

            <tr>
                <td>Gaji Pokok</td>
                <td align="center">:</td>
                <td><?php echo $gaji_pokok; ?></td>
            </tr>


            <tr>
                <td>Tunjangan</td>
                <td align="center">:</td>
                <td><?php echo $Tunjangan; ?></td>
            </tr>

            <tr>
                <td>Uang lembur/jam</td>
                <td align="center">:</td>
                <td><?php echo $Uang_lembur; ?></td>
            </tr>

            <tr>
                <td>Gaji Lembur</td>
                <td align="center">:</td>
                <td><?php echo $gaji_lembur; ?></td>
            </tr>

            <tr>
                <td>Total gaji</td>
                <td align="center">:</td>
                <td><?php echo $total_gaji; ?></td>
            </tr>
        </table>

    <?php   }   ?>
</body>

</html>