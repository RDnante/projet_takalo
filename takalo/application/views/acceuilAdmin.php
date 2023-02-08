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
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        
    </head>
    <body id="page-top">
       <?php $this->load->view('headerAdmin'); ?>
        <!-- Masthead-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading"></div>
                <div class="masthead-heading text-uppercase">
                    connecter en tant q'admin</div>
            </div>
        </header>
      
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h1 class="section-heading text-uppercase">Listes des Propositions</h1>
                    <h3 class="section-subheading text-muted"></h3>
                </div>
     <table class="tab">   
	<thead>
		<tr>
			<th><h1>nombre de personne inscrit</h1></th>
			<th><h1>nombre d'echange effectuer </h1></th>
		</tr>
	</thead>
	<tbody>
            <tr>
			<td style="color:white;"><?php echo $inscrit;  ?></td>
			<td style="color:white;"><?php echo $echange;  ?></td>
		    </tr>
    
	            </tbody>
                </table>
                </div>
            </div>
        </section>



        <?php $this->load->view('footer'); ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
