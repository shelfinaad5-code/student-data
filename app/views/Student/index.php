<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Mahasiswa</title>
</head>
<body>

<h1>Data Mahasiswa</h1>

<a href="index.php?url=students/create">+ Tambah Mahasiswa</a>

<br><br>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Semester</th>
        <th>IPK</th>
        <th>Aksi</th>
    </tr>

    <?php foreach ($students as $index => $student): ?>
    <tr>
        <td><?= $index + 1 ?></td>
        <td><?= htmlspecialchars($student['nim']) ?></td>
        <td><?= htmlspecialchars($student['name']) ?></td>
        <td><?= htmlspecialchars($student['major']) ?></td>
        <td><?= htmlspecialchars($student['semester']) ?></td>
        <td><?= htmlspecialchars($student['gpa']) ?></td>
        <td>
            <a href="index.php?url=students/edit&id=<?= $student['id'] ?>">Edit</a>

            <form action="index.php?url=students/delete" method="POST" style="display:inline">
                <input type="hidden" name="id" value="<?= $student['id'] ?>">
                <button type="submit" onclick="return confirm('Hapus data ini?')">Hapus</button>
            </form>
        </td>
    </tr>
    <?php endforeach; ?>

</table>

</body>
</html>