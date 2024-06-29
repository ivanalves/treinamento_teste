<?php
// Verificando se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperando os dados do formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Verificando se o usuário e a senha estão corretos (isso é apenas um exemplo, você deve substituir esta lógica pela verificação real no seu sistema)
    if ($username === 'usuario' && $password === 'senha') {
        // Autenticação bem-sucedida, redirecionar para a página inicial, por exemplo
        header("Location: pagina_inicial.php");
        exit();
    } else {
        // Caso contrário, exibir mensagem de erro
        echo "Usuário ou senha incorretos.";
    }
}
?>