<?php

class Categoria {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    // Obtener todas las categorías
    public function getAll() {
        $stmt = $this->pdo->prepare("SELECT * FROM CATEGORIA");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener una categoría por ID
    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM CATEGORIA WHERE idcategoria = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // Crear una nueva categoría
    public function create($nombre) {
        $stmt = $this->pdo->prepare("INSERT INTO CATEGORIA (nombre) VALUES (?)");
        return $stmt->execute([$nombre]);
    }

    // Actualizar una categoría
    public function update($id, $nombre) {
        $stmt = $this->pdo->prepare("UPDATE CATEGORIA SET nombre = ? WHERE idcategoria = ?");
        return $stmt->execute([$nombre, $id]);
    }

    // Eliminar una categoría
    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM CATEGORIA WHERE idcategoria = ?");
        return $stmt->execute([$id]);
    }
}
?>
