<!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Document</title>
    </head>
    <body>
        <h1>Contato</h1>
        <form action="enviar_email.php" method="post">
            <label for="nome">Digite seu Nome</label>
            <input type="text" required name="nome" />
            <label for="email">Digite seu E-Mail</label>
            <input type="email" required name="email" />
            <label for="mensagem">Mensagem</label>
            <textarea name="mensagem"></textarea>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>

