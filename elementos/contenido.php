<?php
// Estructura asociativa: producto => precio
$productos = [
  "Pan de Camas"        => 1.20,
  "Aceitunas aliñadas"  => 2.50,
  "Tortas de aceite"    => 3.00,
  "Zumo de piña"        => 2.70
];

?>

<h2 class="text-success text-center mt-4">Productos locales de Camas</h2>

<table class="table table-bordered table-striped w-75 mx-auto mt-4 text-center align-middle">
  <thead class="table-primary">
    <tr>
      <th>Producto</th>
      <th>Precio (€)</th>
    </tr>
  </thead>
  <tbody>
      <?php for ($i = 0; $i < count($productos); $i++){
        $nombre = array_keys($productos);
        $precio = array_values($productos);?>
      <tr>
        <td><?= htmlspecialchars($nombre[$i]) ?></td>
        <td><?= number_format($precio[$i], 2, ',', '.') ?></td>
      </tr>
    <?php } ?>
  </tbody>
</table>
