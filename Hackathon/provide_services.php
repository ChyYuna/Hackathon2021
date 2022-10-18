<!-- bootstrap CSS -->
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/stylesheet.css" />
    <script src="js/bootstrap.min.js"></script>

</head>

<?php
    if (empty($_GET['LANG'])){
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
                <img src="css\photo\kushal_student_profile.png" width="50" class="rounded-circle"></img>
            </a>
            <a href="provide_services.php?LANG=FR" class="btn-circle btn-x1">
                <img src="css\photo\french.png"  width="50" class="rounded-circle"></img>
            </a>
        </div>    
    </div>
    <table class="table table-borderless">
        <div class="forme_tableau">
            <tr> 
                <th>About this page </th>
                <th> Submit a service request </th>
            </tr>
            <tr>    
                <th>
                    <div class="AboutPage">
                        <p> This page is dedicated to the Comforeign community so that they can provide a service. First, the person must submit his service . 
                            Then, a foreign student can directly apply for the service and get assistance on his online administrative process. 
                            The student will have to pay this person according to the amount they have indicated.
                        </p>
                    </div>
                </th>
                <th>
                <div class="AboutPage">
                <form style="margin-left:1em; margin-top:1em;">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="" class="form-control" id="" placeholder="First Name"></br>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="" class="form-control" id="" placeholder="Last Name"></br>
                        </div>
                    </div>
                    <div class="form-group col-md-8">
                        <input type="" class="form-control" id="" placeholder="email" ></br>
                    </div>
                    <div class="form-group col-md-6">
                        <select id="" class="form-control">
                            <option selected>Select category...</option>
                            <option>...</option>
                        </select>
                        </br>
                    </div>
                    <div class="form-group col-md-8">

                        <input type="" class="form-control" id="" placeholder="Description"></br>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <div class="AboutPage">
                            <label for="customRange3">Price</label>
                            <input type="range" class="custom-range" min="0" max="5" step="0.5" id=""></br>
                        </div>
                        </br>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="" placeholder="City"></br>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-secondary">Search</button></br>
                </form>
                </div>
            </th>
        </tr>    
    </table>
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
            <a href="provide_services.php?LANG=FR" class="btn btn-outline-secondary" width="200">Proposer des services </a>
            <a href="ask_services.php?LANG=FR" class="btn btn-outline-secondary" width="200">Demander des services</a>
            <a href="Working.php?LANG=FR" class="btn btn-outline-secondary" width="200">Accéder au blog</a>
            <a href="user.php?LANG=FR" class="btn-circle btn-xl">
                <img src="css\photo\kushal_student_profile.png" width="50" class="rounded-circle"></img>
            </a>
            <a href="provide_services.php?" class="btn-circle btn-x1">
                <img src="css\photo\england.png"  width="50" class="rounded-circle"></img>
            </a>
        </div>    
    </div>
    <table class="table table-borderless">
        <div class="forme_tableau">
            <tr> 
                <th>A propos</th>
                <th>Soumettre une offre de service</th>
            </tr>
            <tr>    
                <th>
                    <div class="AboutPage">
                        <p> Cette page est dédiée à la communauté Comforeign afin qu'elle puisse proposer un service. 
                            Tout d'abord, la personne doit soumettre son service . 
                            Ensuite, un étudiant étranger peut directement demander le service et obtenir de 
                            l'aide sur sa démarche administrative en ligne. 
                            L'étudiant devra payer cette personne selon le montant qu'elle aura indiqué.
                        </p>
                    </div>
                </th>
                <th>
                <div class="AboutPage">
                <form style="margin-left:1em; margin-top:1em;">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="" class="form-control" id="" placeholder="Prénom"></br>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="" class="form-control" id="" placeholder="Nom de Famille"></br>
                        </div>
                    </div>
                    <div class="form-group col-md-8">
                        <input type="" class="form-control" id="" placeholder="email" ></br>
                    </div>
                    <div class="form-group col-md-6">
                        <select id="" class="form-control">
                            <option selected>Catégorie...</option>
                            <option>...</option>
                        </select>
                        </br>
                    </div>
                    <div class="form-group col-md-8">
                        <input type="" class="form-control" id="" placeholder="Description"></br>
                    </div>
                    
                    <div class="form-group col-md-6">
                        <div class="AboutPage">
                            <label for="customRange3">Prix</label>
                            <input type="range" class="custom-range" min="0" max="5" step="0.5" id=""></br>
                        </div>
                        </br>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" class="form-control" id="" placeholder="Ville"></br>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-outline-secondary">S'inscrire</button></br>
                </form>
                </div>
            </th>
        </tr>    
    </table>
</body>
<?php };
?>
