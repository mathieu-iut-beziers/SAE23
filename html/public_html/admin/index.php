<?php
session_start();
require_once('../config-db.php');
require_once('usersList.php');
require_once('showPret.php');
if(!isset($_SESSION['auth'])){
    header('Location: ../index.php');
}
?>


<link rel="stylesheet" href="../style.css"/>
<html>
    <head>
        <meta charset="utf-8">
        <title>RTBZ-Location</title>
        <link rel="stylesheet" href="style.css"/>
    </head>
    <body>
        <div class="titre" id="en_haut">
            <p></p>
            <svg version="1.1" width="100%" height="45%" id="logo">
                <g><g transform="translate(54 10.27) scale(2.42 2.42) rotate(0 57.85 41.29)">
                        <g type="shape">
                            <path d="M55.126,70.65c-1.795,0.782-3.603,1.506-5.407,2.145c-7.832,2.855-15.612,4.525-22.297,4.525 c-12.683,0-17.984-6.009-14.984-14.73c-7.156,11.532-2.229,19.996,13.335,19.996c11.632,0,26.458-4.733,39.528-11.936H55.126z" fill="#ACD078"></path>
                            <path d="M98.675,7.958c0.018,0.052,0.041,0.101,0.057,0.153C98.649,8.05,98.552,8,98.468,7.939 c-1.572-0.16-3.239-0.249-5.02-0.249c-19.744,0-46.34,10.123-66.385,24.286h10.882c3.651-2.18,7.435-4.211,11.287-6.054 c3.946-1.933,7.986-3.64,12.009-5.063c10.533-3.842,20.998-6.088,29.99-6.088c17.059,0,24.188,8.082,20.153,19.813 C120.155,20.45,115.426,9.747,98.675,7.958z" fill="#ACD078"></path>
                            <path d="M4.561,76.67C2.442,72.092,3.45,65.984,7.756,59.042H1.882C-1.361,66.524-0.378,72.725,4.561,76.67z" fill="#09FF93"></path>
                            <path d="M81.8,4.734c7.621-0.487,13.209,0.719,16.668,3.205c0.068,0.007,0.14,0.012,0.207,0.02 C96.942,2.464,90.337-0.606,79.298,0.1C58.634,1.421,29.993,15.459,13.659,31.976h5.22C36.729,17.473,62.599,5.962,81.8,4.734z"fill="#09FF93"></path>
                        </g>
                </g></g>
                <g> <g transform="translate(1 135.1) scale(0.88 0.88)">
                        <text id="text-1" font-size="55px">RTBZ-LOCATION</text>
                </g></g>
                <g> <g transform="translate(131 167.45) scale(1 1)" >
                        <text id="text-2" font-size="22px">La location verte</text>
                </g></g>             
            </svg>
        </div>
        <div class="partie_1">
            <p> 
                Liste des objets disponibles :<br>
                <?php usersList();?>
            </p>
            
        </div>
        <div class="partie_2">
            <p> 
                Liste de vos prêts :<br>
                <?php showPret(); ?>
            </p>
            
        </div>
        <div class="partie_1">
            <p> 
                <a href="../location.php">Locations</a><br>
                <a href="../logout.php">Se déconnecter</a></p>
            
        </div>
        <div id="BT">
            <a href="#en_haut">Retour en haut de la page</a>
        </div>
    </body>
</html>