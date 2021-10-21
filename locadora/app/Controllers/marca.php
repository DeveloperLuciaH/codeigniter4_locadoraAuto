<?php

namespace App\Controllers;
use App\Models;

class Marca extends BaseController
{
    public function index()
    {
        $model = new \App\Models\MarcaModel;
        $marcas = array();
        $marcas['data'] = $model->findAll();

        echo view('marcaView', $marcas);
    }

    public function inserir()
    {
        // Receber a View para direcionar a página onde conterá o formulário de inserção
        echo view('inserirMarcaView');
    }

    public function inserir_no_banco()
    {
        // Recebe os dados do formulário via post, dispara cada getpost para quando chamar
        // o submit do form, receber os campos e fazer a insert/update no banco
        
        if(isset($this->request->getPost()['TB_MARCA_ID']))
        { 
            $id = $this->request->getPost()['TB_MARCA_ID'];
         } else
        {
            $id = FALSE;
        }

        $marca=$this->request->getPost()['TB_MARCA_NOME'];            
        
        //instancia Modelo Model para inserir dados no banco
        $model = new \App\Models\MarcaModel();
        
        $data = ['TB_MARCA_NOME'=>$marca];                    
           
         
        if($id != FALSE) 
        {
            $data['TB_MARCA_ID'] = $id;
        }
        $resultado = $model->save($data);  
    }
    

    public function editar($id)
    {
        $model = new \App\Models\MarcaModel();
        // find só seleciona a linha pelo id
        $marcas = $model->find($id);
        $data['editar'] = $marcas;
		echo view('alterarMarcaView', $data); 
        //var_dump($data);
    }

    public function viewBD()
    {
        $model = new \App\Models\MarcaModel();	
		$marcas = $model->findAll();

        foreach ($marcas as $chave => $linha)
        {
            $marcas[$chave]['editar'] = '<a class="btn btn-success btn-sm mt-4" href="editar/' . $linha['TB_MARCA_ID'] . '"> ALTERAR </a>';
            $marcas[$chave]['excluir'] = '<a class="btn btn-danger btn-sm mt-4" href="excluir/' . $linha['TB_MARCA_ID'] . '"> EXCLUIR </a>';       
        }   

        $data['tabela'] = $marcas;
		echo view('marcaView', $data);     
    }

    public function excluir($id)
    {
        $model = new \App\Models\MarcaModel();
		
		$resultado = $model->delete($id);		
		//var_dump($resultado);             	

    }
}







