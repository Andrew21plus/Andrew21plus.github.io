<!DOCTYPE html>
<html lang="en">

<?php 
    include ('head.php');
    include ('header.php');
?>

<body style="background-image:url('https://lh3.googleusercontent.com/XSDv6XYZ973bdxMBDJ1adLHpSSUv4vsZJaePpms21eZDl-27JIfTHIYXnnudwPfAg_1-59bKAarMhWGNagsTR2Gq0pAWBUw6CwYwH2V0TzDXZT9z1fKvr1vCOrk8nxZ-U7wVfOJq')">
    <br>
    <div class="container">
        <div class="row" style="background-color:white; opacity:0.95">
            <div class="col-md-6">
                <h2>Dirección: Ciudadela Juan Montalvo</h2>
                <p>Teléfonos: (+593) 960517044, (+593) 991735986, (+593) 984330529</p>
                <p>E-mail: andres.lagos@spoch.edu.ec</p>
                <form method="post" action="envia.php">
                    <div class="col-mod-6">
                        <input class="form-control" type="text" placeholder="Nombre" name="nombre" > <br>
                        <input class="form-control" type="text" placeholder="Apellido" name="apellido" > <br>
                    </div>
                    <div class="col-mod-6">
                        <input class="form-control" type="text" placeholder="Teléfono" name="telefono" > <br>
                        <input class="form-control" type="text" placeholder="E-mail" name="email" >
                    </div>
                    <div class="col-mod-12">
                        <br>
                        <textarea name="Mensaje" id="" cols="60" rows="10" placeholder="Escribe aqui tu problema"></textarea>
                        <input type="submit">
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <img src="images/logo.png" alt="" width="100%">
            </div>
        </div>
    </div>
    <br>
</body>

<?php include ('footer.php')?>
</html>