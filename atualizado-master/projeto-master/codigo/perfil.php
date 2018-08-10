<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <title>EG</title>

    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="semantic/semantic.css">


</head>
<body>
<script type="text/javascript" src="semantic/semantic.min.js"></script>


<div class="ui middle aligned center aligned grid">
    <div class="column">

       
        <form class="ui large form">

            <div class="ui stacked segment">

                <img class="ui small circular centered image" src="imagenseg/perfil.png" style="margin-top: 25px;margin-bottom: 25px">
                <button class="ui button centered floated" style="margin-bottom: 25px;" href = "login.php"> Logout</button>
                <button class="ui button centered floated" style="margin-bottom: 25px;" href = "editarPerfil.php"> Editar</button>
                <button class="ui button centered floated" style="margin-bottom: 25px;" href = "deletePerfil.php"> Excluir</button>


                <div class="field">
                    <div class="ui left icon input">
                        <i class="mail icon"></i>
                        <input type="text" name="novemail" placeholder="Novo email">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="mail icon"></i>
                        <input type="text" name="confemail" placeholder="Confirmar email">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="text" name="novsenha" placeholder="Nova senha">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="text" name="confenha" placeholder="Confirmar senha">
                    </div>
                </div>



                <div class="ui inverted fluid large submit button" style="background-color: #191919">Salvar perfil</div>
            </div>



            <div class="ui error message"></div>


        </form>


        </div>
    </div>
</div>


</div>
</div>

<style type="text/css">
    body {
        background-color: #191919;
    }
    body > .grid {
        height: 100%;
    }
    .image {
        margin-top: -100px;
    }
    .column {
        max-width: 600px;
    }
</style>


</body>
</html>