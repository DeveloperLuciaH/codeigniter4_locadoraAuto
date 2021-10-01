<?php

namespace App\Controllers;
use App\Models;

class Modelo extends BaseController
{ 
    public function index()
    {
        $model = new \App\Models\ModeloModel;
        $modelos = array();
        $modelos['data'] = $model->findAll();

        echo view('modeloView', $modelos);
    }

    public function inserir()
    {
        // Receber a View para direcionar a página onde conterá o formulário de inserção
        echo view('inserirModeloView');
    }

    public function inserir_no_banco()
    {
        // Recebe os dados do formulário via post, dispara cada getpost para quando chamar
        // o submit do form, receber os campos e fazer a insert/update no banco
        
        if(isset($this->request->getPost()['TB_MODELO_ID']))
        { 
            $id = $this->request->getPost()['TB_MODELO_ID'];
         } else
        {
            $id = FALSE;
        }
        $nomeModelo=$this->request->getPost()['TB_MODELO_DESC'];
        $obs=$this->request->getPost()['TB_MODELO_OBS'];
        $modeloData=$this->request->getPost()['TB_MODELO_DATA'];     
        
        //instancia Modelo Model para inserir dados no banco
        $model = new \App\Models\ModeloModel();
        
         $data = [
             'TB_MODELO_DESC'=>$nomeModelo,
             'TB_MODELO_OBS'=>$obs,
             'TB_MODELO_DATA'=>$modeloData,            
         ];  
        

        if($id != FALSE) 
        {
            $data['TB_MODELO_ID'] = $id;
        }
        $resultado = $model->save($data);  
    }
    

    public function editar($id)
    {
        $model = new \App\Models\ModeloModel();
        // find só seleciona a linha pelo id
        $modelos = $model->find($id);
        $data['editar'] = $modelos;
		echo view('alterarModeloView', $data); 
        //var_dump($data);
    }

    public function viewBD()
    {
        $model = new \App\Models\ModeloModel();	
		$modelos = $model->findAll();

        foreach ($modelos as $chave => $linha)
        {
            $modelos[$chave]['editar'] = '<a href="editar/' . $linha['TB_MODELO_ID'] . '"> ALTERAR </a>';
            $modelos[$chave]['excluir'] = '<a href="excluir/' . $linha['TB_MODELO_ID'] . '"> EXCLUIR </a>';       
        }   

        $data['tabela'] = $modelos;
		echo view('modeloView', $data);     
    }

    public function excluir($id)
    {
        $model = new \App\Models\ModeloModel();
		
		$resultado = $model->delete($id);		
		//var_dump($resultado);              	
    }
}