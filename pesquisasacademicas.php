<html>
    <head>
        <meta charset="UTF-8">
        <title>Pesquisas Academicas</title>
        <link href="../_Css/estilo.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>
   
            <?php include "./menuSuperior.php" ?>
        <div style="box-shadow:1px 1px 1px 1px gray; margin-bottom: 10px;">
            <h1 style="text-align: justify; font-family: monospace; font-size: 24px
                ">Lista de Pesquisas Academicas realizadas por alunos de toda a rede
                de ensino da instituição. Os academicos realizaram a construção desse
                material com o auxilio dos coordenadores e professores do colegiado.</h1>
                        

            <?php
            $path = "../arquivos/pesquisasacad";
            $diretorio = dir($path);


            while ($arquivo = $diretorio->read()) {
                echo "<a style='text-decoration:none; font-size: 22px; color: blue' href='" . $path . $arquivo . "'>" . $arquivo . "</a><br />";
            }
            $diretorio->close();
            ?>
        </div>
    <div class="rodape">

    </div>

</body>
</html>

