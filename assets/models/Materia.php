<?php

class Materia
{

    public $Conexion;
    public $Id;
    public $Nombre;
    public $Duracion;
    public $Profesor;
    public function __construct()
    {
        try {
            $this->Conexion = Conexion::conectar();
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
    }
    // select
    public function listar()
    {
        try {
            $query = 'SELECT * FROM cursos';
            $smt = $this->Conexion->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function cargarPersonxID( $Id)
    {
        try {
            $query = "select * from cursos where Id = ?";
            $smt = $this->Conexion->prepare($query);
            $smt->execute(array($Id));
            return $smt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    // insert
    public function insertar(Materia $data)
    {
        try {
            $query = "insert into cursos (Id, Nombre, Duracion, Profesor) values(?, ?, ?, ?)";
            $this->Conexion->prepare($query)->execute(array($data->Id, $data->Nombre, $data->Duracion, $data->Profesor));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    // eliminar

    public function delete( $Id)
    {
        try {
            $query = "delete  from cursos where Id = ?";
            $smt = $this->Conexion->prepare($query);
            $smt->execute(array($Id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function actualizarDatos(Materia $data)
    {
        try {
            $query = "update cursos set Nombre=?, Duracion=?, Profesor=? where Id=?";
            $this->Conexion->prepare($query)->execute(array($data->Nombre, $data->Duracion, $data->Profesor, $data->Id));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
}
