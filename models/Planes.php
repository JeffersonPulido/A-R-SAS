<?php

class Planes
{

    public $Conexion;
    public $Id_Plan;
    public $Nombre_Plan;
    public $Descripcion_Plan;
    public $Riesgo_Plan;
    public $Valor;
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
            $query = 'SELECT * FROM planes';
            $smt = $this->Conexion->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function cargarPersonxID( $Id_Plan)
    {
        try {
            $query = "select * from planes where Id_Plan = ?";
            $smt = $this->Conexion->prepare($query);
            $smt->execute(array($Id_Plan));
            return $smt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    // insert
    public function insertar(Planes $data)
    {
        try {
            $query = "insert into planes (Id_Plan, Nombre_Plan, Descripcion_Plan, Riesgo_Plan, Valor) values(?, ?, ?, ?, ?)";
            $this->Conexion->prepare($query)->execute(array($data->Id_Plan, $data->Nombre_Plan, $data->Descripcion_Plan, $data->Riesgo_Plan, $data->Valor));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    // eliminar

    public function delete( $Id_Plan)
    {
        try {
            $query = "delete  from planes where Id_Plan = ?";
            $smt = $this->Conexion->prepare($query);
            $smt->execute(array($Id_Plan));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function actualizarDatos(Planes $data)
    {
        try {
            $query = "update planes set Nombre_Plan=?, Descripcion_Plan=?, Riesgo_Plan=?, Valor=? where Id_Plan=?";
            $this->Conexion->prepare($query)->execute(array($data->Nombre_Plan, $data->Descripcion_Plan, $data->Riesgo_Plan, $data->Valor, $data->Id_Plan));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
}
