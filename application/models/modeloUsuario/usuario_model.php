<?php
//EN ESTA AREA DE MODEL SE HACEN LAS CONSULTAS

    class Usuario_model extends CI_Model{
        public function validar($login, $password)
        {
            $this->db->select('*');//editar posiblemente solo se necesito el usuario y contraseña
            $this->db->from('usuarios');//
            $this->db->where('nombreUsuario',$login);//
            $this->db->where('contrasenia',$password);//
            return $this->db->get();

        }

        
        public function listaUsuario()
        {
            /*CONSULTA PARA SACAR LA LISTA DE LA CATEGORIA */
            $this->db->select('*');//seleccionar todo 
            $this->db->from('usuarios');//de la tabla categoria
            $this->db->where('estado','1');//donde el estado sea igual a 1
            return $this->db->get();
        }

        //CONSULTA PARA INSERTAR EN LA BDD TABLA USUARIOS
        public function agregarUsuario($data)
        {
            $this->db->insert('usuarios',$data);//categoria es la tabla de BDD
        }

        //modficar
        public function recuperarusuario($idusuario)
        {
            $this->db->select('*');
            $this->db->from('usuarios');
            $this->db->where('idUsuario',$idusuario);
            return $this->db->get();
        }
        
        //CONSULTA DE MODIFICAR
        public function modificarusuario($idusuario,$data)
        {
            $this->db->where('idUsuario',$idusuario);
            $this->db->update('usuarios',$data);
        }

    }
