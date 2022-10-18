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
            <a href="index.php?LANG=FR" class="btn-circle btn-x1">
                <img src="css\photo\french.png"  width="50" class="rounded-circle"></img>
            </a>
        </div>    
    </div>
    <div class="avis">
        <div class="texte">               
            More than a web platform, a solution for all foreign students.        
        </div>
        </br>
        <div class="photo1">
            <p> Customers Reviews </p>
            <div class="inside_text">
                Issa <br>
                <img src="css\photo\star.jpg" width=15%></img>
                4.8

            </div>
        </div>
        <div class="photo2">
            <div class="inside_text">
                Amir <br>
                <img src="css\photo\star.jpg" width=15%></img>
                4.6
            </div>
        </div>
        <div class="photo3">
            <div class="inside_text">
                Kieu <br>
                <img src="css\photo\star.jpg" width=15%></img>
                5
            </div>
        </div>
    </div>
    <div class="features">
        <div class="photo1">
        <a href="#" style="text-decoration: none"><div class="inline_text">Open a bank account</div></a>

        </div>
        <div class="photo2">
            <a href="#" style="text-decoration: none"><div class="inline_text">Administration procedures</div></a>
        </div>
        <div class="photo3">
            <a href="#" style="text-decoration: none"><div class="inline_text">Social security Registration</div></a>

        </div>
        <div class="photo4">
            <a href="#" style="text-decoration: none"><div class="inline_text">University Registration</div></a>

        </div>
        <div class="photo5">
            <a href="#" style="text-decoration: none"><div class="inline_text">Ask for a Study Visa</div></a>

        </div>
    </div>
    <div class="Working" >
        <p>How does it work?</p>
    </div>    
    <div class="container">
        <div class="col">
            <div class="col align-self-start ">
                <div class="form">
                <h1>1. Provide</h1>
                <h2> Research requests and help foreign students to solve their problems</h2>
                </div>
            </div>
            <div class="col align-self-center">
            <div class="form">
                <h1>2. Ask </h1>
                <h2>Ask the community to help you to solve your problems</h2>
            </div>
            </div>
            <div class="col align-self-end">
            <div class="form">
                <h1>3. Chat </h1>
                <h2> Discuss with other members of the community about the procedures in France</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="Working" >
        <p>About us</p>
    </div>
    <div class="container">
        <div class="col">
            <div class="form">
            <h4> Comforeign is a web platform that allows foreign students 
                to get help with the administration difficulties they can encounter 
                during their studies in France. With our site, a foreign student can ask 
                for help to get a visa, open a bank account, find an accommodation, etc. 
                Our platform allows them to ask for help to understand and use French digital tools. 
                All of these procedures are capitalised in a single website. In addition, foreign 
                students can contact people who can help them.  
            </h4>
            </div>
        </div> 
    </div>
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
            <a href="provide_services.php?LANG=FR" class="btn btn-outline-secondary" width="200">Proposer des services</a>
            <a href="ask_services.php?LANG=FR" class="btn btn-outline-secondary" width="200">Demander des services</a>
            <a href="Working.php?LANG=FR" class="btn btn-outline-secondary" width="200">Accéder au blog</a>
            <a href="user.php?LANG=FR" class="btn-circle btn-xl">
                <img src="css\photo\kushal_student_profile.png"  width="50" class="rounded-circle"></img>
            </a>
            <a href="index.php" class="btn-circle btn-x1">
                <img src="css\photo\england.png"  width="50" class="rounded-circle"></img>
            </a>
        </div>    
    </div>
    <div class="avis">
        <div class="texte">               
        Plus qu'une plateforme web, une solution pour tous les étudiants étrangers.        
        </div>
        </br>
        <div class="photo1">
            <p>  Commentaires des clients </p>
            <div class="inside_text">
                Issa <br>
                <img src="css\photo\star.jpg" width=15%></img>
                4.8

            </div>
        </div>
        <div class="photo2">
            <div class="inside_text">
                Amir <br>
                <img src="css\photo\star.jpg" width=15%></img>
                4.6
            </div>
        </div>
        <div class="photo3">
            <div class="inside_text">
                Kieu <br>
                <img src="css\photo\star.jpg" width=15%></img>
                5
            </div>
        </div>
    </div>
    <div class="features">
        <div class="photo1">
        <a href="#" style="text-decoration: none"><div class="inline_text">Ouvrir un compte bancaire</div></a>

        </div>
        <div class="photo2">
            <a href="#" style="text-decoration: none"><div class="inline_text">Procédures administratives</div></a>
        </div>
        <div class="photo3">
            <a href="#" style="text-decoration: none"><div class="inline_text">Inscription à la Sécurité sociale</div></a>

        </div>
        <div class="photo4">
            <a href="#" style="text-decoration: none"><div class="inline_text">Inscription universitaire</div></a>

        </div>
        <div class="photo5">
            <a href="#" style="text-decoration: none"><div class="inline_text">Demander un visa d'études</div></a>

        </div>
    </div>
    <div class="Working" >
        <p>Comment ça marche?</p>
    </div>    
    <div class="container">
        <div class="col">
            <div class="col align-self-start ">
                <div class="form">
                <h1>1. Proposer</h1>
                <h2> Rechercher les demandes et aider les étudiants étrangers à résoudre leurs problèmes</h2>
                </div>
            </div>
            <div class="col align-self-center">
            <div class="form">
                <h1>2. Demander </h1>
                <h2>Demandez à la communauté de vous aider à résoudre vos problèmes.</h2>
            </div>
            </div>
            <div class="col align-self-end">
            <div class="form">
                <h1>3. Chatter </h1>
                <h2>Discutez avec d'autres membres de la communauté des procédures en vigueur en France.</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="Working" >
        <p>A propos</p>
    </div>
    <div class="container">
        <div class="col">
            <div class="form">
            <h4> Comforeign  est une plateforme web qui permet aux étudiants étrangers 
                d'obtenir de l'aide pour résoudre les difficultés administratives qu'ils peuvent rencontrer 
                pendant leurs études en France. Grâce à notre site, un étudiant étranger peut demander 
                de l'aide pour obtenir un visa, ouvrir un compte bancaire, trouver un logement, etc. 
                Notre plateforme lui permet de demander de l'aide pour comprendre et utiliser les outils numériques français. 
                L'ensemble de ces démarches est capitalisé sur un seul site internet. En outre, les étudiants étrangers 
                peuvent contacter des personnes susceptibles de les aider.  .  
            </h4>
            </div>
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