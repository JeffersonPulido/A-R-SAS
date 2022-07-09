<?php

class UsuarioInt
{

    public $Conexion;
    public $Id_Usuario;
    public $Nombre_Usuario;
    public $Cedula_Usuario;
    public $Correo_Usuario;
    public $Num_Usuario;
    public $Observacion;
    public $Fecha;
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
            $query = 'SELECT * FROM usuario_interesado';
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
            $query = "select * from usuario_interesado where Id_Usuario = ?";
            $smt = $this->Conexion->prepare($query);
            $smt->execute(array($Id_Usuario));
            return $smt->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    // insert
    public function insertar(UsuarioInt $data)
    {
        try {
            $query = "insert into usuario_interesado (Id_Usuario, Nombre_Usuario, Cedula_Usuario, Correo_Usuario, Num_Usuario, Observacion, Fecha) values(?, ?, ?, ?, ?, ?, ?)";
            $this->Conexion->prepare($query)->execute(array($data->Id_Usuario, $data->Nombre_Usuario, $data->Cedula_Usuario, $data->Correo_Usuario, $data->Num_Usuario, $data->Observacion, $data->Fecha));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    // eliminar

    public function delete( $Id_Usuario)
    {
        try {
            $query = "delete  from usuario_interesado where Id_Usuario = ?";
            $smt = $this->Conexion->prepare($query);
            $smt->execute(array($Id_Usuario));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function actualizarDatos(UsuarioInt $data)
    {
        try {
            $query = "update usuario_interesado set Nombre_Usuario=?, Cedula_Usuario=?, Correo_Usuario=?, Num_Usuario=?, Observacion=?, Fecha=? where Id_Usuario=?";
            $this->Conexion->prepare($query)->execute(array($data->Nombre_Usuario, $data->Cedula_Usuario, $data->Correo_Usuario, $data->Num_Usuario, $data->Observacion, $data->Fecha, $data->Id_Usuario));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
    
}
