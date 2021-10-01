<?php

helper('form');
echo form_open('marca/inserir_no_banco');

echo '<pre>';
echo form_label('        ***  LOCADORA  ***         ', '');
echo form_label('<br><br><br>---------------------------------------------- <br>', '');
echo form_label('               ALTERAR DADOS               ');
echo '<br>';
echo form_label('---------------------------------------------- <br>', '');
echo '<br>';
echo '<br>';

echo form_label('ID A ALTERAR ', 'TB_MARCA_ID'); 
echo form_input('TB_MARCA_ID', $editar['TB_MARCA_ID']);

echo form_label('MARCA        ', 'nomeMarca');
echo form_input('TB_MARCA_NOME',$editar['TB_MARCA_NOME']);

echo '<br>';
echo '<br>';
echo form_submit('mysubmit', 'ALTERAR');
echo form_close(); 
?>