<?php

namespace App\Controllers;
use App\Models;

class Automovel extends BaseController
{
    public function index()
    {
        $model = new \App\Models\AutomovelModel;
        $automoveis = array();
        $automoveis['data'] = $model->findAll();

        echo view('automovelView', $automoveis);
    }

    public function inserir()
    {
        echo view('inserirAutoView');
    }
    
    public function inserir_no_banco()
    {        
        if(isset($this->request->getPost()['TB_AUTOMOVEL_ID']))
        { 
            $id = $this->request->getPost()['TB_AUTOMOVEL_ID'];
         } else
        {
            $id = FALSE;
        }
        $nome=$this->request->getPost()['TB_AUTOMOVEL_NOME'];
        $anoFab=$this->request->getPost()['TB_AUTOMOVEL_ANO_FAB'];
        $cor=$this->request->getPost()['TB_AUTOMOVEL_COR'];
        $km=$this->request->getPost()['TB_AUTOMOVEL_KM'];
        $valor=$this->request->getPost()['TB_AUTOMOVEL_VALOR_D'];
        $status=$this->request->getPost()['TB_AUTOMOVEL_STATUS'];
        $marca=$this->request->getPost()['TB_MARCA_ID'];
        $modelo=$this->request->getPost()['TB_MODELO_ID'];        
                
        // instancia AutomovelModel para inserir dados no banco
        $model = new \App\Models\AutomovelModel();
        
        $data = [
            'TB_AUTOMOVEL_NOME'=>$nome,
            'TB_AUTOMOVEL_ANO_FAB'=>$anoFab,
            'TB_AUTOMOVEL_COR'=>$cor,
            'TB_AUTOMOVEL_KM'=>$km,
            'TB_AUTOMOVEL_VALOR_D'=>$valor,
            'TB_AUTOMOVEL_STATUS'=>$status,
            'TB_MARCA_ID'=>$marca,
            'TB_MODELO_ID'=>$modelo,                    
        ];

        if($id != FALSE) 
        {
            $data['TB_AUTOMOVEL_ID'] = $id;
        }
        $resultado = $model->save($data);
        //var_dump($resultado); 
        
        
    }

    public function editar($id)
    {
        $model = new \App\Models\AutomovelModel();
        // find só seleciona a linha pelo id
        $automoveis = $model->find($id);
        $data['editar'] = $automoveis;
		echo view('alterarAutoView', $data); 
        //var_dump($data);
    }

    public function viewBD()
    {
        $model = new \App\Models\AutomovelModel();	
		$automoveis = $model->findAll();

        foreach ($automoveis as $chave => $linha)
        {
            $automoveis[$chave]['editar'] = '<a href="editar/' . $linha['TB_AUTOMOVEL_ID'] . '"> ALTERAR </a>';
            $automoveis[$chave]['excluir'] = '<a href="excluir/' . $linha['TB_AUTOMOVEL_ID'] . '"> EXCLUIR </a>';       
        }   

        $data['tabela'] = $automoveis;
		echo view('automovelView', $data);     
    }

    public function excluir($id)
    {
        $model = new \App\Models\AutomovelModel();
		
		$resultado = $model->delete($id);		
		//var_dump($resultado);        	

    }
}

