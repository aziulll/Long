<?php
switch ($_REQUEST["acao"]) {
        case 'cadastrar':
            $razaosocial = $_POST["razaosocial"];
            $email = $_POST["email"];
            $telefone = $_POST["telefone"];
            $ramo = $_POST["ramo"];
            $senha = md5($_POST["senha"]);
            $CNPJ = $_POST["CNPJ"];
            $data_nasc = $_POST["data_nasc"];
    
            $sql = "INSERT INTO  `fornecedores`(`razaosocial`, `email`, `telefone`, `ramo`, `senha`, `CNPJ`, `data_nasc`) VALUES ('{$razaosocial}','{$email}','{$telefone}','{$ramo}','{$senha}','{$CNPJ}','{$data_nasc}')";
    
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