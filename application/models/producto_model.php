<?php 

    class Producto_model extends CI_Model
    {          
        public function listaclienteslte()
        {
            $this->db->select('*');
            $this->db->from('productos');
            $this->db->where('estado','1');
            return $this->db->get();
        }
       

        public function recuperarclienteslte($idproducto) // idclientes es de la base dedatos 
        {
            $this->db->select('*');
            $this->db->from('productos');
            $this->db->where('idproducto',$idproducto);// idclientes es de la base dedatos y
            return $this->db->get();
        }
       
        
       
        public function modificarclienteslte($idproducto,$data)
        {
            $this->db->where('idproducto',$idproducto);
            $this->db->update('productos',$data); //UPDADEDELATABLA CLIENTES DE BASEDEDATOS 
        }
       
        //// agregarr
        public function agregarclienteslte($data)
        {
            //insercion mvc
            $this->db->insert('productos',$data);

        }
         
        
          //// eliminar 
          public function eliminarclienteslte($idproducto)
        {
            //borrado mvc hard delete
            $this->db->where('idproducto',$idproducto);
            $this->db->delete('productos');
        }
     
          
        
        ///////// listaclientesdeslte listaclientesdeslte
        public function listaclientesdeslte()
        {
            $this->db->select('*');
            $this->db->from('productos');
            $this->db->where('estado','0');
            return $this->db->get();
        }
        public function modificarclientelte($idproducto,$data)
        {
            $this->db->where('idproducto',$idproducto);
            $this->db->update('productos',$data);
        } 
       ////fott  
        public function modificarcliente($idproducto,$data)
        {
            $this->db->where('idproducto',$idproducto);
            $this->db->update('productos',$data);
        }
      
        

    }