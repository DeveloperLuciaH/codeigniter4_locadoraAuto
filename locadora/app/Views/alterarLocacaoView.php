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

    <div class="container mt-5">   
            <center><h4 class="text-dark">ALTERAR DADOS DA LOCAÇÃO</h4></center>
            
       
            <div class="row align-items-start">
                
                <div class="col"></div>     
                
                <div class="col border rounded">                    
                    
                    <?php

                        $id = [
                            'class' => 'form-control w-25',
                            'readonly' => 'readonly'
                            ];

                        $input = [
                            'required' => 'required',
                            'class' => 'form-control'
                            ];

                        $submit = [
                            'class' => 'btn btn-success'
                            
                        ];

                        $row = '<div class="row">';

                        $divID = '<div class="form-group col-md-12 my-3">';
                        $divOpenB = '<div class="form-group col-md-12 my-3">';
                        $divOpen = '<div class="form-group col-md-6 my-3">';
                        $divClose = '</div>';

                        helper('form');
                        echo form_open('locacao/inserir_no_banco');
                        echo $row;
                        echo $divID;
                        echo form_label('ID');
                        echo '<br>';
                        echo form_input('TB_LOCACAO_ID', $editar['TB_LOCACAO_ID'], $id);
                        echo $divClose;
                        echo $divOpen;
                        echo form_label('TIPO DE LOCAÇÃO', 'tipoLoc');
                        echo '<br>';
                        echo form_input('TB_LOCACAO_TIPO', $editar['TB_LOCACAO_TIPO'], $input);                 
                        echo $divClose;
                        echo $divOpenB;
                        echo form_label('VALOR            ', 'valorLoc');
                        echo form_input('TB_LOCACAO_VALOR', $editar['TB_LOCACAO_VALOR'], $input);
                        echo $divClose;
                        echo $divOpenB;
                        echo form_label('DATA INICIAL     ', 'dataIni');
                        echo form_input('TB_LOCACAO_DT_INICIO', $editar['TB_LOCACAO_DT_INICIO'], $input);
                        echo $divClose;
                        echo $divOpenB;
                        echo form_label('DATA FINAL       ', 'dataFim');
                        echo form_input('TB_LOCACAO_DT_FIM', $editar['TB_LOCACAO_DT_FIM'], $input);
                        echo $divClose;
                        echo $divOpenB;
                        echo form_label('CLIENTE          ',  'idCli');
                        echo form_input('TB_CLIENTE_ID', $editar['TB_CLIENTE_ID'], $input);
                        echo $divClose;
                        echo $divOpenB;
                        echo form_label('FUNCIONÁRIO      ', 'idFunc');
                        echo form_input('TB_FUNCIONARIO_ID', $editar['TB_FUNCIONARIO_ID'], $input);
                        echo $divClose;
                        echo $divOpenB;
                        echo form_label('AUTOMOVEL        ', 'idAuto');
                        echo form_input('TB_AUTOMOVEL_ID', $editar['TB_AUTOMOVEL_ID'], $input);
                        echo $divClose;
                        echo $divOpenB;
                        echo form_submit('mysubmit', 'ALTERAR', $submit);
                        echo $divClose;
                        echo $divClose;
                        echo form_close();

                    ?>
                    
                </div>

                <div class="col"></div>
     
                 
            </div>       


    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>













