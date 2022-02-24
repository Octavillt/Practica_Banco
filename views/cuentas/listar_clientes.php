<?php 
$list_clientes = Cliente::listarClientes();
/*print_r('<pre>');
print_r($list_clientes);*/
?>

<body>
    <main class="container shadow-none p-3 mb-9 bg-light rounded">
     <div class="row justify-content-center shadow-sm p-1 mb-3 bg-body rounded">
      <div class="col-9 mt-2">
        <form class="d-flex" method="POST" action="<?= base_url ?>?pagina=buscar_clientes">
            <input class="form-control me-2" type="search" placeholder="Buscar Usuario"
            name="buscarp" id="buscarp">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
        <div class="text-center mt-2">
            <h1>Lista de Clientes</h1>
        </div>
        <table class="table table-striped table-hover table-bordered shadow p-3 mb-5 bg-body rounded" >
          <thead>
             <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th scope="col">Dirección</th>
                <th scope="col">No.Cuenta</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($list_clientes as $row): ?>
                <tr>
                    <th><?= $row['id_cliente']; ?></th>
                    <td><?= $row['nombre']; ?></td>
                    <td><?= $row['telefono']; ?></td>
                    <td><?= $row['direccion']; ?></td>
                    <td><?= $row['numcuenta']; ?></td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="<?= base_url ?>?pagina=ver_cliente&id=<?= $row['id_cliente'];?>" title="Ver Cliente"><i class="fas fa-eye fa-xs" ></i></a>
                        <a class="btn btn-warning btn-sm" href="<?= base_url ?>?pagina=editar_cliente&id=<?= $row['id_cliente'];?>" title="Actualizar Cliente"><i class="fas fa-user-edit fa-xs"></i></a>
                        <a class="btn btn-danger btn-sm" href="<?= base_url ?>?pagina=eliminar_cliente&id=<?php
                        echo $row['id_cliente'];  ?>" title="Eliminar Cliente"><i class="fas fa-user-minus fa-sm" ></i></a>
                    </td>
                </tr>

            <?php endforeach; ?>


        </tbody>
    </table>
</div>
</div>
</main>
</body>

