<html>

<body>
    <?php
    if (isset($_POST['simpan'])) {

        $nobp      = $_POST['nobp'];;
        $nama = $_POST['nama'];;
        $jk = $_POST['jk'];;
        $hobi = $_POST['hobi'];;
        $agama = $_POST['agama'];;
        $alamat = $_POST['alamat'];;
        $anak_ke = $_POST['anak_ke'];;
        $tgl_lahir = $_POST['tgl_lahir'];;

        if (!empty($hobi)) {
            $semua_hobi = implode(',', $hobi);
        }

        if ($nobp == "" || $nama == "") {
            echo '<script type="text/javascript">alert("Data Tidak Boleh Kosong")
    window.location ="mahasiswa.php";</script>';
        } else {
            echo '<table border="1" color="blue" width="60%" align="center" cellspacing="0" cellpadding="5">';
            echo '<tr><td colspan = "2" align="center" style="background:#438eb9;">
    Laporan Data Mahasiswa</td>
    </tr>';
            echo '<tr>
        <td>NoBp</td>
        <td>' . $nobp . '</td>
        </tr>';
            echo '<tr>
        <td>Nama</td>
        <td>' . $nama . '</td>
        </tr>';
            echo '<tr>
        <td>Jenis Kelamin</td>
        <td>' . $jk . '</td>
        </tr>';
            echo '<tr>
        <td>Hobi</td>
        <td>' . $semua_hobi . '</td>
        </tr>';
            echo '<tr>
            <td>Hobi</td>';
            echo '<td>';
            if (!empty($hobi)) {
                $no = 0;
                foreach ($hobi as $value) {
                    $no++;
                    echo "$no. $value <br>";
                }
            }
            echo '</td>';
            echo '<tr>
            <td>Agama</td>
            <td>' . $agama . '</td>
            </tr>';
            echo '<tr>
            <td>Alamat</td>
            <td>' . $alamat . '</td>
            </tr>';
            echo '<tr>
        <td>Anak Ke</td>
        <td>' . $anak_ke . '</td>
        </tr>';
            echo '<tr>
        <td colspan="2" align="center"> <a href="mahasiswa.php">Kembali</a> </td>
        </tr>';
            echo '</table>';
        }
    } else {
        die("Akses Dilarang");
    }

    ?>
</body>

</html>