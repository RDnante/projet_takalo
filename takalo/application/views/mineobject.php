<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste de vos objets</title>

<?php $this->load->view('header') ?>
<header class="masthead">
            <div class="container">
                <div class="masthead-subheading"></div>
                <div class="masthead-heading text-uppercase">
                liste de vos objets</div>
                <!-- <a class="btn btn-primary btn-xl text-uppercase" href="<?php echo site_url('List_object/getlist'); ?>">Liste Produits</a>
                 -->
            </div>
</header>

<section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Listes de vos Produits.</h2>
                </div>
                <div class="row">
                    <?php foreach ($obj as $o) {?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                        <!-- Portfolio item 1-->
                        <div class="portfolio-item">
                            <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid" src="<?php echo base_url(); ?>assets/img/products/<?php echo $o['photos']; ?>" alt="..." />
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php echo $o['nom']; ?></div>
                                    <div class="portfolio-caption-subheading text-muted">
                                    <form action="<?php echo site_url('Proposition/proposer'); ?>" method="get">
                                        <input type="hidden" value="<?php echo $idobj; ?>" name="yours">
                                        </p><input type="hidden" value="<?php echo $o['idobject']; ?>" name="mine">
                                        <input type="hidden" name="destinateur" value="<?php echo $iddestinateur; ?>">
                                        <input type="submit" value="proposer" style="display: inline-block; padding: 0.5em 1em; background-color: #ffc800; color: white; text-decoration: none;">
                                    </form>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </section>

<?php $this->load->view('footer') ?>
