<html>

<head>
    <title>Form</title>
</head>

<body>
    <h2 align="center">&nbsp;</h2>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" name="input">
        <table border="0" width="50%" align="center" cellpadding="5">
            <tr>
                <td colspan="3">Nobp :xxxx xxxx&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Nama:xxxx xxxx</td>
            </tr>
            <tr>
                <td colspan="3" style="background:green;">Input Pembayaran Penginapan</td>
            </tr>
            <tr>
                <td>No. Transaksi</td>
                <td width="3%">:</td>
                <td><input type="text" name="transaksi" style="width: 80%;"></td>
            </tr>

            <tr>
                <td>Tanggal</td>
                <td width="3%">:</td>
                <td><input type="date" name="tanggal" style="width: 100%"></td>
            </tr>

            <tr>
                <td>Kode Pelanggan</td>
                <td>:</td>
                <td>
                    <input type="radio" name="kp" value="P001" checked> P001
                    <input type="radio" name="kp" value="P002"> P002
                    <input type="radio" name="kp" value="P003"> P003
                </td>
            </tr>
            <tr>
                <td>Jenis Kamar</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jk" value="A" checked> A
                    <input type="radio" name="jk" value="B"> B
                    <input type="radio" name="jk" value="C"> C
                    <input type="radio" name="jk" value="D"> D
                    <input type="radio" name="jk" value="E"> E
                </td>
            </tr>

            <tr>
                <td>Lama Inap(Hari)</td>
                <td>:</td>
                <td><input type="number" name="li" style="width: 60%;"></td>
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
        $transaksi    = strip_tags($_POST['transaksi']);
        $tanggal    = strip_tags($_POST['tanggal']);
        $kp      = strip_tags($_POST['kp']);
        $jk     = strip_tags($_POST['jk']);
        $li     = strip_tags($_POST['li']);

        if ($kp == "P001") {
            $nama  = "Annisa";
            $spelanggan = 'Member';
        } elseif ($kp == "P002") {
            $nama  = "Syukri";
            $spelanggan = 'Non Member';
        } else {
            $nama = "Ulfa";
            $spelanggan = "Non Member";
        }

        if ($jk = "A") {
            $hsewa = 100000;
            $nm_kamar = "Kamar A";
        } elseif ($jk = "B") {
            $hsewa = 150000;
            $nm_kamar = "Kamar B";
        } elseif ($jk = "C") {
            $hsewa = 200000;
            $nm_kamar = "Kamar C";
        } elseif ($jk = "D") {
            $hsewa = 250000;
            $nm_kamar = "Kamar D";
        } else {
            $hsewa = 300000;
            $nm_kamar = "Kamar E";
        }

        $totharga = $li * $hsewa;

        if ($li > 5) {
            $diskon = 0.1 * $totharga;
        } else {
            $diskon = 0;
        }
        $totbayar = $totharga - $diskon;

    ?>
        <table border="1" width="50%" align="center" cellpadding="5" cellspaccing="0">
            <tr>
                <td colspan="3" align="center" style="background: green;">Laporan Pembayaran Penginapan</td>
            </tr>
            <tr>
                <td colspan="3" align="left" style="background: green;">Tanggal : <?php echo $tanggal; ?></td>
            </tr>
            <tr>
                <td width="30%">No. Transaksi</td>
                <td align="center">:</td>
                <td><?php echo $transaksi; ?></td>
            </tr>

            <tr>
                <td width="30%">Kode/Nama Pelanggan</td>
                <td align="center">:</td>
                <td><?php echo $kp . '/' . $nama; ?></td>
            </tr>

            <tr>
                <td>Status Pelanggan</td>
                <td align="center">:</td>
                <td><?php echo $spelanggan; ?></td>
            </tr>

            <tr>
                <td width="30%">Jenis/Nama Kamar</td>
                <td align="center">:</td>
                <td><?php echo $jk . '/' . $nm_kamar; ?></td>
            </tr>

            <tr>
                <td>Lama Menginap</td>
                <td align="center">:</td>
                <td><?php echo $li ?> Hari</td>
            </tr>


            <tr>
                <td>Harga Sewa Kamar per Hari</td>
                <td align="center">:</td>
                <td>Rp. <?php echo $hsewa; ?></td>
            </tr>

            <tr>
                <td>Total Harga</td>
                <td align="center">:</td>
                <td>Rp.<?php echo $totharga; ?></td>
            </tr>

            <tr>
                <td>Diskon</td>
                <td align="center">:</td>
                <td>Rp. <?php echo $diskon; ?></td>
            </tr>
            <tr>
                <td>Total Bayar</td>
                <td align="center">:</td>
                <td>Rp. <?php echo +$totbayar; ?></td>
            </tr>
        </table>

    <?php   }   ?>
</body>

</html>