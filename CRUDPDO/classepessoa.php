<?php

Class Pessoa{

    private $pdo;
    //conexao com bd
    public function __construct($dbname, $host, $user, $senha)
    {
        try {
            $this->pdo = new PDO("mysql:dbname=".$dbname.";host=".$host,$user,$senha);
    
        } catch (PDOException $e) {
            echo "Erro com banco de dados: ".$e->getMessage();
        }
        catch (Exception $e){
            echo "Erro genérico: ".$e->getMEssage();
        }
    }
    //FUNÇÃO PARA BUSCAR DADOS E COLOCAR NO CANTO DIREITO
    public function buscarDados()
    {
        $res = array();
        $cmd = $this->pdo->query("SELECT * FROM PESSOA ORDER BY nome");
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }
//cadastra pessoas no bd
    public function cadastrarPessoa($nome, $telefone, $email)
    {
        //Verifificar se existe o cadastro no banco
        $cmd = $this->pdo->prepare("SELECT id from PESSOA WHERE email = :e");
        $cmd->bindValue(":e", $email);
        $cmd->execute();

        //email ja existe no banco
        if ($cmd->rowCount() > 0) { 
            return false;
        
        //Email nao encontrado
        }else
        {
            $cmd = $this->pdo->prepare("INSERT INTO PESSOA (nome, telefone, email) VALUES (:n, :t, :e)");
            $cmd->bindValue(":n",$nome);
            $cmd->bindValue(":t",$telefone);
            $cmd->bindValue(":e",$email);
            $cmd->execute();
            return true;
        }


        }

        
        public function excluirPessoa($id)
        {
            $cmd = $this->pdo->prepare("DELETE FROM PESSOA WHERE id = :id");
            $cmd->bindValue(":id", $id);
            $cmd->execute();
        }

        
        public function buscarDadosPessoa($id)
        {
            $cmd = $this->pdo->prepare("SELECT * FROM PESSOA WHERE id = :id");
            $cmd->bindValue(":id" , $id);
            $cmd->execute();
            $res = $cmd->fetch(PDO::FETCH_ASSOC);
            
            
            return $res;
        }

        public function atualizarDados($id, $nome, $telefone, $email)
        {   

            //verificar se o email ja esta cadastrado
            $cmd = $this->pdo->prepare("SELECT id from PESSOA WHERE email = :e");
        $cmd->bindValue(":e", $email);
        $cmd->execute();

        //email ja existe no banco
        if ($cmd->rowCount() > 0) { 
            return false;
        
        //Email nao encontrado
        }else
        {
        $cmd = $this->pdo->prepare("UPDATE PESSOA SET nome = :n, telefone = :t, email = :e WHERE id = :id");
        $cmd = bindValue(":id", $id);
        $cmd = bindValue(":n", $nome);
        $cmd = bindValue(":t", $telefone);
        $cmd = bindValue(":e", $email);
        $cmd->execute();
        return true;
        }
            
        }   
}

?>