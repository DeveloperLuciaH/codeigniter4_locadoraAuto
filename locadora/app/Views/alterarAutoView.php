<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOCADORA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>

    <?php

        helper('form');

        echo form_open('automovel/inserir_no_banco');
        echo '<pre>';
        echo '<br><h4 class="text-primary"><center> ALTERAR DADOS DO AUTOMÓVEL </h4><br></center>';
        
        // echo form_label('<br><br><br>---------------------------------------------- <br>', '');
        // echo form_label('      ALTERAR DADOS DO AUTOMÓVEL           ');
        // echo '<br>';
        // echo form_label('---------------------------------------------- <br>', '');
        echo '<br>';
       
        echo form_label ('Digite o ID a alterar ', 'TB_AUTOMOVEL_ID'); 
        echo form_input('TB_AUTOMOVEL_ID', $editar['TB_AUTOMOVEL_ID']);

        echo form_label('Digite a marca        ', 'marca');
        echo form_input('TB_MARCA_ID', $editar['TB_MARCA_ID']);

        echo form_label('Digite o modelo       ', 'modelo');
        echo form_input('TB_MODELO_ID',$editar['TB_MODELO_ID']);

        echo form_label('Digite o automóvel    ', 'automovel');
        echo form_input('TB_AUTOMOVEL_NOME', $editar['TB_AUTOMOVEL_NOME']);

        echo form_label('Digite o ano/modelo   ', 'anomodelo');
        echo form_input('TB_AUTOMOVEL_ANO_FAB', $editar['TB_AUTOMOVEL_ANO_FAB']);

        echo form_label('Digite a cor          ',  'cor');
        echo form_input('TB_AUTOMOVEL_COR', $editar['TB_AUTOMOVEL_COR']);

        echo form_label('Digite a km atual     ', 'kmatual');
        echo form_input('TB_AUTOMOVEL_KM', $editar['TB_AUTOMOVEL_KM']);

        echo form_label('Digite o valor        ', 'valor');
        echo form_input('TB_AUTOMOVEL_VALOR_D', $editar['TB_AUTOMOVEL_VALOR_D']);

        echo form_label('Digite o status       ', 'status');
        echo form_input('TB_AUTOMOVEL_STATUS', $editar['TB_AUTOMOVEL_STATUS']);

        // echo '<br>';
        // echo '<br>';
        // echo form_submit('mysubmit', 'ALTERAR');
        echo form_close();

    ?>

    <center><input class="btn btn-primary" type="submit" value="ALTERAR"></center>     
    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>