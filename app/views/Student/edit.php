<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Mahasiswa</title>
</head>
<body>

<h1>Edit Data Mahasiswa</h1>

<form action="index.php?url=students/update" method="POST">

    <input type="hidden" name="id" value="<?= $student['id'] ?>">

    <label>NIM</label><br>
    <input type="text" name="nim" maxlength="15"
        value="<?= htmlspecialchars($student['nim']) ?>" required>
    <br><br>

    <label>Nama Mahasiswa</label><br>
    <input type="text" name="name" maxlength="100"
        value="<?= htmlspecialchars($student['name']) ?>" required>
    <br><br>

    <label>Jurusan</label><br>
    <input type="text" name="major" maxlength="100"
        value="<?= htmlspecialchars($student['major']) ?>" required>
    <br><br>

    <label>Semester</label><br>
    <input type="number" name="semester" min="1"
        value="<?= htmlspecialchars((string) $student['semester']) ?>" required>
    <br><br>

    <label>IPK</label><br>
    <input type="number" name="gpa" min="0" max="4" step="0.01"
        value="<?= htmlspecialchars((string) $student['gpa']) ?>" required>
    <br><br>

    <button type="submit">Update</button>
    <a href="index.php?url=students">Kembali</a>

</form>

</body>
</html>