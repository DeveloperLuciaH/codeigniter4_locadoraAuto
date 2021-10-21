<?php

namespace App\Controllers;
use App\Models;

class Cargo extends BaseController
{
    public function index()
    {
        $model = new \App\Models\CargoModel;
        $cargos = array();
        $cargos['data'] = $model->findAll();

        echo view('cargoView', $cargos);
    }    

    public function inserir()   
    {        
        echo view('inserirCargoView');
    }
    
    public function inserir_no_banco()
    {

        if(isset($this->request->getPost()['TB_CARGO_ID']))
        { 
            $id = $this->request->getPost()['TB_CARGO_ID'];
         } else
        {
            $id = FALSE;
        }

        $nomeCargo=$this->request->getPost()['TB_CARGO_NOME'];
                
        // instancia CargoModel para inserir dados no banco
        $model = new \App\Models\CargoModel();
        
        $data = ['TB_CARGO_NOME'=>$nomeCargo];          

        if($id != FALSE) 
        {
            $data['TB_CARGO_ID'] = $id;
        }
        $resultado = $model->save($data);
        //var_dump($resultado);        
        
    }

    public function editar($id)
    {
        $model = new \App\Models\CargoModel();
        // find só seleciona a linha pelo id
        $cargos = $model->find($id);
        $data['editar'] = $cargos;
		echo view('alterarCargoView', $data); 
        //var_dump($data);
    }

    public function viewBD()
    {
        $model = new \App\Models\CargoModel();	
		$cargos = $model->findAll();

        foreach ($cargos as $chave => $linha)
        {
            $cargos[$chave]['editar'] = '<a class="btn btn-success btn-sm mt-4" href="editar/' . $linha['TB_CARGO_ID'] . '"> ALTERAR </a>';
            $cargos[$chave]['excluir'] = '<a class="btn btn-danger btn-sm mt-4" href="excluir/' . $linha['TB_CARGO_ID'] . '"> EXCLUIR </a>';       
        }   

        $data['tabela'] = $cargos;
		echo view('cargoView', $data);     
    }

    public function excluir($id)
    {
        $model = new \App\Models\CargoModel();
		
		$resultado = $model->delete($id);		
		//var_dump($resultado);     
         	

    }
}





