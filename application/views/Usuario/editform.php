    <div class="col-md-8 order-md-1 container">
        <h4 class="mb-3 mt-4">Editar registro</h4>
        <?php if($registroError = $this->session->flashdata('registroError')):?>
            <div class="alert alert-danger text-center col-4 text-center mx-auto">
                <?php echo $this->session->flashdata('registroError'); ?>
            </div>
        <?php endif; ?>
        <form class="needs-validation col-8 mx-auto" novalidate="" action="<?php echo(base_url('AdminUsuarios/Guardar'))?>" method="POST">  
             <input type="hidden" class="form-control col-8" id="" name="id" value="<?php echo $usuario['us_id']?>">
            <div class="mb-3">
                <label for="email">Correo</label>
                <input type="text" class="form-control col-8" id="" name="correo" value="<?php echo $usuario['us_correo_electronico']?>">
                <div class="invalid-feedback">
                    Por favor ingresa un correo valido.
                </div>
            </div>
            <div class="mb-3">
                <label for="email">Confirmar correo</label>
                <input type="text" class="form-control col-8" id="" name="correoconfirm" value="<?php echo $usuario['us_correo_electronico']?>">
                <div class="invalid-feedback">
                    Por favor ingresa un correo valido.
                </div>
            </div>
            <div class="mb-3">
                <label for="email">Contraseña anterior</label>
                <input type="password" class="form-control col-6" id="" name="lastpass">
                <div class="invalid-feedback">
                    Por favor ingresa un correo valido.
                </div>
            </div>
            <div class="mb-3">
                <label for="email">Contraseña</label>
                <input type="password" class="form-control col-6" id="" name="pass">
                <div class="invalid-feedback">
                    Por favor ingresa un correo valido.
                </div>
            </div>
            <div class="mb-3">
                <label for="email">Confirmar contraseña</label>
                <input type="password" class="form-control col-6" id="" name="passConfirm">
                <div class="invalid-feedback">
                    Por favor ingresa un correo valido.
                </div>
            </div>
            <hr class="mb-4">
            <div class="d-flex flex-row-reverse bd-highlight">
                <button class="btn btn-primary btn-lg btn-block col-lg-4 mb-4" type="submit">Guardar</button>
            </div>
        </form>
    </div>