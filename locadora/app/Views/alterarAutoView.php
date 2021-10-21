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
            <center><h4 class="text-dark">ALTERAR DADOS DO AUTOMÓVEL</h4></center>
       
            <div class="row align-items-start mt-5">
                
                <!-- <div class="col"></div>      -->
                
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
                        echo form_open('automovel/inserir_no_banco');
                        echo $row;
                        echo $divID;
                        echo form_label('ID');
                        echo form_input('TB_AUTOMOVEL_ID', $editar['TB_AUTOMOVEL_ID'], $id);
                        echo $divClose;
                        echo $divOpen;                     
                        echo form_label('Digite a marca        ', 'marca');
                        echo form_input('TB_MARCA_ID', $editar['TB_MARCA_ID'], $input);
                        echo $divClose;
                        echo $divOpen;
                        echo form_label('Digite o modelo       ', 'modelo');
                        echo form_input('TB_MODELO_ID',$editar['TB_MODELO_ID'], $input);
                        echo $divClose;
                        echo $divOpen;
                        echo form_label('Digite o automóvel    ', 'automovel');
                        echo form_input('TB_AUTOMOVEL_NOME', $editar['TB_AUTOMOVEL_NOME'], $input);
                        echo $divClose;
                        echo $divOpen;
                        echo form_label('Digite o ano/modelo   ', 'anomodelo');
                        echo form_input('TB_AUTOMOVEL_ANO_FAB', $editar['TB_AUTOMOVEL_ANO_FAB'], $input);
                        echo $divClose;
                        echo $divOpen;
                        echo form_label('Digite a cor          ',  'cor');
                        echo form_input('TB_AUTOMOVEL_COR', $editar['TB_AUTOMOVEL_COR'], $input);
                        echo $divClose;
                        echo $divOpen;
                        echo form_label('Digite a km atual     ', 'kmatual');
                        echo form_input('TB_AUTOMOVEL_KM', $editar['TB_AUTOMOVEL_KM'], $input);
                        echo $divClose;
                        echo $divOpen;
                        echo form_label('Digite o valor        ', 'valor');
                        echo form_input('TB_AUTOMOVEL_VALOR_D', $editar['TB_AUTOMOVEL_VALOR_D'], $input);
                        echo $divClose;
                        echo $divOpen;
                        echo form_label('Digite o status       ', 'status');
                        echo form_input('TB_AUTOMOVEL_STATUS', $editar['TB_AUTOMOVEL_STATUS'], $input);                        
                        echo $divClose;
                        echo $divOpen;                        
                        echo form_submit('mysubmit', 'ALTERAR', $submit);
                        echo $divClose;
                        echo $divClose;
                        echo form_close();
                    ?>                    
                </div>

                <!-- <div class="col"></div>     -->                 
            </div>      
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>

       
        

        

        

        