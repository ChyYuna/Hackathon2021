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
            <a href="user.php?LANG=FR" class="btn-circle btn-x1">
                <img src="css\photo\french.png"  width="50" class="rounded-circle"></img>
            </a>
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
            <a href="user.php?" class="btn-circle btn-x1">
                <img src="css\photo\england.png"  width="50" class="rounded-circle"></img>
            </a>
        </div>    
    </div>
</body>
<?php
};

?>


<footer>
    <div class="barre_nav">
        <p style="text-align: center">
        Crée pour l'occasion de l'Hackathon par l'équipe JALA. @2021</br>
        </p>
    </div>
</footer>