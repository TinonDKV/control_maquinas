<?php
/*
* Dependencies generated by the foreign keys
*/




//Notice:  Undefined variable: primary in C:\xampp\htdocs\facturascripts\facturascripts_2015\tmp\export_from_db.e37c72e49496c6a1e4aae5ab7ed8c913.rtpl.php on line 103

/* Primary key found: id_maquina*/
class maquinas extends fs_model
{
    var $id_maquina;
    var $codcliente;
    var $nombre_cliente;
    var $ubicacion;
    var $numero_maquina;
    var $contrato;
    var $alquilada;
    var $equipo;
    var $marca;
    var $modelo;
    var $numero_serie;
    var $costo_copia_negro;
    var $costo_copia_color;
    var $costo_copia_especial;
    var $como_leer_contador;
    var $email;
    var $notas;


    public function __construct($data=FALSE)
    {
        $pluginname = str_replace(realpath(".") . "/", "",  realpath(__DIR__ . "/..") ) . "/";
        parent::__construct('maquinas', $pluginname);
        
        if($data)
        {

            $this->id_maquina = $this->intval($data['id_maquina']);
            $this->codcliente = $data['codcliente'];
            $this->nombre_cliente = $data['nombre_cliente'];
            $this->ubicacion = $data['ubicacion'];
            $this->numero_maquina = $data['numero_maquina'];
            $this->contrato = $data['contrato'];
            $this->alquilada = $data['alquilada'];
            $this->equipo = $data['equipo'];
            $this->marca = $data['marca'];
            $this->modelo = $data['modelo'];
            $this->numero_serie = $data['numero_serie'];
            $this->costo_copia_negro = $data['costo_copia_negro'];
            $this->costo_copia_color = $data['costo_copia_color'];
            $this->costo_copia_especial = $data['costo_copia_especial'];
            $this->como_leer_contador = $data['como_leer_contador'];
            $this->email = $data['email'];
            $this->notas = $data['notas'];

        }
    }

    /**
     * Esta función es llamada al crear una tabla.
     * Permite insertar valores en la tabla.
     */
    protected function install()
    {
        return '';
    }

    /**
     * Esta función devuelve TRUE si los datos del objeto se encuentran
     * en la base de datos.
     */
    public function exists()
    {
        
        if($this->id_maquina)
        {
            $value = $this->var2str($this->id_maquina);
            return $this->db->select("SELECT * FROM {$this->table_name} WHERE id_maquina = $value");
        }
        
        return false;
    }

    /**
     * Esta función sirve tanto para insertar como para actualizar
     * los datos del objeto en la base de datos.
     */
    public function save()
    {
        $sql = "";
        if($this->exists())
        {
            $value = $this->var2str($this->id_maquina);
            if($this->id_maquina)
            {
                $sql = "UPDATE {$this->table_name} SET id_maquina = " . $this->var2str($this->id_maquina) . "
                        , codcliente = " . $this->var2str($this->codcliente) . "
                        , nombre_cliente = " . $this->var2str($this->nombre_cliente) . "
                        , ubicacion = " . $this->var2str($this->ubicacion) . "
                        , numero_maquina = " . $this->var2str($this->numero_maquina) . "
                        , contrato = " . $this->var2str($this->contrato) . "
                        , alquilada = " . $this->var2str($this->alquilada) . "
                        , equipo = " . $this->var2str($this->equipo) . "
                        , marca = " . $this->var2str($this->marca) . "
                        , modelo = " . $this->var2str($this->modelo) . "
                        , numero_serie = " . $this->var2str($this->numero_serie) . "
                        , costo_copia_negro = " . $this->var2str($this->costo_copia_negro) . "
                        , costo_copia_color = " . $this->var2str($this->costo_copia_color) . "
                        , costo_copia_especial = " . $this->var2str($this->costo_copia_especial) . "
                        , como_leer_contador = " . $this->var2str($this->como_leer_contador) . "
                        , email = " . $this->var2str($this->email) . "
                        , notas = " . $this->var2str($this->notas) . "
                          WHERE id_maquina = $value";
                return $this->db->exec($sql);
            }
            
        }
        else
        {
            $sql = "INSERT INTO {$this->table_name} (
                                    id_maquina
                                    , codcliente
                                    , nombre_cliente
                                    , ubicacion
                                    , numero_maquina
                                    , contrato
                                    , alquilada
                                    , equipo
                                    , marca
                                    , modelo
                                    , numero_serie
                                    , costo_copia_negro
                                    , costo_copia_color
                                    , costo_copia_especial
                                    , como_leer_contador
                                    , email
                                    , notas
                                    
                                ) VALUES (
                                     " . $this->var2str($this->id_maquina) . "
                                    ,  " . $this->var2str($this->codcliente) . "
                                    ,  " . $this->var2str($this->nombre_cliente) . "
                                    ,  " . $this->var2str($this->ubicacion) . "
                                    ,  " . $this->var2str($this->numero_maquina) . "
                                    ,  " . $this->var2str($this->contrato) . "
                                    ,  " . $this->var2str($this->alquilada) . "
                                    ,  " . $this->var2str($this->equipo) . "
                                    ,  " . $this->var2str($this->marca) . "
                                    ,  " . $this->var2str($this->modelo) . "
                                    ,  " . $this->var2str($this->numero_serie) . "
                                    ,  " . $this->var2str($this->costo_copia_negro) . "
                                    ,  " . $this->var2str($this->costo_copia_color) . "
                                    ,  " . $this->var2str($this->costo_copia_especial) . "
                                    ,  " . $this->var2str($this->como_leer_contador) . "
                                    ,  " . $this->var2str($this->email) . "
                                    ,  " . $this->var2str($this->notas) . "
                                    
                                )";
            return $this->db->exec($sql);
        }

