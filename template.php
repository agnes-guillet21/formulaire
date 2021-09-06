<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css">
        <title>Document
            <?php echo $titre_page; ?> 
        </title>
    </head>
    <body>
        <header>
            <div class="header">
                <img class="icone" src="asset/logo.jpg" alt="logo"/>
                <p class="inscription">
                Inscrivez-vous pour faire partie des premiers touristes de Titan, <br> la fameuse lune de Saturne !
                </p>
            </div>   
        </header>
        <main class="main">
            <?php
                if($msg != null){
                    echo '
                    <div class="' . $msgClass . ' flexColumn">
                        <p class="mLRAuto">
                            ' . $msg . '
                        </p>
                    </div>
                    ';
                }
            ?>
            <form id="form" class="form" method="post">
                <div class="element_form">
                    <label class="label">
                        Prénom <span class="asterix"> * </span>
                        <input type="text" name="firstName" id="firstName" 
                            <?php
                            if($firstName != null){
                                echo 'value="' . $firstName . '"';
                            }
                            ?>
                        />
                    </label>
                </div>
                <div class="element_form">
                    <label class="label">
                        Nom <span class="asterix"> * </span>
                        <input type="text" name="name" id="name" 
                            <?php
                            if($name != null){
                                echo 'value="' . $name . '"';
                            }
                            ?>
                        />
                    </label>
                </div>
                <div class="element_form">
                    <label class="label">
                        Email <span class="asterix"> * </span>
                        <input type="text" name="mail" id="mail" 
                            <?php
                            if($mail != null){
                                echo 'value="' . $mail . '"';
                            }
                            ?>
                        />
                    </label>
                </div>

                <div class="checkbox">
                    <input type="checkbox" id="checkbox" name="checkbox" class="check">
                    <label class="newsletter" for="checkbox">
                      <span>  J'accepte de m'inscrire de m'inscrire à la newsletter de Titan </span>
                        <?php
                        if($newsletter){
                            echo 'checked';
                        }
                    ?>
                    </label>
                </div>

                
                <div class="bouton">
                    <button
                        class="bouton_valider"
                        type="submit"
                        name="submitButton"
                        id="Btn"
                    >
                        VALIDER MON INSCRIPTION
                    </button>
                </div>
            </form>
            <?php
            /* Sert à l affichage des donénes en base echo $textTouriste;*/
            ?>
        </main> 
        <footer> 
        </footer>
    </body>
</html>