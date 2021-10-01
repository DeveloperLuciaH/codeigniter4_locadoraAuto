<?php

helper('form');
echo form_open('cliente/inserir_no_banco');

echo '<pre>';   
echo form_label('                  ***  LOCADORA  ***                      ', '');
echo form_label('<br><br><br>--------------------------------------------------------------- <br>', '');
echo form_label('               ALTERAR DADOS DO CLIENTE               ');
echo '<br>';
echo form_label('--------------------------------------------------------------- <br>', '');
echo '<br>';
echo '<br>';


echo form_label('ID                       ', 'TB_CLIENTE_ID');
echo form_input('TB_CLIENTE_ID', $editar['TB_CLIENTE_ID']);

echo form_label('NOME                     ', 'nomeCli');
echo form_input('TB_CLIENTE_NOME', $editar['TB_CLIENTE_NOME'] );

echo form_label('DATA DE NASCIMENTO       ', 'dataNasc');
echo form_input('TB_CLIENTE_DT_NASC', $editar['TB_CLIENTE_DT_NASC']);

echo form_label('SEXO                     ', 'sexo');
echo form_input('TB_CLIENTE_SEXO',$editar['TB_CLIENTE_SEXO']);

echo form_label('ENDEREÇO                 ', 'endereco');
echo form_input('TB_CLIENTE_ENDERECO', $editar['TB_CLIENTE_ENDERECO']);

echo form_label('COMPLEMENTO              ', 'complemento');
echo form_input('TB_CLIENTE_COMPLEMENTO', $editar['TB_CLIENTE_COMPLEMENTO']);

echo form_label('BAIRRO                   ', 'bairro');
echo form_input('TB_CLIENTE_BAIRRO', $editar['TB_CLIENTE_BAIRRO']);

echo form_label('CIDADE                   ', 'cidade');
echo form_input('TB_CLIENTE_CIDADE', $editar['TB_CLIENTE_CIDADE']);

echo form_label('UF                       ', 'uf');
echo form_input('TB_CLIENTE_UF', $editar['TB_CLIENTE_UF']);
    
echo form_label('TELEFONE                 ', 'telefone');
echo form_input('TB_CLIENTE_TEL', $editar['TB_CLIENTE_TEL']);

echo form_label('E-MAIL                   ', 'email');
echo form_input('TB_CLIENTE_EMAIL', $editar['TB_CLIENTE_EMAIL']);

echo form_label('SENHA                    ', 'senha');
echo form_input('TB_CLIENTE_SENHA', $editar['TB_CLIENTE_SENHA']);

echo form_label('DATA DE CADASTRO         ', 'dataCad');
echo form_input('TB_CLIENTE_DT_CAD', $editar['TB_CLIENTE_DT_CAD']);

echo '<br>';
echo '<br>';
echo form_submit('mysubmit', 'ALTERAR');
echo form_close(); 
?>
