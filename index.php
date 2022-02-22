<!DOCTYPE html>
<?php

$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"],1);

$active_group = "default";
$query_builder = TRUE;

$conn = mysqli_connect($cleardb_server, $cleardb_username,$cleardb_password,$cleardb_db);

//Base de donnée
$bdd = new PDO('mysql:host='.$cleardb_server.';dbname=heroku_5e467cebb29b935;charset=utf8', $cleardb_username, $cleardb_password);

$req = $bdd->query('SELECT * FROM text_to_get');

$nom ='';
$titre = '';
$titre2 = '';
$titre3 = '';
$titre4 = '';
$paragraphe1 = '';
$paragraphe2 = '';
$paragraphe3 = '';
$paragraphe4 = '';
$paragraphe5 = '';
$lien1 = '';
$lien2 = '';
$lien3 = '';

// file_put_contents('exemple.txt', 'Ecriture dans un fichier');

while ($donnees = $req->fetch())
{
	if ($donnees['name'] == "nom"){
        $nom=$donnees['content'];
    } else if ($donnees['name']== "titre"){
        $titre=$donnees['content'];
    }else if ($donnees['name']== "titre2"){
        $titre2=$donnees['content'];
    }else if ($donnees['name']== "paragraphe1"){
        $paragraphe1=$donnees['content'];
    }else if ($donnees['name']== "paragraphe2"){
        $paragraphe2=$donnees['content'];
    }else if ($donnees['name']== "paragraphe3"){
        $paragraphe3=$donnees['content'];
    }else if ($donnees['name']== "paragraphe4"){
        $paragraphe4=$donnees['content'];
    }else if ($donnees['name']== "paragraphe5"){
        $paragraphe5=$donnees['content'];
    }else if ($donnees['name']== "titre3"){
        $titre3=$donnees['content'];
    }else if ($donnees['name']== "titre4"){
        $titre4=$donnees['content'];
    }else if ($donnees['name']== "lien1"){
        $lien1=$donnees['content'];
    }else if ($donnees['name']== "lien2"){
        $lien2=$donnees['content'];
    }else if ($donnees['name']== "lien3"){
        $lien3=$donnees['content'];
    }
}
?>
<html>

<head>
    <meta charset="utf-8" />
    <meta Name=description Content="Description de ma page">
    <meta name=viewport content="width=device-width,initial-scale=1.0">
    <style>
        @import url("https://use.typekit.net/whk8yxa.css");
    </style>

    <link rel="stylesheet" href="css/all.css" />
    <link rel="stylesheet" href="style.css" />


    <link rel="icon" href="img/favicon.png"/>
    <title>Simon F. ✌️</title>
</head>


