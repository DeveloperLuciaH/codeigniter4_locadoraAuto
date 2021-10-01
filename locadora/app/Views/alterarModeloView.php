<?php

helper('form');
echo form_open('modelo/inserir_no_banco');
 
echo '<pre>';
echo form_label('        ***  LOCADORA  ***         ', '');
echo form_label('<br><br><br>---------------------------------------------- <br>', '');
echo form_label('               ALTERAR DADOS               ');
echo '<br>';
echo form_label('---------------------------------------------- <br>', '');
echo '<br>';
echo '<br>';

echo form_label('ID A ALTERAR    ', 'TB_MODELO_ID'); 
echo form_input('TB_MODELO_ID', $editar['TB_MODELO_ID']);

echo form_label('MODELO          ', 'nomeModelo');
echo form_input('TB_MODELO_DESC', $editar['TB_MODELO_DESC']);

echo form_label('OBSERVAÇÃO      ', 'obs');
echo form_input('TB_MODELO_OBS', $editar['TB_MODELO_OBS']);

echo form_label('MODELO DATA     ', 'dataModelo');
echo form_input('TB_MODELO_DATA', $editar['TB_MODELO_DATA']);

echo '<br>';
echo '<br>';
echo form_submit('mysubmit', 'ALTERAR');
echo form_close(); 
?>

