<form action="editar_aluno.php" method="POST">

    <fieldset>
        <legend>Informe os dados:</legend>
        <p>
            <label for="nome_edit">Altere o nome:</label>
            <input type="text" name="nome_edit" id="nome_edit" value="'.$resultado[1].'"/>
        </p>
        <p>
            <label for="idade_edit">Altere a idade:</label>
            <input type="number" name="idade_edit" id="idade_edit"/>
        </p>
        <p>
            <label for="endereco_edit">Altere o endereço:</label>
            <input type="text" name="endereco_edit" id="endereco_edit"/>
        </p>
        <input type="submit" value="Enviar"/>
        <a href="cons_todos_alunos.php"></a>
    </fieldset>
</form>