<?php
require_once ('classepessoa.php');
$p = new Pessoa("CRUDPDO", "127.0.0.1", "luizsilva", "abc123");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Passoas</title>
    <link rel="stylesheet" href="css/estilo.css">

</head>
<body>
    <?php
    //verifica se existe array nome pra colher as informações.
    if (isset($_POST['nome'])) 
    {   
        //editar
        if(isset($_GET['id_up']) && !empty($_GET['id_up']))

        {
            $id_upd = addslashes($_GET['id_upd']);
            $nome = addslashes($_POST['nome']);
            $telefone = addslashes($_POST['telefone']);
            $email = addslashes($_POST['email']);

            if (!empty($nome) && !empty($telefone) && !empty($email))

            {
                if(!$p->atualizarDados($id_upd, $nome, $telefone, $email))

                    {
                        echo "Email ja esta cadastrado!";
                    }
            }
        }    
        else
        {
            //addslashe cria proteção aos dados
        $nome = addslashes($_POST['nome']);
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);

        //não deixa o usuario colocar campo vazio
        if (!empty($nome) && !empty($telefone) && !empty($email))
        {
            //cadastrar
            if(!$p->cadastrarPessoa($nome, $telefone, $email))
            {
            echo "Email ja esta cadastrado!";
            }
            
        }
        else{
            echo "Preencha todos os campos";
        }
        }
        
    }
    ?>
    <!-- //verificar existencia do id -->
    <?php
        if(isset($_GET['id_up']))//se a pessoa clicou em editar.
        {
            $id_update = addslashes($_GET['id_up']);
            $res = $p->buscarDadosPessoa($id_update);
        }
    ?>
    <section id="esquerda">
        <form method="POST">
            <h2>CADASTRO DE CORNO</h2>
            <label for="nome"> Nome</label>
            <!-- //no php verifica se esta vazio -->
            <input type="text" name="nome" id="nome" value="<?php if(isset($res)){echo $res['nome'];} ?>">
            <label for="Telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone" value="<?php if(isset($res)){echo $res['telefone'];} ?>" >
            <label for="Email">Email</label>
            <input type="text" name="email" id="email" value="<?php if(isset($res)){echo $res['email'];} ?>">
            <!-- botao vai mudar pra atualizar se clicar em editar -->
            <input type="submit" value="<?php if(isset($res)){echo "Atualizar";} else{ echo "Cadastrar";}?>">
        
        </form>
    </section >
    <section id="direita">
            <table>
            <tr id="titulo">
                <td>Nome</td>
                <td>Telefone</td>
                <td colspan="2">Email</td>
            </tr>
        <?php
            $dados = $p->buscarDados();
            if(count($dados) > 0)//tem pessoas cadastradas no banco
            {
                for ($i=0; $i < count($dados); $i++)
                {
                    echo "<tr>";
                    foreach ($dados[$i] as $k => $v) 
                    {   
                        if ($k != "id") 
                        {
                            echo "<td>" .$v. "</td>";
                        }
                    }
                    ?>
                    
                    <td>
                        <a href="index.php?id_up=<?php echo $dados[$i]['id'];?>">Editar</a>
                        <a href="index.php?id=<?php echo $dados[$i]['id'];?>">Exluir</a>
                        </td> 
                    <?php
                    echo "</tr>";

                }
                
            }
            else //bd vazio
                {
                    echo "Ainda não há pessoas cadastradas";
                }
        ?>
        
            
                

        
        </table>
    </section>

</body>
</html>

<?php
    if(isset($_GET['id']))
    {
        $id_pessoa = addslashes($_GET['id']);
        $p->excluirPessoa($id_pessoa);
        header('Location: index.php');

    }
?>