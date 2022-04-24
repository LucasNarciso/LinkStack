<?php
    session_start();

    /////////////////////////////////////////////////////////////////////////////
    /////////////  [INICIO] Funções para conexção e teste do BD   ///////////////
    /////////////////////////////////////////////////////////////////////////////

    $pdo = new PDO('mysql:host=localhost;dbname=linkstack_bd-local', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8'");
    $usuarios;
    $senhas;
    $exibusuarios;
    $ErroDeLogin = "";
    $qtdLinksUser = 0;
    $ShareLinkUser = "";
    $varTeste = 0;

    try {
        $pdoStatement = $pdo->query("SELECT * FROM usuario");

        while($row = $pdoStatement->fetch(PDO::FETCH_ASSOC)){
            $usuarios[] = $row['nome_usuario'];
            $senhas[] = $row['senha_usuario'];
            $exibusuarios[] = $row['nome_exib_usuario'];
            //echo "<p>{$row['id_usuario']} {$row['nome_usuario']} {$row['senha_usuario']}</p>";
        }
    } catch(Exception $e){
        echo "Ocorreu o seguinte erro ao acessar o BD: "; 
        echo "Erro: {$e->getMessage()}";
    }

    /////////////////////////////////////////////////////////////////////////////
    //////////////  [FIM] Funções para conexção e teste do BD   /////////////////
    /////////////////////////////////////////////////////////////////////////////

    //Função que retorna a quantidade de Usuarios Cadastrados no sistema.
    function qtdUsuarios(){

        $qtdUsuarios = 3;

        return $qtdUsuarios;
    }

    $variavelQTD = 10;

    function printaVetor($vetor){
        for ($i=0; $i < qtdUsuarios(); $i++) { 
            echo $vetor[$i] . "<br>";
        }
    }

    //DEBUG ÁREA
    /*
    echo "Usuarios no vetor: " . "<br>";
    printaVetor($usuarios);
    echo "<br>";
    echo "Senhas no vetor: " . "<br>";
    printaVetor($senhas);
    */
    //DEBUG ÁREA

    /////////////////////////////////////////////////////////////////////////////
    /////////////  [INICIO] Funções exclusivas da página de Login (Login.php)  //
    /////////////////////////////////////////////////////////////////////////////

    //If responsável por chamar a função principal da página quando o botão "ENTRAR" é pressionado.
    if (isset($_POST["entrar"])) {
        
        login($usuarios, $senhas, $ErroDeLogin, $exibusuarios);

    }

    //Função que faz todo o processo de login da página
    function login($usuarios, $senhas, $ErroDeLogin, $exibusuarios){

        //////////////  Variáveis da página  //////////////   
        $ErroDeLogin = "";

        $NomeFormulario = ($_POST["NomeUsuario"]);
        $SenhaFormulario = ($_POST["SenhaUsuario"]);

        for ($i=0; $i < qtdUsuarios(); $i++) { 

            if ($ErroDeLogin != "Senha Incorreta") {

                if ($NomeFormulario == "" || $SenhaFormulario == "") {

                    $ErroDeLogin = "Campo Vazio!";

                }else if($NomeFormulario == $usuarios[$i]){

                    if($SenhaFormulario == $senhas[$i]){

                        $_SESSION['LS_login'] = "LOGADO";
                        $_SESSION['id'] = $i+1;
                        
                        $ErroDeLogin = "Logado";
                        header("Location:LS-Painel.php");

                    }else{
                        $ErroDeLogin = "Senha Incorreta!";
                    }

                }else if ($ErroDeLogin != "Logado" & $ErroDeLogin != "Senha Incorreta!"){
                    $ErroDeLogin = "Usuário Incorreto!";
                } 
            }
        }

        if($ErroDeLogin != "" & $ErroDeLogin != "Logado"){
            header("Location:LS-LoginMembro.php?erroLogin=" . $ErroDeLogin);
        }

    }

    function DadosUser($pdo, $id){

        $dadosUser[0] = 0;
        
        try {
            $pdoDadosUser = $pdo->query("SELECT * FROM usuario WHERE id_usuario = $id");
            $pdoLinksUser = $pdo->query("SELECT * FROM link_usuario WHERE id_usuario = $id");
    
            while($row = $pdoDadosUser->fetch(PDO::FETCH_ASSOC)){
                $dadosUser[0] = $row['qtd_links_usuario'];
                $dadosUser[1] = $row['nome_exib_usuario'];
            }
        } catch(Exception $e){
            echo "Ocorreu o seguinte erro ao acessar o BD: "; 
            echo "Erro: {$e->getMessage()}";
        }
        return $dadosUser;
    }

    //Função responsável por pegar os NOMES dos LINKS do usuário
    function NomeLinkUser($pdo, $id){

        $linksUser;

        try {
            $pdoLinksUser = $pdo->query("SELECT * FROM link_usuario WHERE id_usuario = $id");
    
            while($row = $pdoLinksUser->fetch(PDO::FETCH_ASSOC)){
                $linksUser[] = $row['nome_link_usuario'];
            }
        } catch(Exception $e){
            echo "Ocorreu o seguinte erro ao acessar o BD: "; 
            echo "Erro: {$e->getMessage()}";
        }
        return $linksUser;
    }

    //Função responsável por pegar as URLs dos LINKS do usuário
    function UrlLinkUser($pdo, $id){

        $linksUser;


        try {
            $pdoLinksUser = $pdo->query("SELECT * FROM link_usuario WHERE id_usuario = $id");
    
            while($row = $pdoLinksUser->fetch(PDO::FETCH_ASSOC)){
                $linksUser[] = $row['url_link_usuario'];
            }
        } catch(Exception $e){
            echo "Ocorreu o seguinte erro ao acessar o BD: "; 
            echo "Erro: {$e->getMessage()}";
        }
        return $linksUser;
    }

    //Função responsável por pegar as CONFIGURAÇÕES do usuário
    function ConfigUser($pdo, $id){
        
        $configUser;

        try {
            $pdoConfigUser = $pdo->query("SELECT * FROM config_usuario WHERE id_usuario = $id");
    
            while($row = $pdoConfigUser->fetch(PDO::FETCH_ASSOC)){
                $configUser[0] = $row['config_cor_1'];
                $configUser[1] = $row['config_cor_2'];
                $configUser[2] = $row['config_cor_3'];
                $configUser[3] = $row['config_cor_4'];
                $configUser[4] = $row['config_cor_5'];
                $configUser[5] = $row['config_distrib_link'];
                $configUser[6] = $row['config_link_on_card'];
                $configUser[7] = $row['config_anim_card'];
            }
        } catch(Exception $e){
            echo "Ocorreu o seguinte erro ao acessar o BD: "; 
            echo "Erro: {$e->getMessage()}";
        }
        return $configUser;
    }

    //Função responsável por pegar as INFORMAÇÕES do usuário
    function InfoUser($pdo, $id){

        $infos;

        try {
            $pdoInfosUser = $pdo->query("SELECT nome_exib_usuario, qtd_links_usuario FROM usuario WHERE id_usuario = $id");
    
            while($row = $pdoInfosUser->fetch(PDO::FETCH_ASSOC)){
                $infos[0] = $row['nome_exib_usuario'];
                $infos[1] = $row['qtd_links_usuario'];
            }
        } catch(Exception $e){
            echo "Ocorreu o seguinte erro ao acessar o BD: "; 
            echo "Erro: {$e->getMessage()}";
        }
        return $infos;
    }

    //Função responsável por salvar as CONFIGURAÇÕES da página do Painel
    function SalvarConfigs($configs, $pdo, $id){
        $pdoConfigs = $pdo->query("UPDATE `config_usuario` SET `config_cor_1`='$configs[0]',`config_cor_2`='$configs[1]',`config_cor_3`='$configs[2]',`config_cor_4`='$configs[3]',`config_cor_5`='$configs[4]',`config_distrib_link`='$configs[5]',`config_link_on_card`='$configs[6]',`config_anim_card`='$configs[7]' WHERE id_usuario = $id");

    }

    //Função responsável por salvar as INFORMAÇÕES da página do Painel
    function SalvarInfos($infos, $pdo, $id){
        $pdoInfos = $pdo->query("UPDATE `usuario` SET `nome_exib_usuario`='$infos[0]',`qtd_links_usuario`='$infos[1]' WHERE id_usuario = $id");
    }

    //Função que valida a chave na página de Acesso
    //Caso Positivo: Redireciona o usuário para a página de registro.
    //Caso Falso: Retorna ao usuário o erro ocorrido na validação da chave.
    function ValidarChave($key, $pdo){

        $chaves;
        $validkeys;
        $resultVerif = "";

        try {
            $pdokeys = $pdo->query("SELECT * FROM keys_acesso");
    
            while($row = $pdokeys->fetch(PDO::FETCH_ASSOC)){
                $chaves[] = $row['chave'];
                $validkeys[] = $row['situacao'];
            }
        } catch(Exception $e){
            echo "Ocorreu o seguinte erro ao acessar o BD: "; 
            echo "Erro: {$e->getMessage()}";
        }

        for ($i=0; $i < count($chaves); $i++) { 
            
            if ($chaves[$i] == $key) {

                if ($validkeys[$i] == 'valida'){
                    $resultVerif = "Essa key existe e não foi usada!";

                    echo"<form id='formReg' action='LS-Registro.php' method='POST'>
                            <input type='hidden' name='inputKey' value='$key'>
                        </form>"
                    ;
                    echo"<script> 
                            document.getElementById('formReg').submit(); 
                        </script>";
                }else {
                    $resultVerif = "Essa key existe porém já foi usada!";
                }

            }else if ($key == ""){
                
                $resultVerif = "Insira uma chave!";

            }else if ($resultVerif =="") {

                $resultVerif = "Key Inválida ou Inexistente!";

            }
        }

        return $resultVerif;
        
    }

    //Função que verifica se a chave passada por parâmetro para a página de registro é uma chave Válida
    //Caso Positivo: Se mantém na página
    //Caso Falso: Redireciona o usuário para a página de acesso
    function chave($key, $pdo){
        $chaves;
        $validkeys;
        $resultVerif = "";

        try {
            $pdokeys = $pdo->query("SELECT * FROM keys_acesso");
    
            while($row = $pdokeys->fetch(PDO::FETCH_ASSOC)){
                $chaves[] = $row['chave'];
                $validkeys[] = $row['situacao'];
            }
        } catch(Exception $e){
            echo "Ocorreu o seguinte erro ao acessar o BD: "; 
            echo "Erro: {$e->getMessage()}";
        }

        for ($i=0; $i < count($chaves); $i++) { 
            
            if ($chaves[$i] == $key) {

                if ($validkeys[$i] == 'valida'){
                    $resultVerif = "Valido";

                }else {
                    $resultVerif = "Essa key existe porém já foi usada!";
                }

            }else if ($key == ""){
                
                $resultVerif = "Insira uma chave!";

            }else if ($resultVerif =="") {

                $resultVerif = "Key Inválida ou Inexistente!";

            }

            if ($resultVerif != "Valido") {
                header("Location:LS-Acesso.php");
            }
        }
    }

    function ValidarRegistro($user, $pass, $pdo){

        $nomeUsuarios;
        $resultado = "";

        try {
            $pdokeys = $pdo->query("SELECT * FROM usuario");
    
            while($row = $pdokeys->fetch(PDO::FETCH_ASSOC)){
                $nomeUsuarios[] = $row['nome_usuario'];
            }
        } catch(Exception $e){
            echo "Ocorreu o seguinte erro ao acessar o BD: "; 
            echo "Erro: {$e->getMessage()}";
        }
        
        for ($i=0; $i < count($nomeUsuarios); $i++) { 
            
            if ($nomeUsuarios[$i] == $user) {

                $resultado = "Esse nome de usuário já existe!";
                
            }
        }

        if ($resultado != "Esse nome de usuário já existe!") {
            
            if (strlen($pass) >= 4 && strlen($pass) <= 8 ){
                
                $resultado = "Tudo certo!";
    
            }else{
                $resultado = "A senha não atende aos requisitos!";
            }
        }
        

        return $resultado;
        
    }
?>