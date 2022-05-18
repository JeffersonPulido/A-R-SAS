<?php

class Usuario
{

    public $Conexion;
    public $Id_Usuario;
    public $Nombre_Usuario;
    public $Cedula_Usuario;
    public $Correo_Usuario;
    public $Num_Usuario;
    public $Dire_Usuario;
    public $Eps_Usuario;
    public $Pensiones_Usuario;
    public $Plan_Usuario;
    public $Observacion;
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
            $query = 'SELECT * FROM usuario_nuevo';
            $smt = $this->Conexion->prepare($query);
            $smt->execute();
            return $smt->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    public function cargarPersonxID( $Id_Usuario)
    {
        try {
            $query = "select * from usuario_nuevo where Id_Usuario = ?";
            $smt = $this->Conexion->prepare($query);
            $smt->execute(array($Id_Usuario));
            return $smt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    // insert
    public function insertar(Usuario $data)
    {
        try {
            $query = "insert into usuario_nuevo (Id_Usuario, Nombre_Usuario, Cedula_Usuario, Correo_Usuario, Num_Usuario, Dire_Usuario, Eps_Usuario, Pensiones_Usuario, Plan_Usuario, Observacion) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            $this->Conexion->prepare($query)->execute(array($data->Id_Usuario, $data->Nombre_Usuario, $data->Cedula_Usuario, $data->Correo_Usuario, $data->Num_Usuario, $data->Dire_Usuario, $data->Eps_Usuario, $data->Pensiones_Usuario, $data->Plan_Usuario, $data->Observacion));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    // eliminar

    public function delete( $Id_Usuario)
    {
        try {
            $query = "delete  from usuario_nuevo where Id_Usuario = ?";
            $smt = $this->Conexion->prepare($query);
            $smt->execute(array($Id_Usuario));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function actualizarDatos(Usuario $data)
    {
        try {
            $query = "update usuario_nuevo set Nombre_Usuario=?, Cedula_Usuario=?, Correo_Usuario=?, Num_Usuario=?, Dire_Usuario=?, Eps_Usuario=?, Pensiones_Usuario=?, Plan_Usuario=?,Observacion=? where Id_Usuario=?";
            $this->Conexion->prepare($query)->execute(array($data->Nombre_Usuario, $data->Cedula_Usuario, $data->Correo_Usuario, $data->Num_Usuario, $data->Dire_Usuario, $data->Eps_Usuario, $data->Pensiones_Usuario, $data->Plan_Usuario, $data->Observacion, $data->Id_Usuario));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
}
