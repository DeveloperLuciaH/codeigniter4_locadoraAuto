<?php

namespace App\Controllers;
use App\Models;

class Cliente extends BaseController
{
    public function index()
    {
        $model = new \App\Models\ClienteModel;
        $clientes = array();
        $clientes['data'] = $model->findAll();

        echo view('clienteView', $clientes);
    }

    public function inserir()
    {
        echo view('inserirClienteView');
    }
    
    public function inserir_no_banco()
        
    {
        if(isset($this->request->getPost()['TB_CLIENTE_ID']))
        { 
            $id = $this->request->getPost()['TB_CLIENTE_ID'];
         } else
        {
            $id = FALSE;
        }

        $nomeCli=$this->request->getPost()['TB_CLIENTE_NOME'];
        $telefone=$this->request->getPost()['TB_CLIENTE_TEL'];
        $sexo=$this->request->getPost()['TB_CLIENTE_SEXO'];
        $email=$this->request->getPost()['TB_CLIENTE_EMAIL'];
        $senha=$this->request->getPost()['TB_CLIENTE_SENHA'];
        $endereco=$this->request->getPost()['TB_CLIENTE_ENDERECO'];
        $complemento=$this->request->getPost()['TB_CLIENTE_COMPLEMENTO'];
        $bairro=$this->request->getPost()['TB_CLIENTE_BAIRRO'];
        $cidade=$this->request->getPost()['TB_CLIENTE_CIDADE']; 
        $uf=$this->request->getPost()[ 'TB_CLIENTE_UF']; 
        $dataNasc=$this->request->getPost()['TB_CLIENTE_DT_NASC']; 
        $dataCad=$this->request->getPost()['TB_CLIENTE_DT_CAD'];   
       
        // instancia ClienteModel para inserir dados no banco
        $model = new \App\Models\ClienteModel();
        
        $data = [
                'TB_CLIENTE_NOME'=>$nomeCli,
                'TB_CLIENTE_TEL'=>$telefone,
                'TB_CLIENTE_SEXO'=>$sexo,
                'TB_CLIENTE_EMAIL'=>$email,
                'TB_CLIENTE_SENHA'=>$senha,
                'TB_CLIENTE_ENDERECO'=>$endereco,
                'TB_CLIENTE_COMPLEMENTO'=>$complemento,
                'TB_CLIENTE_BAIRRO'=>$bairro,
                'TB_CLIENTE_CIDADE'=>$cidade,
                'TB_CLIENTE_UF'=>$uf,
                'TB_CLIENTE_DT_NASC'=>$dataNasc,
                'TB_CLIENTE_DT_CAD'=>$dataCad,
        ];      

        if($id != FALSE) 
        {
            $data['TB_CLIENTE_ID'] = $id;
        }
        $resultado = $model->save($data);
        //var_dump($resultado); 
        
        
    }

    public function editar($id)
    {
        $model = new \App\Models\ClienteModel();
        // find só seleciona a linha pelo id
        $clientes = $model->find($id);
        $data['editar'] = $clientes;
		echo view('alterarClienteView', $data); 
        //var_dump($data);
    }

    public function viewBD()
    {
        $model = new \App\Models\ClienteModel();	
		$clientes = $model->findAll();

        foreach ($clientes as $chave => $linha)
        {
            $clientes[$chave]['editar'] = '<a href="editar/' . $linha['TB_CLIENTE_ID'] . '"> ALTERAR </a>';
            $clientes[$chave]['excluir'] = '<a href="excluir/' . $linha['TB_CLIENTE_ID'] . '"> EXCLUIR </a>';       
        }   

        $data['tabela'] = $clientes;
		echo view('clienteView', $data);     
    }

    public function excluir($id)
    {
        $model = new \App\Models\ClienteModel();
		
		$resultado = $model->delete($id);		
		//var_dump($resultado);        	

    }
}

