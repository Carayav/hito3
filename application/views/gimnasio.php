<?php
if(!$this->session->userdata('logueado')){
    redirect('');

};
?>

<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="<?php echo base_url();?>assets/css/freelancer.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url();?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
</head>
<body>
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#page-top">Arriendos Recoleta</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#canchas">Canchas</a>
                </li>

                <!-- poner la condicion de session para modificar el menu -->

                <?php if($this->session->userdata('logueado')){?>

                    <li>
                        <a href="#"><?php echo $this->session->userdata('nombre');?></a>
                    </li>

                    <li>

                        <a href="<?php echo base_url();?>index.php/logout">Cerrar Sesion</a>

                    </li>

                <?php }
                else {
                    ?>
                    <li>
                        <a href="<?php echo base_url();?>index.php/login">Login</a>
                    </li>
                <?php } ?>


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<section id="canchas">
    <div class="container">
        <div class="row">
            <?php
                echo "<div class='row'><a href='".base_url()."index.php/gimnasios/ver_info/".$gimnasio[0]->id_gym."'>";
                echo "<h2>".$gimnasio[0]->Nombre."</h2>";
                echo "</a><div class='col-lg-3'>";
                $img_tag  = "<img class=\"img-responsive hidden-xs\" src=\"".base_url()."/assets/images/";
                $img_tag .= $gimnasio[0]->Imagen;
                $img_tag .= "\" width='300px' height='300px'alt=\"\"/>";
                echo $img_tag;
                echo "</div>";
                echo "<div class='col-lg-9'>";
                echo "<p>".$gimnasio[0]->Descripcion."</p>";
                echo "</div>";
                echo "</div>";
             ?>
        </div>
        <div class="row">
            <div class="col-lg-9 table-responsive">
                <h3>Canchas</h3>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Precio</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php  foreach ($canchas as $cancha) {?>
                    <tr>
                        <td><?php echo $cancha->Nombre ?></td>
                        <td><?php echo $cancha->Precio ?></td>
                    </tr>
                    <?php  } ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
        <div class="container">




        </div>
</section>



<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>