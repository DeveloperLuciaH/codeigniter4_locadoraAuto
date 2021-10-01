<?php

helper('form');
echo form_open('funcionario/inserir_no_banco');

echo '<pre>';
echo form_label('        ***  LOCADORA  ***         ', '');
echo form_label('<br><br><br>---------------------------------------------- <br>', '');
echo form_label('               ALTERAR DADOS               ');
echo '<br>';
echo form_label('---------------------------------------------- <br>', '');
echo '<br>';
echo '<br>';

echo form_label('ID                  ', 'TB_FUNCIONARIO_ID');
echo form_input('TB_FUNCIONARIO_ID', $editar['TB_FUNCIONARIO_ID']);

echo form_label('NOME DO FUNCIONÁRIO ', 'nomeFunc');
echo form_input('TB_FUNCIONARIO_NOME',$editar['TB_FUNCIONARIO_NOME'] );

echo form_label('TELEFONE            ', 'telefone');
echo form_input('TB_FUNCIONARIO_TEL', $editar['TB_FUNCIONARIO_TEL']);

echo form_label('DATA CONTRATO       ', 'dataContrato');
echo form_input('TB_FUNCIONARIO_DT_CONTRATO', $editar['TB_FUNCIONARIO_DT_CONTRATO'] );

echo form_label('CARGO               ', 'cargo');
echo form_input( 'TB_CARGO_ID', $editar['TB_CARGO_ID'] );

echo '<br>';
echo '<br>';
echo form_submit('mysubmit', 'ALTERAR');
echo form_close(); 
?>


                               