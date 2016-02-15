<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_model('maquinas.php');
require_model('cliente.php');
/**
 * Description of editar_maquina
 *
 * @author Valentin
 */
class editar_maquina extends fs_controller {
    
    public $cliente;
    public $maquina_cliente;
    public $equipo;
   
       
    public function __construct() {
        parent::__construct(__CLASS__, 'Maquinas cliente', 'Utilidades',FALSE,FALSE,FALSE);
    }

    protected function private_core(){
        
        
          
                    
          if(isset($_GET['id_maquina'])){ ///Cargar los datos
              $this->equipo = new maquinas();
              
              $this->maquina_cliente =  $this->equipo->get($_GET['id_maquina']);
               
             
          }
          if( isset($_POST['numero_serie'])){  ///Editar maquina
              $this->equipo = new maquinas();
               
              
              $this->maquina_cliente =  $this->equipo->get($_POST['id']);
              
            if( $this->maquina_cliente){
          
          if (isset($_POST['contrato'])){
            
              $contratada = "Si";
          }
           else{
              $contratada = "No";
          }
          
          if(isset($_POST['alquilada'])){
              
              $alquiler = "Si";
              
          }
          else {
              
              $alquiler = "No";
          }
          
          $this->maquina_cliente->id_maquina= $_POST['id'];
          $this->maquina_cliente->ubicacion= $_POST['ubicacion'];
          $this->maquina_cliente->codcliente= $_POST['codigocliente'];
          //$this->equipo->nombre_cliente= $_POST['nombrecliente'];
          $this->maquina_cliente->equipo= $_POST['equipo'];
          $this->maquina_cliente->marca= $_POST['marca'];
          $this->maquina_cliente->modelo= $_POST['modelo'];
          $this->maquina_cliente->contrato= $contratada;
          $this->maquina_cliente->alquilada= $alquiler;
          $this->maquina_cliente->numero_serie= $_POST['numero_serie'];
          $this->maquina_cliente->costo_copia_negro= $_POST['costo_copia_negro'];
          $this->maquina_cliente->costo_copia_color= $_POST['costo_copia_color'];
          $this->maquina_cliente->notas= $_POST['notas'];
          $this->maquina_cliente->como_leer_contador=$_POST['como_leer_contador'];
          
        if ($this->maquina_cliente->save())
                {
                    $this->new_message('Datos guardados correctamante');
                    header("location: index.php?page=listado_maquinas_cliente&cod=".$this->maquina_cliente->codcliente);                    
                }
                else
                {
                    $this->new_error_msg('Error al Guardar');
                }
            }
      }
       if(isset($_POST['cliente_id'])){
           $this->cliente = new cliente();
           $this->cliente = $this->cliente->get($_POST['cliente_id']);
           $this->equipo = new maquinas();
              
           $this->maquina_cliente =  $this->equipo->get($_POST['id_maq']);
           
           $this->maquina_cliente->codcliente= $_POST['cliente_id'];
          // echo $this->maquina_cliente->codcliente;
           $this->maquina_cliente->nombre_cliente = $this->cliente->razonsocial;
          // echo $this->maquina_cliente->nombre_cliente;
           if ($this->maquina_cliente->save())
                {
                    $this->new_message('Datos guardados correctamante');
                    header("location: index.php?page=listado_maquinas_cliente&cod=".$this->maquina_cliente->codcliente);                    
                }
                else
                {
                    $this->new_error_msg('Error al Guardar');
                }
       } 
     
    } 
    public function listar_dispositivos(){
         
      $dispositivos = array();

      /**
       * En registro_garantias::estados() nos devuelve un array con todos los estados,
       * pero como queremos también el id, pues hay que hacer este bucle para sacarlos.
       */
      foreach ($this->equipo->dispositivos() as $i => $value)
         $dispositivos[] = array('id_dispositivo' => $i, 'nombre_dispositivo' => $value);

      return $dispositivos;
  }
  public function listar_marca(){
         
      $marca = array();

      /**
       * En registro_garantias::estados() nos devuelve un array con todos los estados,
       * pero como queremos también el id, pues hay que hacer este bucle para sacarlos.
       */
      foreach ($this->equipo->marca() as $i => $value)
         $marca[] = array('id_marca' => $i, 'nombre_marca' => $value);

      return $marca;
  }
   public function lista_clientes(){
          
          $this->cliente = new cliente();
          $lista_clientes =$this->cliente->all_full();
          
          return $lista_clientes;
          
      }
 }   