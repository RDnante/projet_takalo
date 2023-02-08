<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/all.min.css.css">

</head>

<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading">
                </div>
                <div class="card-body">
                    <h2 class="title">Inscription <i class="fas fa-id-card-alt "></i></h2>
                    <form action="<?php echo site_url('Acceuil/inscription'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="input-group">
                        <input class="input--style-1" type="text" name ='nom' placeholder="Nom">
                        </div>

                        <div class="input-group">
                        <input class="input--style-1" type="password" name="mdp" placeholder="Mot de passe" >  
                        </div>

                        <div class="input-group">
                        <input placeholder="Date de Naissance" name="date" type="date" > 
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="email" name='email' placeholder="Email" >
                        </div>
                        
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green" type="submit">Valider</button>
                        </div>
                    </form>
                    <br>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
<!-- end document-->
