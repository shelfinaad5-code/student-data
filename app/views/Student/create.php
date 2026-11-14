<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Mahasiswa</title>
</head>
<body>

<h1>Tambah Data Mahasiswa</h1>

<form action="index.php?url=students" method="POST">

    <label>NIM</label><br>
    <input type="text" name="nim" maxlength="15" required>
    <br><br>

    <label>Nama Mahasiswa</label><br>
    <input type="text" name="name" maxlength="100" required>
    <br><br>

    <label>Jurusan</label><br>
    <input type="text" name="major" maxlength="100" required>
    <br><br>

    <label>Semester</label><br>
    <input type="number" name="semester" min="1" required>
    <br><br>

    <label>IPK</label><br>
    <input type="number" name="gpa" min="0" max="4" step="0.01" required>
    <br><br>

    <button type="submit">Simpan</button>
    <a href="index.php?url=students">Kembali</a>

</form>

</body>
</html>