<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Takola takolo</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <link href="css/styles.css" rel="stylesheet"/>
        <link rel="stylesheet" href="fonts/fontawesome-5/css/all.css">
        <link rel="stylesheet" href="fonts/fontawesome-5/css/all.min.css.css">
        
    </head>
    <body id="page-top">
    <?php
    include('header.php');   
    ?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading"></div>
                <div class="masthead-heading text-uppercase">
                    Be ready for negotiation</div>
            </div>
        </header>

                <!-- Portfolio Grid-->
                <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h1 class="section-heading text-uppercase">Listes des Propositions</h1>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
     <table class="tab">   
	<thead>
		<tr>
			<th><h1>numero proposition</h1></th>
			<th><h1>nom </h1></th>
            <th><h1>Son Produit</h1></th>
			<th><h1>votre produi</h1></th>
            <th><h1>Echange</i></h1></th>
		</tr>
	</thead>
	<tbody>
        <?php 
            $i1 = 0;
            $i2 = 1;
            $i3 = 2;
            $i4 = 3;
        for ($i=0; $i < count($prop); $i+=4) { 
            $id = $prop[$i1];?>
            <tr>
			<td><?php echo $prop[$i1];  ?></td>
			<td><?php echo $prop[$i2];  ?></td>
			<td><?php echo $prop[$i3];  ?></td>
			<td><?php echo $prop[$i4];  ?></td>
            <th><h1><a href="<?php echo site_url("Echange/accept/".$id); ?>"><button style="background-color: #333; color: #fff; padding: 10px 20px; border: none; border-radius: 5px;">
            <i class="fas fa-fas fa-clipboard-check"></i> 
		    </tr>
        <?php $i1+=4;$i2+=4;$i3+=4;$i4+=4; } ?>
    
	            </tbody>
                </table>
                </div>
            </div>
        </section>

   <?php
      include('footer.php'); 
      ?>
        <!-- Portfolio Modals-->

        <!-- Portfolio item 1 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h2 class="text-uppercase">Project Name</h2>
                                    <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/products/1.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Nom:</strong>
                                            
                                        </li>
                                        <li>
                                            <strong>Categories:</strong>
        
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 2 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h3 class="text-uppercase">Détails produit</h3>
                                    <p class="item-intro text-muted">Toutes les informations sur votre produit.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/products/2.jpg" alt="..." />
                                    <p>description</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Nom:</strong>
                                            Tee-Shirt
                                        </li>
                                        <li>
                                            <strong>Categorie:</strong>
                                            Vêtements
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Fermer
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Portfolio item 3 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h3 class="text-uppercase">Détails produit</h3>
                                    <p class="item-intro text-muted">Toutes les informations sur votre produit.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/products/4.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Branding
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio item 4 modal popup-->
        <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8">
                                <div class="modal-body">
                                    <!-- Project details-->
                                    <h3 class="text-uppercase">Détails produit</h3>
                                    <p class="item-intro text-muted">Toutes les informations sur votre produit.</p>
                                    <img class="img-fluid d-block mx-auto" src="assets/img/products/5.jpg" alt="..." />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Client:</strong>
                                            Southwest
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Website Design
                                        </li>
                                    </ul>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
