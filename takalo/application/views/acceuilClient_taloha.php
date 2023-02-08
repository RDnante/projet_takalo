<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <?php $this->load->view('header');?>
    <div>
        
    </div>
    <?php $this->load->view('footer'); ?>
</body>
</html>

<!-- <h1>
            bienvenue a l'accueil <?php echo $ad; ?>
        </h1>
        <?php echo $this->session->userdata('idpersonne'); ?>
        <a href="<?php echo site_url('List_object/getlistbyid'); ?>">liste object par id</a>
        <a href="<?php echo site_url('List_object/getlist'); ?>">liste object</a>
        <a href="<?php echo site_url('Echange/getlist'); ?>">liste proposition</a> -->