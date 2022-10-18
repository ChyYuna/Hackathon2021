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
                <img src="css\photo\kushal_student_profile.png"  width="50" class="rounded-circle"></img>
            </a>
            <a href="Working.php?LANG=FR" class="btn-circle btn-x1">
            <img src="css\photo\french.png"  width="50" class="rounded-circle"></img>
            </a>
        </div>    
    </div>
    <table class="table table-borderless" style="margin-left:1em;">
        <div class="forme_tableau">
            <tr>
                <th>Most frequent questions</th>
                <th></th>
                <th>Submit a question</th>
            </tr>
            <tr>
                <th>
                    <div class="Working">
                        <div class="Questions">
                            <p style="margin-left:2%;">How to declare your taxes?</p>
                        </div>
                        <div class="Answers">
                            <p style="margin-left:2%;"> See the answers. </p>
                        </div>
                        <div class="Questions">
                            <p style="margin-left:2%;">How can I find accommodation?</p>
                        </div>
                        <div class="Answers">
                            <p style="margin-left:2%;"> See the answers. </p>
                        </div>
                        <div class="Questions">
                            <p style="margin-left:2%;">How to apply for housing benefit?</p>
                        </div>
                        <div class="Answers">
                            <p style="margin-left:2%;"> See the answers. </p>
                        </div>
                        <div class="Questions">
                            <p style="margin-left:2%;">How to connect to the campus wifi?</p>
                        </div>
                        <div class="Answers">
                            <p style="margin-left:2%;"> See the answers. </p>
                        </div>
                        <div class="Questions">
                            <p style="margin-left:2%;">How to benefit from €1 meals?</p>
                        </div>
                        <div class="Answers">
                            <p style="margin-left:2%;"> See the answers. </p>
                        </div>
                    </div>
                </th>
                <th>
                    <div class="figure_working"></div>
                </th>
                <th>
                    <div class="Submit_questions">
                        <form style="margin-left:1em; margin-top:1em;">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select id="" class="form-control">
                                        <option selected>Select category...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                </br>
                                <div class="form-group col-md-8">
                                    <input type="" class="form-control" id="" placeholder="Questions"></br>
                                </div>
                                <div class="form-group col-md-10">
                                    <input type="" class="form-control" id="" placeholder="Description (Optional)"></br>
                                </div>
                                </br>
                                <button type="submit" class="btn btn-outline-secondary">Submit</button></br>
                            </div>
                        </form>
                    </div>
                </th>
            </tr>
        </div>

    </table>

</body>
<?php
}
else{
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
                <img src="css\photo\kushal_student_profile.png"  width="50" class="rounded-circle"></img>
            </a>
            <a href="Working.php?" class="btn-circle btn-x1">
                <img src="css\photo\england.png"  width="50" class="rounded-circle"></img>
            </a>
        </div>    
    </div>
    <table class="table table-borderless" style="margin-left:1em;">
        <div class="forme_tableau">
            <tr>
                <th>Les questions les plus fréquentes</th>
                <th></th>
                <th>Soumettre une question</th>
            </tr>
            <tr>
                <th>
                    <div class="Working">
                        <div class="Questions">
                            <p style="margin-left:2%;">Comment déclarer les taxes?</p>
                        </div>
                        <div class="Answers">
                            <p style="margin-left:2%;">Voir les réponses.</p>
                        </div>
                        <div class="Questions">
                            <p style="margin-left:2%;">Comment puis-je trouver un logement?</p>
                        </div>
                        <div class="Answers">
                            <p style="margin-left:2%;">Voir les réponses.</p>
                        </div>
                        <div class="Questions">
                            <p style="margin-left:2%;">Comment demander l'allocation de logement?</p>
                        </div>
                        <div class="Answers">
                            <p style="margin-left:2%;">Voir les réponses.</p>
                        </div>
                        <div class="Questions">
                            <p style="margin-left:2%;">Comment se connecter au wifi du campus?</p>
                        </div>
                        <div class="Answers">
                            <p style="margin-left:2%;">Voir les réponses.</p>
                        </div>
                        <div class="Questions">
                            <p style="margin-left:2%;">Comment bénéficier des repas à 1€ ?</p>
                        </div>
                        <div class="Answers">
                            <p style="margin-left:2%;">Voir les réponses.</p>
                        </div>
                    </div>
                </th>
                <th>
                    <div class="figure_working"></div>
                </th>
                <th>
                    <div class="Submit_questions">
                        <form style="margin-left:1em; margin-top:1em;">
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <select id="" class="form-control">
                                        <option selected>Selectionner une catégorie...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                </br>
                                <div class="form-group col-md-8">
                                    <input type="" class="form-control" id="" placeholder="Questions"></br>
                                </div>
                                <div class="form-group col-md-10">
                                    <input type="" class="form-control" id="" placeholder="Description (Optionnel)"></br>
                                </div>
                                </br>
                                <button type="submit" class="btn btn-outline-secondary">Soumettre</button></br>
                            </div>
                        </form>
                    </div>
                </th>
            </tr>
        </div>
    </table>
</body>
<?php
}
?>


<footer>
    <div class="barre_nav">
        <p style="text-align: center">
        Crée pour l'occasion de l'Hackathon par l'équipe JALA. @2021</br>
        </p>
    </div>
</footer>