<form method="POST">
    E-MAIL:
    <input type="text" name="email"/> <br/> <br/>
    SENHA:
    <input type="password" name="senha"> <br/> <br/>
    
    <input type="submit" value="Enviar dados"/>
    
</form>
<?php
    if(isset($_POST['email']) && empty($_POST['email'] == FALSE)){
   
    if(isset($_POST['senha']) && empty($_POST) == FALSE){
        
        $email = $_POST['email'];
        echo 'Seu email eh: '.$email.' e ';
        
        $senha = $_POST['senha'];
        echo 'Sua senha eh: '.$senha;
    }
    }

?>