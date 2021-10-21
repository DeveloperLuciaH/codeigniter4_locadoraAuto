<?php

namespace App\Controllers;
use App\Models;

class Funcionario extends BaseController
{
    public function index()
    {
        $model = new \App\Models\FuncionarioModel;
        $funcionarios = array();
        $funcionarios['data'] = $model->findAll();

        echo view('funcionarioView', $funcionarios);
    }

    public function inserir()
    {
        echo view('inserirFuncionarioView');

    }
    
    public function inserir_no_banco()
    {
        
        if(isset($this->request->getPost()['TB_FUNCIONARIO_ID']))
        { 
            $id = $this->request->getPost()['TB_FUNCIONARIO_ID'];
         } else
        {
            $id = FALSE;
        }

        $nomeFunc=$this->request->getPost()['TB_FUNCIONARIO_NOME'];
        $telefone=$this->request->getPost()['TB_FUNCIONARIO_TEL'];
        $dataContrato=$this->request->getPost()['TB_FUNCIONARIO_DT_CONTRATO'];
        $cargo=$this->request->getPost()['TB_CARGO_ID'];     
        
        // instancia Funcionario Model para inserir dados no banco
        $model = new \App\Models\FuncionarioModel();
        
        $data = [
            'TB_FUNCIONARIO_NOME'=>$nomeFunc,
            'TB_FUNCIONARIO_TEL'=>$telefone,
            'TB_FUNCIONARIO_DT_CONTRATO'=>$dataContrato,
            'TB_CARGO_ID'=>$cargo
        ];  

        if($id != FALSE) 
        {
            $data['TB_FUNCIONARIO_ID'] = $id;
        }
        $resultado = $model->save($data);
        //var_dump($resultado); 
        
        
    }

    public function editar($id)
    {
        $model = new \App\Models\FuncionarioModel();
        // find só seleciona a linha pelo id
        $funcionarios = $model->find($id);
        $data['editar'] = $funcionarios;
		echo view('alterarFuncionarioView', $data); 
        //var_dump($data);
    }

    public function viewBD()
    {
        $model = new \App\Models\FuncionarioModel();	
		$funcionarios = $model->findAll();

        foreach ($funcionarios as $chave => $linha)
        {
            $funcionarios[$chave]['editar'] = '<a class="btn btn-success btn-sm mt-4" href="editar/' . $linha['TB_FUNCIONARIO_ID'] . '"> ALTERAR </a>';
            $funcionarios[$chave]['excluir'] = '<a class="btn btn-danger btn-sm mt-4" href="excluir/' . $linha['TB_FUNCIONARIO_ID'] . '"> EXCLUIR </a>';       
        }   

        $data['tabela'] = $funcionarios;
		echo view('funcionarioView', $data);     
    }

    public function excluir($id)
    {
        $model = new \App\Models\FuncionarioModel();
		
		$resultado = $model->delete($id);		
		//var_dump($resultado);  
             	

    }
}

