<div class="container">
  <div class="row">
    <!--Primer from -->
    <div class="col">
    <h1>Crear Platillo</h1>
    <p class="mb-5">Llene toda la información que se solicita</p>
    <h2>Datos del platillo</h2>
    <!--Inicia form-->
      <form>
        <div class="form-group">
          <label for="">Platillo</label>
          <input type="text" class="form-control" id="" placeholder="">
        </div>
        <div class="form-group">
          <label for="">Precio</label>
          <input type="number" class="form-control col-4" id="" placeholder="">
        </div>
        <div class="form-group">
          <label for="">Tipo de comida</label>
          <select class="form-control col-6" id="">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Descripción</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
        </div>
      </form>
    </div>
    <!--Form for ingredientes-->
    <div class="col">
      <h2 class="mb-5">Ingredientes</h2>
      <form>
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <label for="">Tipo de comida</label>
              <select class="form-control" id="">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="">Precio</label>
              <input type="number" class="form-control" id="" placeholder="">
            </div>
          </div>
      </form>
      <button type="button" class="btn btn-outline-primary float-right mt-4 mb-3">Agregar</button>
    </div>
    <!--Table-->
    <table class="table table-bordered">
      <thead>
        <tr>
          <th scope="col">Ingrediente</th>
          <th scope="col">Cantidad</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Papa</td>
          <td>2</td>
          <td>
            <button type="button" class="btn btn-primary btn-sm">&#x270D;</button>
            <button type="button" class="btn btn-danger btn-sm">&#x2716;</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>