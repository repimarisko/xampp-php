<html>

<body>
    <?php
    if (isset($_POST['simpan'])) //jika tombol simpan di klik 
    {
        $nobp      = $_POST['nobp'];;
        $nama = $_POST['nama'];;
        $jk = $_POST['jk'];;
        $hobi = $_POST['hobi'];;
        $agama = $_POST['agama'];;
        $alamat = $_POST['alamat'];;
        $anak_ke = $_POST['anak_ke'];;
        $tgl_lahir = $_POST['tgl_lahir'];;;

        if (!empty($hobi))
            $semua_hobi = implode(',', $hobi);
    } else // jika tombol simpan belum di klik (url langsung diakses melalui proses 2.php)
    {
        die("Akses Dilarang");
    } //akhir if isset
    ?>

    <table border="1" width="60%" align="center" cellspacing="0" cellpadding="5">
        <tr>
            <td colspan="2" align="center" style="background: #438eb9;"> Laporan Data Mahasiswa</td>
        </tr>
        <tr>
            <td>Nobp</td>
            <td><?php echo $nobp; ?></td>
        </tr>

        <tr>
            <td>Nama</td>
            <td><?php echo $nama; ?></td>
        </tr>

        <tr>
            <td>Jenis Kelamin</td>
            <td><?php echo $jk; ?></td>
        </tr>

        <tr>
            <td>Hobi</td>
            <td><?php echo $semua_hobi; ?></td>
        </tr>

        <tr>
            <td>Hobi</td>
            <td><?php
                if (!empty($hobi)) {
                    $no = 0;
                    foreach ($hobi as $value) {
                        $no++;
                        echo "$no.$value <br>";
                    }
                }
                ?></td>
        </tr>

        <tr>
            <td>Agama</td>
            <td><?php echo $agama; ?></td>
        </tr>

        <tr>
            <td>alamat</td>
            <td><?php echo $alamat; ?></td>
        </tr>

        <tr>
            <td>Anak ke</td>
            <td><?php echo $anak_ke; ?></td>
        </tr>
        <tr>
            <td>Tanggal lahir</td>
            <td><?php echo $tgl_lahir; ?></td>
        </tr>

        <tr>
            <td colspan="2" align="center"><a href="mahasiswa.php">Kembali</a></td>
        </tr>

    </table>



</body>

</html>