        return false;
    }

    /**
     * Esta función sirve para eliminar los datos del objeto de la base de datos
     */
    public function delete()
    {
        
        $value = $this->var2str($this->id_maquina);
        if($this->id_maquina)
        {
            $sql = "DELETE FROM {$this->table_name} WHERE id_maquina = $value)";
            return $this->db->exec($sql);
        }
        
    }
    
    public function get($cod)
    {
        $cod = $this->var2str($cod);
       // return $this->parse($this->db->select("SELECT * FROM {$this->table_name} WHERE id_maquina = $cod"));
         $cli = $this->db->select("SELECT * FROM ".$this->table_name." WHERE id_maquina = $cod".";");
         
      if($cli)
      {
         if ($cli[0]['contrato']=="Si" || $cli[0]['contrato']=="si" || $cli[0]['contrato']=="SI"){
             
             $cli[0]['contrato']= TRUE;
         } 
         else{
          $cli[0]['contrato']= FALSE;   
         }
         if ($cli[0]['alquilada']=="Si" || $cli[0]['alquilada']=="si" || $cli[0]['alquilada']=="SI"){
             
             $cli[0]['alquilada']= TRUE;
         } 
         else{
          $cli[0]['alquilada']= FALSE;   
         }
          
         return new maquinas($cli[0]);
      }
      else
      {
         return FALSE;
    
      }
      }
    
     public function get_maquina_cliente($cod)
    {
        $cod = $this->var2str($cod);
        return $this->parse($this->db->select("SELECT * FROM {$this->table_name} WHERE codcliente = $cod"));
    }
    
    public function get_all_offset($offet=0, $limit=FS_ITEM_LIMIT)
    {
        return $this->parse($this->db->select_limit("SELECT * FROM {$this->table_name} ORDER BY id_maquina DESC", $limit, $offset), true);
    }
    public function get_all()
    {
        return $this->parse($this->db->select("SELECT * FROM {$this->table_name} ORDER BY id_maquina DESC"), true);
    }
    public function parse($items, $array = true)
    {
        if(count($items) > 1 || $array)
        {
            $list = array();
            foreach($items as $item)
            {
                $list[] = new maquinas($item);
            }
            return $list;
        }
        else if(count($items) == 1)
        {
            return new maquinas($items[0]);
        }
        return null;
    }
    public function dispositivos()
   {
      $dispositivos = array(
          1 => 'Multifuncion',
          2 => 'Fotocopiadora',
          3 => 'Impresora',
          4 => 'Ordenador',
          5 => 'Fax',
          6 => 'Escaner',
          7 => 'Otros'
      );
      return $dispositivos;
   }
    public function marca()
   {
      $marca = array(
          1 => 'Develop',
          2 => 'Samsung',
          3 => 'Brother',
          4 => 'Otros'
      );
      return $marca;
   }

}
