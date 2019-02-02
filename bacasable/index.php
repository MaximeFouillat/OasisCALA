<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Oasis du coq à l'âme</title>

      <!-- Metatags, links to Bootstrap and stylesheets -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/feuille_de_style_2.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   
    </head>

    <body style="background: url('includes/le_projet/img/background_wood.jpeg');">

    <!-- L'en-tête -->
    <?php include("includes/entete.php"); ?>

    <!-- Le menu -->
    <?php include("includes/menus.php"); ?>

    <!-- Le corps -->
    <div id="corps">
      <div class="container">
        <!-- Section 1 : LE PROJET-->
        <?php include("includes/le_projet/le_projet_2.php"); ?>

        <!-- Section 8 TIMELINE  -->
        <?php include("includes/timeline_2.php"); ?>

        <!-- Section 2 AGENDA -->
        <!--<?php include("includes/feuille_de_route.php"); ?>-->

        <!-- Section 3 LES HABITANTS -->
        <?php include("includes/les_habitants/les_habitants_2.php"); ?>

        <!-- Section 4 APPEL A BENEVOLES -->
        <!--<php include("includes/appel_a_benevoles.php"); ?>-->

        <!-- Section 5 DEVENIR HABITANT -->
        <!--<php include("includes/devenir_habitant.php"); ?>-->

        <!-- Section 6 FAIRE UN DON -->
        <?php include("includes/faire_un_don_2.php"); ?>

        <!-- Section 7 CONTACTEZ NOUS  -->
        <?php include("includes/contactez_nous.php"); ?>


        <!-- Le pied de page -->
        <?php include("includes/pied_de_page.php"); ?>
      </div>
    </div>
    </body>
</html>
