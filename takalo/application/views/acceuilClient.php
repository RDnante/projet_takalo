<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Takola takolo</title>
        <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/assets/favicon.ico">
        <link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet"/>
        <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/fontawesome-5/css/all.css">
        <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/fontawesome-5/css/all.min.css.css">
        
    </head>
    <body id="page-top">
    <?php $this->load->view('header') ?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading"></div>
                <div class="masthead-heading text-uppercase">
                Bienvenu dans takalo</div>
            </div>
        </header>

        <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h1 class="section-heading text-uppercase">Services</h2>
                <h3 class="section-subheading text-muted">A votre disposition.</h3>
            </div>
            <div class="row text-center">
                
                    <div class="col-md-3">
                        <a href="<?php echo site_url('List_object/getlist'); ?>">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-clipboard-list fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Liste des produits dispo</h4>
                        <!-- Etendre sa zone de chalandise, de profiter d'un marché en plein essor et de générer plus de ventes entre chaque Client.</p> -->
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="<?php echo site_url('List_object/getlistbyid'); ?>">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-box fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Listes de vos produits</h4>
                        <!-- <p class="text-muted">Une plateforme où chacun peut échanger ses propres produits a ceux des autres en bénéficiant de la variété de ceux-ci.</p> -->
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="<?php echo site_url('Echange/getlist'); ?>">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-hands-helping fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">Listes Propositions</h4>
                            <p class="text-muted">
                        </a>
                    </div>
                    <div class="col-md-3">
                        <a href="<?php echo site_url('List_object/send_input'); ?>">
                            <span class="fa-stack fa-4x">
                                <i class="fas fa-circle fa-stack-2x text-primary"></i>
                                <i class="fas fa-plus-circle fa-stack-1x fa-inverse"></i>
                            </span>
                            <h4 class="my-3">inserer un objet</h4>
                            <p class="text-muted">
                        </a>
                    </div>
            </div>
        </div>
        </section>
    
        <?php $this->load->view('footer') ?>

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
                                    <img class="img-fluid d-block mx-auto" src="assets/img/products/1.jpg" alt="..." width="600px"  height="450px" />
                                    <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>
                                            <strong>Nom:</strong>
                                            
                                        </li>
                                        <li>
                                            <strong>Category:</strong>
                                            Illustration
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
