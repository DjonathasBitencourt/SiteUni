<html>
    <head>
        <meta charset="UTF-8">
        <title>Biblioteca</title>
        <link href="../_Css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
        <?php include "./menuSuperior.php" ?>
        <h1 style="text-align: left; font-family: sans-serif; font-size: 24px
            ">Lista de Artigos e Livros.</h1>
        <?php
            $path = "../arquivos/bibli/";
            $diretorio = dir($path);


            while($arquivo = $diretorio -> read()){
            echo "<a style='text-decoration:none; font-size: 22px; color: blue' href='".$path.$arquivo."'>".$arquivo."</a><br />";
            }
            $diretorio -> close();
        ?>
        <div class="rodape">

        </div>

    </body>
</html>

