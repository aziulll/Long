<?php
    switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = md5($_POST["senha"]);
            $data_nasc = $_POST["data_nasc"];
    
            $sql = "INSERT INTO `usuarios`(`nome`, `email`, `senha`, `data_nasc`) VALUES ('{$nome}','{$email}','{$senha}','{$data_nasc}')";
    
            $res = $conn->query($sql);
            if ($res == true) {
                print "<script> alert('Cadastro finalizado');</script>";
                print "<script> location.href='?page-listar';</script>";
            } else {
                print "<script> alert('Não foi possivel finalizar o seu cadastro, tente novamente.');</script>";
                print "<script> location.href='?page-listar';</script>";
            }
            break;
    
        case "editar":
    
            break;
        
        case "excluir":
    
            break;
        }