<body>

    <div id="noise"></div>
    <div id="arrow"><i class="fas fa-arrow-circle-right"></i> </div>

    <section id="page1" class="pageIn">
        <h1><?php echo $nom;?></h1>
        <h2><?php echo $titre;?></h2>
        <svg id="simpleLigne" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 255.83 38.79">
            <path
                d="M25.93,61.28l40.84-.93c13.26-.3,26.6-1,39.83.1s26,3.87,39.14,5.17,26.35.4,39.5-1.2c12.28-1.49,25.32-2.42,36.62-7.89,4.74-2.29,9.26-5.74,11-10.89a12.22,12.22,0,0,0,.18-7.63,12.35,12.35,0,0,0-4.81-6c-4.36-3.16-10-5.08-15.44-4.34a14.74,14.74,0,0,0-11.38,8.5c-4.43,9.58.91,20.16,9.86,24.77,5.23,2.7,11.31,3.43,17.1,3.92a85.53,85.53,0,0,0,16.08-.16c10.35-1.11,20.63-4.22,29.28-10.15a52.83,52.83,0,0,0,6.09-4.87c1.42-1.32-.71-3.43-2.12-2.12C263,61.22,240.75,64.29,221.51,61c-5.15-.89-10.09-2.62-13.84-6.41A15.79,15.79,0,0,1,202.85,42a13,13,0,0,1,6.94-10.42c4.65-2.2,10.26-.92,14.56,1.47,2.17,1.2,4.46,2.74,5.55,5.06a9.18,9.18,0,0,1,0,7.11c-1.84,4.74-6.7,7.54-11.13,9.47a70.63,70.63,0,0,1-16.86,4.52c-5.93,1-11.91,1.66-17.87,2.37-12.41,1.48-24.82,2.32-37.29,1.15-12.14-1.14-24.11-3.6-36.23-4.9-12.35-1.32-24.76-.9-37.15-.62l-38.07.87-9.33.21c-1.92,0-1.93,3,0,3Z"
                transform="translate(-24.49 -27.46)" />
        </svg>

    </section>









    <section id="page2" class="pageWaiting">
        <div id="fullBody">
            <div id="mootmoot">
                <div class="satellite" id="mootmootmoot"></div>
                <div class="satellite" id="mootmootmoot2"></div>
                <div class="satellite" id="mootmootmoot3"></div>
                <div class="satellite" id="mootmootmoot4"></div>
            </div>
        </div>
        <div id="conteneurTextPage2">
            <h2><?php echo $titre2;?></h2>
            <div class="textePrincipal">
            </br>
                <p><?php echo $paragraphe1;?></p>
                <p><?php echo $paragraphe2;?></p>
                <p><?php echo $paragraphe3;?></p>
            </br>
                <p><?php echo $paragraphe4;?></p>
            </div>
        </div>
    </section>















    <!--PAGE VERTICALE -->
    <section id="page3" class="pageWaiting">
        <article id="landingPage3">
            <h2><?php echo $titre3;?></h2>
            <p><?php echo $paragraphe5;?></p>
            <svg id="arrowSVG" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50.26 230.55">
                <path
                    d="M38.96 228.33a181.65 181.65 0 0111.25-41 1.5 1.5 0 00-1.44-1.9l-47.28 4.55a1.52 1.52 0 00-1.06 2.6q17.79 18.89 35.82 37.55c1.35 1.39 3.47-.73 2.12-2.12q-18-18.66-35.82-37.55l-1.06 2.56 47.25-4.55-1.45-1.89a182.34 182.34 0 00-11.26 41c-.28 1.89 2.61 2.71 2.9.8z" />
                <path
                    d="M29.02.72c-7.18 12.45-10.84 26.42-13 40.53-.51 3.36-.95 6.74-1.34 10.12-.45 3.85-.52 7.75-.63 11.63q-.32 11.89 0 23.79c.44 15.73 1.66 31.43 3.3 47.09q1.22 11.65 2.7 23.29c1 7.64 1.71 15.34 3.09 22.92 3 16.37 8.39 32.14 12.55 48.21a1.5 1.5 0 002.89-.79c-3.66-14.13-8.28-28-11.36-42.29-1.59-7.32-2.45-14.68-3.41-22.1q-1.52-11.64-2.82-23.3c-1.72-15.48-3.08-31-3.72-46.59q-.41-11.65-.31-23.29a192.94 192.94 0 011.25-22.55c2-15.67 5.44-31.35 13.41-45.15A1.50154 1.50154 0 0029.03.72z" />
            </svg>
        </article>
        <article id="dragAndDropShow">
            <div id="arrowDiv" class="arrowHidding">
                <svg id="arrowSVG2" class="arrowHidding" data-name="Calque 1" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 50.26 230.55">
                    <path
                        d="M38.96 228.33a181.65 181.65 0 0111.25-41 1.5 1.5 0 00-1.44-1.9l-47.28 4.55a1.52 1.52 0 00-1.06 2.6q17.79 18.89 35.82 37.55c1.35 1.39 3.47-.73 2.12-2.12q-18-18.66-35.82-37.55l-1.06 2.56 47.25-4.55-1.45-1.89a182.34 182.34 0 00-11.26 41c-.28 1.89 2.61 2.71 2.9.8z" />
                    <path
                        d="M29.02.72c-7.18 12.45-10.84 26.42-13 40.53-.51 3.36-.95 6.74-1.34 10.12-.45 3.85-.52 7.75-.63 11.63q-.32 11.89 0 23.79c.44 15.73 1.66 31.43 3.3 47.09q1.22 11.65 2.7 23.29c1 7.64 1.71 15.34 3.09 22.92 3 16.37 8.39 32.14 12.55 48.21a1.5 1.5 0 002.89-.79c-3.66-14.13-8.28-28-11.36-42.29-1.59-7.32-2.45-14.68-3.41-22.1q-1.52-11.64-2.82-23.3c-1.72-15.48-3.08-31-3.72-46.59q-.41-11.65-.31-23.29a192.94 192.94 0 011.25-22.55c2-15.67 5.44-31.35 13.41-45.15A1.50154 1.50154 0 0029.03.72z" />
                </svg>
            </div>
            <!--Je veux Une div qui se glisse 1 fois dans une case au sein d'une plus grande div-->
            <div class="case" id="firstBase">
                <div class="base" draggable="true"></div>
            </div>
            <div id="grandeDiv">
                <div class="case" id="hole"></div>
            </div>


        </article>


        <article id="locomotive" class="hidden">
            <div data-scroll-container class="container">
                <h1><?php echo $titre4;?></h1>
                <h2><?php echo $lien1;?></h2>
                <h2><?php echo $lien2;?></h2>
                <h2><?php echo $lien3;?></h2>
            </div>
            <div id="arrow"><i class="fas fa-arrow-circle-up" onclick=goTop()></i> </div>

        </article>
    </section>

























    <section id="page4" class="pageWaiting">
        <h2>Contact</h2>
        <p>Votre réponse en 24h !</p>
        <p> </p>
        <div id="contactForm">
        <input id="numero" type="text" value="0687063486"class="inputText" readonly/>
        <input id="hiddenMail" type="text" value="simon.fournier3@gmail.com"class="inputText" readonly/>
        <div id="sendMail" class="contactBtn">Copier dans le presse-papier</div>
        <div id="openCV" class="contactBtn">Voir le CV en pdf</div>
        </div>
 <!--       <form>
            <div id="contactForm">
                <input id="emailForm" type="email" name="email" class="inputText" placeholder="Votre mail" required>
                <textarea id="emailContentForm" name="message" style="max-height: 200px" type="text" class="inputText" placeholder="Bonjour Simon, on se rencontre ?" required></textarea>
                <div id="sendMail">Envoyer</div>
            </div>
        </form>
-->
    </section> 
</body>

<script type="text/javascript" src="script.js"></script>

</html>