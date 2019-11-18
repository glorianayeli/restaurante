<button type="button" class="btn btn-secondary float-right mt-2">Nuevo</button>
<h1 class="mb-5">Usuarios</h1>  
<!--Table-->
<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Correo electrónico</th>
      <th scope="col">Nombre</th>
      <th scope="col">Estatus</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  <?php
    foreach ($consulta->result() as $fila){
  ?>
      <tr>
      <th scope="row"><?php echo $fila->us_id ?></th>
      <td><?php echo $fila->us_correo_electronico ?></td>
      <td><?php echo $fila->us_nombre ?></td>
      <td><?php echo $fila->us_status ?></td>
      <td>
        <button type="button" class="btn btn-primary btn-sm">&#x270D;</button>
        <button type="button" class="btn btn-success btn-sm">&#x02713;</button>  
        <button type="button" class="btn btn-danger btn-sm">&#x2716;</button>
      </td>
    </tr>
  <?php
    }
  ?>
  </tbody>
</table>
<!--Pagiación-->
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>