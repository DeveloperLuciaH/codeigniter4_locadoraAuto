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
            <center><h4 class="text-dark">ALTERAR DADOS DO CLIENTE</h4></center>
       
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
                        echo form_open('cliente/inserir_no_banco');
                        echo $row;
                        echo $divID;
                        echo form_label('ID');
                        echo form_input('TB_CLIENTE_ID', $editar['TB_CLIENTE_ID'], $id);
                        echo $divClose;
                        echo $divOpen;
                        echo form_label('NOME                     ', 'nomeCli');
                        echo form_input('TB_CLIENTE_NOME', $editar['TB_CLIENTE_NOME'],$input);
                        echo $divClose;
                        echo $divOpen;
                        echo form_label('DATA DE NASCIMENTO       ', 'dataNasc');
                        echo form_input('TB_CLIENTE_DT_NASC', $editar['TB_CLIENTE_DT_NASC'],$input);
                        echo $divClose;
                        echo $divOpen;
                        echo form_label('SEXO                     ', 'sexo');
                        echo form_input('TB_CLIENTE_SEXO',$editar['TB_CLIENTE_SEXO'],$input);
                        echo $divClose;
                        echo $divOpen;   
                        echo form_label('ENDEREÇO                 ', 'endereco');
                        echo form_input('TB_CLIENTE_ENDERECO', $editar['TB_CLIENTE_ENDERECO'],$input);
                        echo $divClose;
                        echo $divOpen;  
                        echo form_label('COMPLEMENTO              ', 'complemento');
                        echo form_input('TB_CLIENTE_COMPLEMENTO', $editar['TB_CLIENTE_COMPLEMENTO'],$input);
                        echo $divClose;
                        echo $divOpen;  
                        echo form_label('BAIRRO                   ', 'bairro');
                        echo form_input('TB_CLIENTE_BAIRRO', $editar['TB_CLIENTE_BAIRRO'],$input);                 
                        echo $divClose;
                        echo $divOpen;  
                        echo form_label('CIDADE                   ', 'cidade');
                        echo form_input('TB_CLIENTE_CIDADE', $editar['TB_CLIENTE_CIDADE'], $input);
                        echo $divClose;
                        echo $divOpen;
                        echo form_label('UF                       ', 'uf');
                        echo form_input('TB_CLIENTE_UF', $editar['TB_CLIENTE_UF'], $input);
                        echo $divClose;
                        echo $divOpen;         
                        echo form_label('TELEFONE                 ', 'telefone');
                        echo form_input('TB_CLIENTE_TEL', $editar['TB_CLIENTE_TEL'], $input);
                        echo $divClose;
                        echo $divOpen;
                        echo form_label('E-MAIL                   ', 'email');
                        echo form_input('TB_CLIENTE_EMAIL', $editar['TB_CLIENTE_EMAIL'], $input);
                        echo $divClose;
                        echo $divOpen;
                        echo form_label('SENHA                    ', 'senha');
                        echo form_input('TB_CLIENTE_SENHA', $editar['TB_CLIENTE_SENHA'], $input);
                        echo $divClose;
                        echo $divOpen;
                        echo form_label('DATA DE CADASTRO         ', 'dataCad');
                        echo form_input('TB_CLIENTE_DT_CAD', $editar['TB_CLIENTE_DT_CAD'], $input);                         
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




















