<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/all.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/all.min.css.css">

    <title></title>
  </head>
  <body>
  

  <div class="content">
    
    <div class="container">
      <div class="row align-items-stretch justify-content-center no-gutters">
        <div class="col-md-7">
          <div class="form h-100 contact-wrap p-5">
            <h3 class="text-center">Login <i class="fas fa-user-alt "></i> </h3>
            <form class="mb-5" action="<?php echo site_url('Acceuil');?>" method="post" id="contactForm" name="contactForm">
              <div class="row">
                    <div class="col-md-12 form-group mb-3">
                        <label for="" class="col-form-label">Entrez votre email </label>
                        <input type="email" class="form-control" name="email" value="<?php echo $email; ?>" placeholder="<?php echo $email; ?>" >
                    </div>
                </div>

              <div class="row">
                <div class="col-md-12 form-group mb-3">
                  <label for="budget" class="col-form-label">Entrez votre mot de passe</label>
                  <input type="password" class="form-control" name="mdp" value="<?php echo $mdp; ?>" placeholder="<?php echo $mdp; ?>">
                </div>
              </div>

              <div class="row justify-content-center">
                <div class="col-md-5 form-group text-center">
                  <input type="submit" value="Valider" class="btn btn-block btn-primary rounded-0 py-2 px-4">
                  <span class="submitting"></span>
                <div class="lien">
                   <a href="<?php echo site_url('Welcome/inscription');?>"><Inscrivez-vous>Vous êtes nouveau?<em>Inscrivez-vous</em></Inscrivez-vous></a>
                 </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php echo "client : ben@gmail.com mdp:1234";?>

  </div>
  </body>
</html>