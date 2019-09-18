<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Parc Auto | Connexion</title>

        <!--   Liens des CSS et Javacript   -->
        <link rel="stylesheet" href="Styles/bootstrap.min.css">
        <link rel="stylesheet" href="Styles/login.css">
        <script type="text/javascript" src="Styles/jQuery.js"></script>
    </head>
    <body>
        <!--   La page de connexion au tableau de bord   -->
        <div class="container-fluid row loginForm">

            <!--  Bannière de l image de la page de connexion  -->
            <div class="banImg col-md-6">
                <img src="" alt="">
            </div>

            <!--  Bannière du saisir de compte de la page de connexion  -->
            <div class="BanLogin col-md-6">
                <h1>PARC AUTO</h1>
                <p>Bienvenue ! SVP connectez vous à votre compte.</p>
                <form action="" method="post">
                    <div class="texte">
                        <input type="email" name="" id="" required="required">
                        <span data-placeholder="E-mail"></span>
                    </div>
            
                    <div class="texte">
                        <input type="password" name="" required="required">
                        <span data-placeholder="Mot de passe"></span>  
                    </div>

                    <div class="row">
                        <div class="souvenir col-md-6 col-sm-6 col-xs-6">
                            <input type="checkbox" name="souvenir" id="">
                            <label for="">Se souvenir de moi</label>
                        </div>
                                
                        <div class="mdpO col-md-6 col-sm-6 col-xs-6">
                            <a href="mdpassoublie">Mot de passe oublié ?</a>
                        </div>
                    </div>
                    <div class="rowb">
                        <input type="submit" value="Se connecter" class="bouton">
                    </div>
                    <div class="signature row">
                        <p>By MediaTEC Group | Tout droit réservé !</p>
                    </div>
                </form>
            </div>
        </div>


        <!--   Le code jquery de la page login   -->
        <script type="text/javascript">
            $(".texte input").on("focus", function(){
                $(this).addClass("focus");
            });

            $(".texte input").on("blur", function(){
                if ($(this).val() == ""){
                    $(this).removeClass("focus");
                }
            });
        </script>
    </body>
</html>