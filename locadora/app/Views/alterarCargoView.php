<?php

helper('form');
echo form_open('cargo/inserir_no_banco');

echo '<pre>';
echo form_label('        ***  LOCADORA  ***         ', '');
echo form_label('<br><br><br>---------------------------------------------- <br>', '');
echo form_label('               ALTERAR DADOS               ');
echo '<br>';
echo form_label('---------------------------------------------- <br>', '');
echo '<br>';
echo '<br>';

echo form_label('Digite o ID a alterar ', 'TB_CARGO_ID'); 
echo form_input('TB_CARGO_ID', $editar['TB_CARGO_ID']);

echo form_label('CARGO                 ', 'nomeCargo');
echo form_input('TB_CARGO_NOME',$editar['TB_CARGO_NOME']);

echo '<br>';
echo '<br>';
echo form_submit('mysubmit', 'ALTERAR');
echo form_close(); 
?>