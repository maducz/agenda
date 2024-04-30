<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Agenda de Contatos">
    <meta name="keywords" content="agenda, contatos, telefones">
    <meta name="author" content="prof. Edney Rossi">

    <link rel="stylesheet" href="style.css">

    <title>Agenda</title>
</head>
<body>
    <header>
        <img id="logo" src="agenda.png" alt="" srcset="">
        <h1>Cadastro novo contato</h1>
        <nav>
            | 
            <a href="index.php">Consulta</a> |
            <a href="cadastrar.php">Cadastro</a> |
            <a href="">Atualização</a> |
            <a href="">Exclusão</a> |

        </nav>
    </header>

    <main>
        <div id="resultado">
        <form action="">
            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" ><br>
            <label for="telefone">Telefone:</label><br>
            <input type="text" id="telefone" name="telefone"><br><br>
            <input type="submit" value="Cadastrar">
        </form> 
            
        </div>
    </main>

    <footer>
        <p>Desenvolvido por: prof. Edney Rossi</p>
    </footer>
</body>
</html>
