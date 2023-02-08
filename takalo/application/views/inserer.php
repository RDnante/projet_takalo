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

<?php //$this->load->view("header"); ?>



<body>
    <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading">
                </div>
                <div class="card-body">
                    <h2 class="title">inserer votre objet <i class="fas fa-plus-circle "></i></h2>
                    <form action="<?php echo site_url('List_object/traitement_objets'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="input-group">
                        <input class="input--style-1" type="text" name ='nom' placeholder="Nom">
                        </div>

                        <div class="input-group">
                        <textarea name="description" cols="60" rows="5">
                            description
                        </textarea>
                        </div>

                        <div class="input-group">
                        <input placeholder="inserer image" name="photo" type="file" > 
                        </div>

                        <div class="input-group">
                            <input class="input--style-1" type="number" name='prix' placeholder="prix estimatif" >
                        </div>

                        <select class="input-group" name="categorie" id="">
                            <?php foreach($categorie as $row){ ?>
                                <option value="<?php echo $row['idcategorie']; ?>"><?php echo $row['nom']; ?></option>
                            <?php } ?>
                        </select>
                        
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
	

<?php $this->load->view('footer'); ?>