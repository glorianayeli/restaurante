<div class="">
<div class="container">
  <div class="row">
    <!--Primer from -->
    <div class="col-6 mx-auto">
    <h1>Editar Platillo</h1>
    <p class="mb-5">Llene toda la información que se solicita</p>
    <h2>Datos del platillo</h2>
    <!--Inicia form-->
  <form class="" action="<?php echo(base_url('Platillos/guardarPlatillo'))?>" method="POST">
        <div class="form-group">
          <input type="hidden" class="form-control" name="pa_id" placeholder="" value="<?php echo $data['pa_id'] ?>">
        </div>
        <div class="form-group">
          <label for="">Platillo</label>
          <input type="text" class="form-control" name="pa_nombre" placeholder="" value="<?php echo $data['pa_nombre'] ?>">
        </div>
        <div class="form-group">
          <label for="">Precio</label>
          <input type="number" class="form-control col-4" name="pa_precio" placeholder="" value="<?php echo $data['pa_precio'] ?>">
        </div>
        <div class="form-group">
          <label for="">Tipo de comida</label>
          <select class="form-control" name="pa_id_tipo_comida">
             <option selected><?php echo $data['pa_id_tipo_comida'] ?></option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Descripción</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" name="pa_descripcion" rows="6">
              <?php echo $data['pa_descripcion'] ?>
          </textarea>
        </div>
        <div class="d-flex flex-row-reverse bd-highlight">
                <button class="btn btn-primary btn-lg btn-block col-lg-4 mb-4" type="submit">Guardar</button>
        </div>
  </form>
</div>
</div>