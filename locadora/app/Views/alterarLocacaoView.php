<?php

helper('form');
echo form_open('locacao/inserir_no_banco');

echo '<pre>';
echo form_label('        ***  LOCADORA  ***         ', '');
echo form_label('<br><br><br>---------------------------------------------- <br>', '');
echo form_label('               ALTERAR DADOS               ');
echo '<br>';
echo form_label('---------------------------------------------- <br>', '');
echo '<br>';
echo '<br>';

echo form_label('ID A ALTERAR ', 'TB_LOCACAO_ID'); 
echo form_input('TB_AUTOMOVEL_ID', $editar['TB_LOCACAO_ID']);

echo form_label('TIPO DE LOCAÇÃO  ', 'tipoLoc');
echo form_input('TB_LOCACAO_TIPO', $editar['TB_LOCACAO_TIPO']);

echo form_label('VALOR            ', 'valorLoc');
echo form_input('TB_LOCACAO_VALOR', $editar['TB_LOCACAO_VALOR']);

echo form_label('DATA INICIAL     ', 'dataIni');
echo form_input('TB_LOCACAO_DT_INICIO', $editar['TB_LOCACAO_DT_INICIO']);

echo form_label('DATA FINAL       ', 'dataFim');
echo form_input('TB_LOCACAO_DT_FIM', $editar['TB_LOCACAO_DT_FIM']);

echo form_label('CLIENTE          ',  'idCli');
echo form_input('TB_CLIENTE_ID', $editar['TB_CLIENTE_ID']);

echo form_label('FUNCIONÁRIO      ', 'idFunc');
echo form_input('TB_FUNCIONARIO_ID', $editar['TB_FUNCIONARIO_ID']);

echo form_label('AUTOMOVEL        ', 'idAuto');
echo form_input('TB_AUTOMOVEL_ID', $editar['TB_AUTOMOVEL_ID']);

echo '<br>';
echo '<br>';
echo form_submit('mysubmit', 'ALTERAR');
echo form_close(); 
?>