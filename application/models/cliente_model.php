<?php 

    class Cliente_model extends CI_Model
    {          
        public function listaclienteslte()
        {
            $this->db->select('*');
            $this->db->from('clientes');
            $this->db->where('habilitado','1');
            return $this->db->get();
        }
        public function listausuarioslte()
        {
            $this->db->select('*');
            $this->db->from('usuarios');
            $this->db->where('activo','1');
            return $this->db->get();
        }

        public function recuperarclienteslte($idcliente) // idclientes es de la base dedatos 
        {
            $this->db->select('*');
            $this->db->from('clientes');
            $this->db->where('idcliente',$idcliente);// idclientes es de la base dedatos y
            return $this->db->get();
        }
        public function recuperarusuarioslte($idusuario) // idclientes es de la base dedatos 
        {
            $this->db->select('*');
            $this->db->from('usuarios');
            $this->db->where('idUsuario',$idusuario);// idclientes es de la base dedatos y
            return $this->db->get();
        }
        
        public function modificarusuarioslte($idusuario,$data)
        {
            $this->db->where('idUsuario',$idusuario);
            $this->db->update('usuarios',$data); //UPDADEDELATABLA CLIENTES DE BASEDEDATOS 
        }
        public function modificarclienteslte($idcliente,$data)
        {
            $this->db->where('idcliente',$idcliente);
            $this->db->update('clientes',$data); //UPDADEDELATABLA CLIENTES DE BASEDEDATOS 
        }
       
        //// agregarr
        public function agregarclienteslte($data)
        {
            //insercion mvc
            $this->db->insert('clientes',$data);

        }
         //// agregarr
         public function agregarusulte($data)
         {
             //insercion mvc
             $this->db->insert('usuarios',$data);
 
         }
        
          //// eliminar 
          public function eliminarclienteslte($idcliente)
        {
            //borrado mvc hard delete
            $this->db->where('idcliente',$idcliente);
            $this->db->delete('clientes');
        }
        public function eliminarusuarioslte($idusuario)
        {
            //borrado mvc hard delete
            $this->db->where('idUsuario',$idusuario);
            $this->db->delete('usuarios');
        }
        
          
        
        ///////// listaclientesdeslte listaclientesdeslte
        public function listaclientesdeslte()
        {
            $this->db->select('*');
            $this->db->from('clientes');
            $this->db->where('habilitado','0');
            return $this->db->get();
        }
        public function modificarclientelte($idcliente,$data)
        {
            $this->db->where('idcliente',$idcliente);
            $this->db->update('clientes',$data);
        } 
       ////fott  
        public function modificarcliente($idcliente,$data)
        {
            $this->db->where('idcliente',$idcliente);
            $this->db->update('clientes',$data);
        }
        public function listaestudianteslte()
        {
            $this->db->select('*');
            $this->db->from('clientes');
            $this->db->where('habilitado','1');
            return $this->db->get();
        }
        public function listaestudiantesltec()
        {
            $this->db->select('*');
            $this->db->from('clientes');
            $this->db->where('habilitado','1');
            return $this->db->get();
        }


    }