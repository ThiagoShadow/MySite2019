<!DOCTYPE html>
<html>
<head>
    <title> Thiago Rodrigues </title>
    <link rel="shortcut icon" href="img/icon.png" type="image/ico">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
                    include("header.php");
                ?>
            </div>
            <div class="col-md-12" id="divCentral">
                <div id="divTexto" class="col-md-12;">
                    <span id="foto">
                        <img src="img/perfil.jpg">
                    </span>
                    <span class="spanCenter">
                        Thiago Rodrigues, 18 anos
                    </span>
                    <br>
                    <br>
                    <div class="col-md-12">
                        <h1> Endereço: </h1>
                        <span class="span10">
                            Rua Emilio Otto Augusto Oldenburg, 285 <br>
                        </span>
                        <span class="span10">
                            CEP: 89260-753 <br>
                        </span>
                        <span class="span10">
                            Jaraguá do Sul, SC
                        </span>
                    </div>
                    <br>
                    <div class="col-md-12">
                        <h1> Contatos: </h1>
                        <span class="span10">
                            (47) 99720-7996 <br>
                        </span>
                        <span class="span10">
                            thiago_rodrigues015@outlook.com
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <?php
                    include("footer.php");
                ?>
            </div>
        </div>
    </div>
</body>
</html>