<?php include 'header.php';?>
<?php
include 'entity/Drymoss.php'; // Asegúrate de que contiene el array $productos

if (isset($_POST['id'])) {
   $id = $_POST['id'];

   $producto = null;
   foreach ($producto as $p) {
      if ($p->id == $id) {
         $producto = $p;
         break;
      }
   }

   if ($producto) {
      echo ".";
   } else {
      echo "Producto no encontrado.";
   }
} else {
   echo "ID de producto no especificado.";
}
?>
<div class="container">
   <div class="row">
      <div class="col-md-6">
         <div class="p-3 ">
            <img style="width: 100%;" 
               src="<?= htmlspecialchars($producto->URL_IMG); ?>" 
               alt="img" draggable="false"
            >
         </div>
      </div>
      <div class="col-md-6">
         <div class="p-3 ">
         <h2> <?= htmlspecialchars($producto->nombre);?></h2>
         <p style="color:#C4B400">
            Products/<?= htmlspecialchars($producto->tipo)?>.
         </p>
            <div class="d-flex align-items-center gap-3 m-1">
               <h5 style="color:gray;text-decoration: line-through;">
                  S/<?=htmlspecialchars($producto->precio)?>
               </h5>
               <h3 style="color:#7B311E;">
                  S/<?=htmlspecialchars($producto->descuento(50))?>
               </h3> 
            </div> 
         </div>
         <!--ax-->
         <div class="d-flex align-items-center">
            <div style="width: 90%;" class="d-flex flex-column align-items-center">
                  <form action="buy.php" method="post">
                     <button class="btn " type="button" onclick="increment()">+</button>
                     <input id="cantidad" 
                      type="number" 
                      class="form-control text-center my-1" 
                      name="cantidad" 
                      value="1" 
                      min="1" 
                      step="1" 
                      style="width: 40px;"
                     >
                     <button class="btn " type="button" onclick="decrement()">-</button>
                     <input type="hidden" name="id" 
                     value="<?= $producto->id; ?>">
                        <button type="submit" 
                        class="btn btn-primary btn-ps-cp">
                          Comprar 
                        </button>
                  </form>
            </div>
               <div class="dv-btn-ps">
               </div>
         </div>
      </div>
   </div>

   <hr>
   <h4>Descripcion</h4>
   <p><?=htmlspecialchars($producto->descripcion)?></p>
   <h4>Medidas</h4>
   <p><?=htmlspecialchars($producto->medidas)?> </p>
   <h4>Peso</h4>
   <p><?=htmlspecialchars($producto->peso)?> </p>
</div>

<style>
input[type="number"] {
    -moz-appearance: textfield; /* Ocultar las flechas en Firefox */
}

input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none; /* Ocultar las flechas en Chrome */
}
.input-group{
width: 100px !important;
}
</style>



<?php include 'footer.php';?>

<script>
function increment() {
    var cantidad = document.getElementById("cantidad");
    cantidad.stepUp();  // Incrementar el valor
}

function decrement() {
    var cantidad = document.getElementById("cantidad");
    cantidad.stepDown();  // Decrementar el valor
}
</script>
