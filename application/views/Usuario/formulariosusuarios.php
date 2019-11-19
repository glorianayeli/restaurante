<h2>Agregar usuario</h2>
<p>Llene todos los campos</p>
<!--Formulario-->
<div class="container">
    <form class="" action="<?php echo(base_url('AdminUsuarios/insertarDatos'))?>" method="POST">
            <div class="form-group col-md-6">
                <label for="inputPassword4">Nombre</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="" name="nombre">
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="" name="correo">
            </div>
             <div class="form-group col-md-6">
                <label for="inputEmail4">Confirmar correo</label>
                <input type="email" class="form-control" id="inputEmail4" placeholder="" name="correoconfirm">
            </div>
            <!--<div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">contraseña anterior</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="contraseñaanterior">
            </div>-->
            <div class="form-group col-md-6">
                <label for="inputPassword4">Contraseña</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="" name="contraseña">
            </div>
            <div>
                <div class="form-group col-md-6">
                <label for="inputPassword4">Confirmar contraseña</label>
                <input type="password" class="form-control" id="inputPassword4" placeholder="" name="contraseñaconfirm">
            </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>