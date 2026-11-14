<?php

class Student extends Model
{
    public function all(): array
    {
        return $this->db->query(
            "SELECT * FROM students ORDER BY id DESC"
        )->fetchAll();
    }

    public function find(int $id)
    {
        $stmt = $this->db->prepare(
            "SELECT * FROM students WHERE id = :id"
        );

        $stmt->execute(['id' => $id]);

        return $stmt->fetch();
    }

    public function create(array $data): bool
    {
        $stmt = $this->db->prepare(
            "INSERT INTO students (nim, name, major, semester, gpa)
             VALUES (:nim, :name, :major, :semester, :gpa)"
        );

        return $stmt->execute($data);
    }

    public function update(int $id, array $data): bool
    {
        $data['id'] = $id;

        $stmt = $this->db->prepare(
            "UPDATE students
             SET nim = :nim,
                 name = :name,
                 major = :major,
                 semester = :semester,
                 gpa = :gpa
             WHERE id = :id"
        );

        return $stmt->execute($data);
    }

    public function delete(int $id): bool
    {
        $stmt = $this->db->prepare(
            "DELETE FROM students WHERE id = :id"
        );

        return $stmt->execute(['id' => $id]);
    }
}