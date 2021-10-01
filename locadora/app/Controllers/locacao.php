<?php

namespace App\Controllers;
use App\Models;

class Locacao extends BaseController
{
    public function index()
    {
        $model = new \App\Models\LocacaoModel;
        $locacoes = array();
        $locacoes['data'] = $model->findAll();

        echo view('locacaoView', $locacoes);
    }

    public function inserir()
    {
        echo view('inserirLocacaoView');
    }

    public function inserir_no_banco()
    {
        
        if(isset($this->request->getPost()['TB_LOCACAO_ID']))
        { 
            $id = $this->request->getPost()['TB_LOCACAO_ID'];
         } else
        {
            $id = FALSE;
        }
        $tipoLoc=$this->request->getPost()['TB_LOCACAO_TIPO'];
        $valorLoc=$this->request->getPost()['TB_LOCACAO_VALOR'];
        $dataIni=$this->request->getPost()['TB_LOCACAO_DT_INICIO'];
        $dataFim=$this->request->getPost()['TB_LOCACAO_DT_FIM'];
        $idCli=$this->request->getPost()['TB_CLIENTE_ID'];
        $idFunc=$this->request->getPost()[ 'TB_FUNCIONARIO_ID'];
        $idAuto=$this->request->getPost()['TB_AUTOMOVEL_ID'];
               
                
        // instancia AutomovelModel para inserir dados no banco
        $model = new \App\Models\LocacaoModel();
        
        $data = [                   
                    'TB_LOCACAO_TIPO'=>$tipoLoc,
                    'TB_LOCACAO_VALOR'=>$valorLoc,
                    'TB_LOCACAO_DT_INICIO'=>$dataIni,
                    'TB_LOCACAO_DT_FIM'=>$dataFim,
                    'TB_CLIENTE_ID'=>$idCli,
                    'TB_FUNCIONARIO_ID'=>$idFunc,
                    'TB_AUTOMOVEL_ID'=>$idAuto,
                ];

        if($id != FALSE) 
        {
            $data['TB_LOCACAO_ID'] = $id;
        }
        $resultado = $model->save($data);
        //var_dump($resultado);        
    }

    public function editar($id)
    {
        $model = new \App\Models\LocacaoModel();
        // find só seleciona a linha pelo id
        $locacoes = $model->find($id);
        $data['editar'] = $locacoes;
		echo view('alterarLocacaoView', $data); 
        //var_dump($data);
    }

    public function viewBD()
    {
        $model = new \App\Models\LocacaoModel();	
		$locacoes = $model->findAll();

        foreach ($locacoes as $chave => $linha)
        {
            $locacoes[$chave]['editar'] = '<a href="editar/' . $linha['TB_LOCACAO_ID'] . '"> ALTERAR </a>';
            $locacoes[$chave]['excluir'] = '<a href="excluir/' . $linha['TB_LOCACAO_ID'] . '"> EXCLUIR </a>';       
        }   

        $data['tabela'] = $locacoes;
		echo view('locacaoView', $data);     
    }

    public function excluir($id)
    {
        $model = new \App\Models\LocacaoModel();
		
		$resultado = $model->delete($id);		
		//var_dump($resultado);        	

    }
}

