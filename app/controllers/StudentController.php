<?php

class StudentController extends Controller
{
    private Student $student;

    public function __construct()
    {
        $this->student = new Student();
    }

    public function index(): void
    {
        $students = $this->student->all();
        $this->view('Student/index', ['students' => $students]);
    }

    public function create(): void
    {
        $this->view('Student/create');
    }

    public function store(): void
    {
        $this->student->create([
            'nim' => $_POST['nim'],
            'name' => $_POST['name'],
            'major' => $_POST['major'],
            'semester' => $_POST['semester'],
            'gpa' => $_POST['gpa']
        ]);

        header('Location: index.php?url=students');
        exit;
    }

    public function edit(): void
    {
        $id = (int) ($_GET['id'] ?? 0);
        $student = $this->student->find($id);

        if (!$student) {
            die('Data mahasiswa tidak ditemukan.');
        }

        $this->view('Student/edit', ['student' => $student]);
    }

    public function update(): void
    {
        $id = (int) ($_POST['id'] ?? 0);

        $this->student->update($id, [
            'nim' => $_POST['nim'],
            'name' => $_POST['name'],
            'major' => $_POST['major'],
            'semester' => $_POST['semester'],
            'gpa' => $_POST['gpa']
        ]);

        header('Location: index.php?url=students');
        exit;
    }

    public function destroy(): void
    {
        $id = (int) ($_POST['id'] ?? 0);
        $this->student->delete($id);

        header('Location: index.php?url=students');
        exit;
    }
}