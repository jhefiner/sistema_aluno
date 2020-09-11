<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editar aluno</title>
    </head>
    <body>
        <?php
        
            if(empty($_POST)){
                include('cabecalho_conexao.php');

                $pront = $_GET['pront'];
                

                $SQL = "SELECT * FROM pessoas WHERE id = $pront";
		        // Executa o comando SQL
		        $dados_recuperados = mysqli_query($con, $SQL);

                if(mysqli_num_rows($dados_recuperados) > 0){
                    //include "inc/form_edit.inc";
                    
                    while( ($resultado = mysqli_fetch_array($dados_recuperados)) != null) {
                        $nome = $resultado[1];
                        $idade = $resultado[2];
                        $endereco = $resultado[3];
                    }

                    echo'<form action="editar_aluno.php" method="POST">
                            <fieldset>
                                <legend>Informe os dados:</legend>
                                <p>
                                    <label for="nome_edit">Altere o nome:</label>
                                    <input type="text" name="nome_edit" id="nome_edit" value="'.$nome.'"/>
                                </p>
                                <p>
                                    <label for="idade_edit">Altere a idade:</label>
                                    <input type="number" name="idade_edit" id="idade_edit" value="'.$idade.'"/>
                                </p>
                                <p>
                                    <label for="endereco_edit">Altere o endereço:</label>
                                    <input type="text" name="endereco_edit" id="endereco_edit" value="'.$endereco.'"/>
                                </p>
                                <input type=hidden name="id" value= "'.$pront.'"/>
                                <input type="submit" value="Enviar"/>
                                <a href="cons_todos_alunos.php"></a>
                            </fieldset>
                        </form>';
                }
            }else{
                $nome_edit = $_POST['nome_edit'];
                $idade_edit = $_POST['idade_edit'];
                $endereco_edit = $_POST['endereco_edit'];
                $id = $_POST['id'];
                
                include('cabecalho_conexao.php');
                
                $SQL = "UPDATE pessoas SET nome='$nome_edit', idade='$idade_edit', endereco='$endereco_edit' WHERE id=$id";

                include('rodape_conexao.php');

            }
        ?>
    </body>
</html>
