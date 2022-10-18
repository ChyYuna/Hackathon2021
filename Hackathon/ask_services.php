<!-- bootstrap CSS -->
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <script src="js/bootstrap.min.js"></script>

</head>
<?php
if (empty($_GET['LANG']))
{
?>
<body>
    <div class="barre_nav">
        <div class="logo">
            <a href="index.php"> 
                <img class="img-responsive" src="css\photo\Comforeign.png" width="200" style="margin-left:2.1em;"> 
            </a>
        </div>
        <div class="bouton">
            <a href="provide_services.php" class="btn btn-outline-secondary" width="200">Provide services </a>
            <a href="ask_services.php" class="btn btn-outline-secondary" width="200">Ask for services</a>
            <a href="Working.php" class="btn btn-outline-secondary" width="200">Access the forum</a>
            <a href="user.php" class="btn-circle btn-xl">
                <img src="css\photo\kushal_student_profile.png"  width="50" class="rounded-circle"></img>
            </a>
            <a href="user.php?LANG=FR" class="btn-circle btn-x1">
                <img src="css\photo\french.png"  width="50" class="rounded-circle"></img>
            </a>
        </div>    
    </div>
    <div class="Ask">
        <!-- pris en ligne: barre de recherche -->
        <div class="container">
            <form>
                <fieldset>
                    <input id="oCategorieValeur" name="oCategorieValeur" type="hidden" value="0" />
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button id="oCategorie" class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégorie</button>
                            <div id="oCategorieListe" class="dropdown-menu">
                                <a class="dropdown-item" data-valeur="0" href="#">Categpry</a>
                                <a class="dropdown-item" data-valeur="1" href="#">...</a>
                            </div>
                        </div>
                        <input id="oSaisie" name="oSaisie" type="text" class="form-control" aria-label="Saisie de mots clés" placeholder="KeyWords" required="required">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Search</button>
                        </div>
                    </div>
                </fieldset> 
            </form>
        </div>
        <div class="Services">
            <div class="container">
                <div class="col">
                    <table style="margin-top:1em;">
                        <tr>
                            <th><img style="border-radius: 50%;width: 44%;margin-left: 1em;" src="css\photo\unknown.jpg"></th>
                            <th><p style="weight:bold;">Thomas D.</p></br><p style="color:grey;">Helping in Writting a cover letter</p></th>
                            <th><p style="weight:bold; text-align:right;">3€</p></br><p style="color:grey; text-align:right;">Clermont-Ferrand</p></th>
                        </tr>
                        <tr>
                            <th><img style="border-radius: 50%;width: 44%;margin-left: 1em;" src="css\photo\unknown.jpg"></th>
                            <th><p style="weight:bold;">Solene A. </p></br><p style="color:grey;">Tutoring on Microsoft Excel</p></th>
                            <th><p style="weight:bold; text-align:right;">7€</p></br><p style="color:grey; text-align:right;">Limoges</p></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<?php 
}
else
{
?>
<body>
    <div class="barre_nav">
        <div class="logo">
            <a href="index.php?LANG=FR"> 
                <img class="img-responsive" src="css\photo\Comforeign.png" width="200" style="margin-left:2.1em;"> 
            </a>
        </div>
        <div class="bouton">
            <a href="provide_services.php?LANG=FR" class="btn btn-outline-secondary" width="200">Proposer des services</a>
            <a href="ask_services.php?LANG=FR" class="btn btn-outline-secondary" width="200">Demander des services</a>
            <a href="Working.php?LANG=FR" class="btn btn-outline-secondary" width="200">Accéder au blog</a>
            <a href="user.php?LANG=FR" class="btn-circle btn-xl">
                <img src="css\photo\kushal_student_profile.png"  width="50" class="rounded-circle"></img>
            </a>
            <a href="user.php" class="btn-circle btn-x1">
                <img src="css\photo\england.png"  width="50" class="rounded-circle"></img>
            </a>
        </div>    
    </div>
    <div class="Ask">
        <!-- pris en ligne: barre de recherche -->
        <div class="container">
            <form>
                <fieldset>
                    <input id="oCategorieValeur" name="oCategorieValeur" type="hidden" value="0" />
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <button id="oCategorie" class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catégorie</button>
                            <div id="oCategorieListe" class="dropdown-menu">
                                <a class="dropdown-item" data-valeur="0" href="#">Catégorie</a>
                                <a class="dropdown-item" data-valeur="1" href="#">...</a>
                            </div>
                        </div>
                        <input id="oSaisie" name="oSaisie" type="text" class="form-control" aria-label="Saisie de mots clés" placeholder="Mot(s) clé(s)" required="required">
                        <div class="input-group-append">
                            <button class="btn btn-outline-secondary" type="submit">Recherche</button>
                        </div>
                    </div>
                </fieldset> 
            </form>
        </div>
        <div class="Services">
            <div class="container">
                <div class="col">
                    <table style="margin-top:1em;">
                        <tr>
                            <th><img style="border-radius: 50%;width: 44%;margin-left: 1em;" src="css\photo\unknown.jpg"></th>
                            <th><p style="weight:bold;">Thomas D.</p></br><p style="color:grey;">Aider à rédiger une lettre de motivation</p></th>
                            <th><p style="weight:bold; text-align:right;">3€</p></br><p style="color:grey; text-align:right;">Clermont-Ferrand</p></th>
                        </tr>
                        <tr>
                            <th><img style="border-radius: 50%;width: 44%;margin-left: 1em;" src="css\photo\unknown.jpg"></th>
                            <th><p style="weight:bold;">Solene A. </p></br><p style="color:grey;">Enseigner Microsoft Excel</p></th>
                            <th><p style="weight:bold; text-align:right;">7€</p></br><p style="color:grey; text-align:right;">Limoges</p></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
}
?>