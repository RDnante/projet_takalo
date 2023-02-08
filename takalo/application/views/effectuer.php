<?php $this->load->view('header') ?>


<header class="masthead">
            <div class="container">
                <div class="masthead-subheading"></div>
                <div class="masthead-heading text-uppercase">
                </div>
                <!-- <a class="btn btn-primary btn-xl text-uppercase" href="<?php echo site_url('List_object/getlist'); ?>">Liste Produits</a>
                 -->
            </div>
</header>

    <div class="container">
    <div class="text-center">
        <h2 class="section-heading text-uppercase">Operation effectuer avec succes.</h2>
        <h3 class="section-subheading text-muted">Tous a votre disposition.</h3>
        <a href="<?php echo site_url('Acceuil/revenir'); ?>"><input type="button" value="revenir a l'acceuil" style="display: inline-block; padding: 0.5em 1em; background-color: #ffc800; color: white; text-decoration: none;"></a>
    </div>

<?php $this->load->view('footer') ?>