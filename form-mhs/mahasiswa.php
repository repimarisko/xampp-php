<html>

<head>
    <title>Form Entri mahasiswa</title>
</head>


<style type="text/css">
    /* membuat kode css untuk tampilan form */
    body {
        background: #435678;
        font-family: Arial, Helvetica, sans-serif;
    }

    .form {
        padding: 20px;
        margin: auto;
        width: 30%;
        background: #fff;
        border-radius: 0px;

    }

    label {
        font-size: 11pt;
        color: #555;
    }

    input [type="text"],
    input [type="password"],
    input [type="date"],
    input [type="number"],
    select,
    textarea {
        padding: 5px;
        width: 100%;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
        font-size: 10px;
        margin: 6px 0px;
    }

    input[type="submit"],
    input[type="reset"] {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4;
        resize: vertical;
        font-size: 10pt;
        margin: 6px 0px;

    }
</style>

<body>

    <h1 style="text-align:center;color:#fff;">Input data mahasiswa</h1>
    <div class="form">
        <form action="proses.php" method="POST" name="input-mahasiswa">
            <label>NoBp</label>
            <input type="text" name="nobp" minlength="14" placeholder="Isi Nobp" maxlength="14" required />
            <br>
            <label>Nama</label>
            <input type="text" name="nama" minlength="3" placeholder="Isi Nama" maxlength="50" required />
            <br>
            <label>Jenis Kelamin</label>
            <br>
            <input type="radio" name="jk" value="Laki-Laki" />Laki-Laki
            <input type="radio" name="jk" value="Perempuan" />Perempuan<br><br>

            <label>Hobi</label><br>
            <input type="checkbox" name="hobi[]" value="Musik" />Musik
            <input type="checkbox" name="hobi[]" value="Olahraga" />Olahraga
            <input type="checkbox" name="hobi[]" value="Musik" />Musik
            <input type="checkbox" name="hobi[]" value="Ngoding" />Ngoding
            <input type="checkbox" name="hobi[]" value="Game" />Game
            <br>
            <br>

            <label>Agama</label>
            <select name="agama" style="width:100%;" required>
                <option value="">--- Pilih Agama ---</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Hindu">Hindu</option>

            </select>
            <label>Alamat</label>
            <textarea name="alamat" placeholder="Isi Alamat"></textarea>

            <label>Tanggal Lahir</label>
            <input type="date" name="tgl_lahir">
            <br>

            <label>Anak ke</label>
            <input type="number" name="anak_ke" min="1" max="20">
            <br>
            <input type="submit" value="Simpan" name="simpan">
            <input type="reset" value="Batal" name="reset">
        </form>
    </div>
</body>

</html>