<!DOCTYPE html>
<html lang="FR">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <title>PHP Partie 4 exercice 2</title>
    </head>
    <body>
        <div align="center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <h1 align="center">PHP Partie 4 exercice 2</h1>
                    </div>
                </div>
                <div align="center">
                    <p class="text">Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine.</p>
                </div>
                <?php
                $myChain = 'Ma chaine de caractère';
                function myFunction($ReturnChain) {
                    return 'voici ma phrase ' .$ReturnChain;
                }
                echo myFunction($myChain);
                ?>
            </div>
        </div>
    </div>
</body>
</html>


