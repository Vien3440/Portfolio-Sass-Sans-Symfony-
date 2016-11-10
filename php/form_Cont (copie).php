<?php session_start(); ?>
<!doctype html>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../css/main.css">
        <title>VienM'voir</title>
    </head>

    <body class="bodyContac">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

       <div class="container">

            <div class="stater-template col-xs-12">
                <?php if (array_key_exists('erreure', $_SESSION)): ?>
                    <div class="alert alert-danger">
                        <?= implode('<br>', $_SESSION['erreure']); ?>

                    </div> 
                <?php unset($_SESSION['erreure']); endif; ?>
                <form  class="form-group" action="infoForm.php" method="POST">


                    <div class="form-group">
                        <label for="inputName" class=" control-label"></label>
                        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-10 col-md-offset-1">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-id-card"></i></span>
                                <input type="text" placeholder="Votre nom." name="nom" class="form-control from-control" id="inputName" >
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail" class="control-label"></label>
                        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-10 col-md-offset-1">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-map-signs"></i></span>
                                <input type="text" placeholder="Votre email." name="mail" class=" form-control from-control" id="inputMail" >
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputMessage" class="control-label"></label>
                        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-10 col-md-offset-1">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-comment"></i></span>
                                <textarea name="message" placeholder="Que puis-je faire pour vous." class=" form-control from-control" id="inputMessage" ></textarea>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class=" col-xs-12 col-sm-8 col-sm-offset-2 col-md-10 col-md-offset-1 btn btn-primary">Envoyer ( ͡° ͜ʖ ͡°)</button>
                </form>
            </div>


        </div>
    </body>
</html>
