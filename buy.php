<?php include 'header.php';?>
<?php
include 'entity/Drymoss.php'; // Asegúrate de que contiene el array $productos
include 'entity/Livemoss.php';

$producto = null;

if (isset($_POST['id'])) {
   $id = $_POST['id'];
   foreach ($productos as $p) {
      if ($p->id == $id) {
         $producto = $p;
         break;
      }
   }

} else {
   echo "ID de producto no especificado.";
}

if (isset($_POST['id'])) {
   $id = $_POST['id'];
   foreach ($livemoss as $p) {
      if ($p->id == $id) {
         $producto = $p;
         break;
      }
   }

} else {
   echo "ID de producto no especificado.";
}








if(isset($_POST['cantidad'])){
   $can = $_POST['cantidad'];
}else{
   echo "Cantidad no valida";
}

$preTot = $can * $producto->descuento(50);
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
   <script 
   src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.9.2/dist/confetti.browser.min.js">
   </script>
 <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Tiempo en minutos
            const timeoutMinutes = 20;
            const timeoutMilliseconds = timeoutMinutes * 60 * 1000; // Convertir minutos a milisegundos

            // Función para redirigir al usuario y limpiar los datos
            function redirectToPreviousPage() {
                // Eliminar datos del localStorage (si es que usas localStorage)
                localStorage.removeItem('formData');

                // Redirigir a la página anterior
                window.history.back();
            }

            // Configurar el temporizador
            setTimeout(redirectToPreviousPage, timeoutMilliseconds);

            // Opcional: Mostrar un temporizador en la página
            const timerDisplay = document.getElementById('timer');
            if (timerDisplay) {
                let timeLeft = timeoutMilliseconds;
                const updateTimer = () => {
                    const minutes = Math.floor(timeLeft / 60000);
                    const seconds = Math.floor((timeLeft % 60000) / 1000);
                    timerDisplay.textContent = `${minutes}m ${seconds}s`;
                    timeLeft -= 1000;
                    if (timeLeft < 0) {
                        clearInterval(timerInterval);
                    }
                };

                updateTimer(); // Inicializar el temporizador
                const timerInterval = setInterval(updateTimer, 1000); // Actualizar cada segundo
            }
        });
    </script>
<style>
.ticket-system > h1,.h1,h2,.h2,h3,.h3,h4,.h4,h5,.h5,h6,.h6
{
   color:black !important;
}
#download{
font-size:1.8em;
padding:10px;
background: var(--primary);
color: white;
border-radius:15px;
}
#download:hover{
background: #929302;

}
</style>

<div style="margin:10px 0px" 
class="d-flex w-100 align-items-center justify-content-center g-9" >
<span style="color:#7B311E" class="material-symbols-outlined">
timer
</span>
<div style="color:#7B311E;font-weight: bold;font-size:2em;
text-align: center;width:fit-content;padding:20px 0" id="timer">
   20m 0s
</div>
</div>
<div class="steps-container">
   <div class="stp active" id="step1-nav">
      <span class="material-symbols-outlined st-icon fill-icon">
         payments
      </span>
   </div>
   <div class="stp pending" id="step2-nav">
      <span class="material-symbols-outlined st-icon ">
         id_card
      </span>
   </div>
   <div class="stp pending" id="step3-nav">
      <span class="material-symbols-outlined st-icon ">
      confirmation_number
      </span> 
   </div>
   <div class="stp pending" id="step4-nav">
      <span class="material-symbols-outlined st-icon ">
         verified
      </span> 
   </div>
</div>

<div class="step-content active" id="step1-content">
    <h2 class="text-center">Selecciona el Método de Pago</h2>
    <form id="payment-form">
         <div class="py-form">
            <label>
                <input type="radio" name="payment" value="yape" required>
                <img class="imgPayment" src="img/icon/Yape-logo.png">
            </label>
            <label>
                <input type="radio" name="payment" value="plin" required> 
                <img class="imgPayment" src="img/icon/Plin-logo.png">
            </label>
            <label>
                <input type="radio" name="payment" value="BCP" required> 
                <img class="imgPayment" src="img/bcp-logo.png">
            </label>
            <label>
                <input type="radio" name="payment" value="BBVA" required> 
                <img class="imgPayment" src="img/bbva-logo.png">
            </label>
            <label>
                <input type="radio" name="payment" value="BancoDeLaNacion" required> 
                <img class="imgPayment" src="img/bn-logo.png">
            </label>
         </div>
         <div class="step-buttons">
            <button class="btn btn-primary" 
            type="button" 
            onclick="nextStep()">
               Siguiente
            </button>
         </div>
    </form>
</div>
<div class="step-content" id="step2-content">
   <h2 class="text-center">Ingresa tus Datos</h2>
   <form id="client-form" onsubmit="return validateAndNextStep(event)">
      <div class="row">
         <div class="col-md-6">
            <div class="mb-3">
               <label name="name"for="inputName" class="form-label">Nombre</label>
               <input name="name" 
               type="text"
               class="form-control" 
               id="inputName" 
               placeholder="Nombre"
               pattern="[A-Za-z\s]{2,50}"
               title="Nombre no valido"
               required
               >
            </div>
         </div>
         <div class="col-md-6">
            <div class="mb-3">
               <label for="inputLastName" class="form-label">Apellido</label>
               <input name="lastname" 
               type="text" 
               class="form-control" 
               id="inputLastName" 
               placeholder="Apellido"
               pattern="[A-Za-z\s]{2,50}"
               title="Apellido no valido"
               required
               >
            </div>
         </div> </div>
      <div class="row">
         <div class="col-md-6">
            <div class="mb-3">
               <label for="inputEmail4" class="form-label">Email</label>
               <input name="email" 
               type="email" 
               class="form-control" 
               id="inputEmail4" 
               placeholder="Email"
               pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}"
               title="PorFavor ingresa un correo valido"
               required
               >
            </div>
         </div>
         <div class="col-md-6">
            <div class="mb-3">
               <label for="inputDocIde" class="form-label">Doc. Identidad</label>
               <input type="text" 
               name="dni" 
               class="form-control" 
               id="inputDocIde" 
               placeholder="DNI"
               pattern="\d{8}"
               title="El documento de identidad debe tener exactamente 8 digitos"
               required
               >
           </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-4">
            <div class="mb-3">
               <label for="inputDepartment" class="form-label">Departamento</label>
               <input type="text" name="department" class="form-control"
               id="inputDepartment"
               placeholder="Lima..."
               pattern="[a-zA-Z]+"
               title="Departamento Invalido"
               required
               >
            </div>
         </div>
         <div class="col-md-4">
           <div class="mb-3">
               <label for="inputProvince" class="form-label">Provincia</label>
               <input type="text" name="province" class="form-control"
               id="inputProvince"
               placeholder="Lima..."
               pattern="[a-zA-Z]+"
               title="Provincia invalida"
               required
               >
           </div>
         </div>
         <div class="col-md-4">
           <div class="mb-3">
               <label for="inputDistrict" class="form-label">Distrito</label>
               <input type="text" name="district" class="form-control"
               id="inputDistrict"
               placeholder="Ate..."
               pattern="[a-zA-Z]+"
               title="Distrito invalido"
               required
               >
           </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6">
            <div class="mb-3">
               <label name="telefono"for="inputfono" class="form-label">Telefono</label>
               <input name="telefono" 
               type="text"
               class="form-control" 
               id="inputfono" 
               placeholder="Telefono"
               pattern="\d{9}"
               title="El Telefono debe tener 9 digitos"
               required
               >
            </div>
         </div>
<div class="col-md-3">
    <div class="mb-3">
        <label for="selectAgencia" class="form-label">Agencia</label>
        <select id="selectAgencia" name="agencia" class="form-control" onchange="toggleOtherField()" required>
            <option value="" selected>Seleccione...</option>
            <option value="shalom">Shalom</option>
            <option value="otro">Otro</option>
        </select>
    </div>
</div> 
<div class="col-md-3">
    
    <div class="mb-3" id="otherAgenciaField" style="display: none;">
        <label for="inputOtherAgencia" class="form-label">Especificar otra agencia</label>
        <input type="text" id="inputOtherAgencia" name="other_agencia" class="form-control" placeholder="Nombre de la agencia">
    </div>
</div>
</div>

      <div class="mb-3">
         <label for="inputAgenciaDir" class="form-label">Lugar de Agencia</label>
         <input type="text" 
         name="dirAgencia" 
         class="form-control" 
         id="inputAgenciaDir" 
         placeholder="1234 Main St"
         pattern="[a-zA-Z0-9. ]+"
         title="La dirección de agencia solo puede contener letras, números, puntos y espacios"   
         required
         >
      </div>
      <div class="mb-3">
         <label for="inputAddress" class="form-label">Address</label>
         <input type="text" 
         name="address" 
         class="form-control" 
         id="inputAddress" 
         placeholder="1234 Main St"
         pattern="[a-zA-Z0-9. ]+"
         title="La dirección solo puede contener letras, números, puntos y espacios"   
         required
         >
      </div>
      <div class="mb-3">
         <label for="inputAddress2" class="form-label">Address 2</label>
         <input type="text" 
         name="address2"
         class="form-control" 
         id="inputAddress2" placeholder="Apartment, studio, or floor"
         pattern="[a-zA-Z0-9. ]+"
         title="La dirección solo puede contener letras, números, puntos y espacios"
         >
      </div>
      <div class="step-buttons">
         <button class="btn btn-secondary" 
         type="button" 
         onclick="prevStep()">
            Anterior
         </button>
         <button class="btn btn-primary"
         id="btn-registra"
         type="submit" 
         >
            Siguiente
         </button>
      </div>
   </form>
</div>

<div class="step-content" id="step3-content">
   <div class="confirmation-message" id="confirmation-message">
      <h1>¿Estás seguro de generar una solicitud de compra?</h1>
      <div class="confirmation-buttons">
         <button type="button" 
         class="btn btn-success" 
         onclick="submitOrder()">
            Sí
         </button>
         <button type="button" 
         class="btn btn-secondary" 
         onclick="prevStep()">
            No
         </button>
      </div>
   </div>
</div>
<div class="step-content" id="step4-content">
   <h2 class="text-center">Resumen de la Compra</h2>
   <div id="summary">
      <!--Autogenerado-->
   </div>
</div>


<script>
//Variables
let currentStep = 1;
let agenciaElegida='';

//Funciones



function randomWord(){
   fetch('https://random-word-api.herokuapp.com/word?number=2')
   .then(response => response.json())
   .then(data => {
      const randomName = `${data[0]}-${data[1]}`;
      document.getElementById('randomWord').innerText = randomName;
   })
   .catch(error => {
      document.getElementById('randomWord').innerText = 'Error al cargar las palabras';
      console.error('Error al obtener las palabras:', error);
   });
}

function showStep(step){
   document.querySelectorAll('.st-icon').forEach((element, index)=>{
      element.className='material-symbols-outlined st-icon ' +
      (index + 1 === step ? 'fill-icon' : (index + 1 < step ? 'fill-icon' : 'pending'));
   });

   document.querySelectorAll('.step-content').forEach((element, index) => {
      element.className = 'step-content ' + (index + 1 === step ? 'active' : '');
   });
   }

function nextStep() {
   if (currentStep === 1) {
      if (document.querySelector('input[name="payment"]:checked')) {
         currentStep++;
         showStep(currentStep);
      }
      else{
         alert('Selecciona un método de pago.');
      }
   }
   else if (currentStep === 2) {
      document.getElementById('confirmation-message').style.display = 'flex';
      document.getElementById('confirmation-message').style.justifyContent= 'center';
      document.getElementById('confirmation-message').style.height= '100%';
      currentStep++;
      showStep(currentStep);
   }
}

function prevStep() {
   if (currentStep === 3) {
      document.getElementById('confirmation-message').style.display = 'none';
   }
   currentStep--;
   showStep(currentStep);
}



function confirmOrder() {
   document.getElementById('confirmation-message').style.display = 'block';
}
function submitOrder() {
   let paymentMethod = document.querySelector('input[name="payment"]:checked').value;
   const clientForm = document.getElementById('client-form');
    var select = document.getElementById('selectAgencia').value;
    var otherField = document.getElementById('otherAgenciaField');  
    var agenciaAlterna = document.getElementById('inputOtherAgencia').value;
    
    if(select == 'otro'){
       agenciaElegida = agenciaAlterna; 
    }else{
    agenciaElegida = 'Shalom';
    }
    
    let qrPay = "";
    if (paymentMethod === "yape") {
       qrPay = "img/yape-qr.png";
    } else if (paymentMethod === "plin") {
       qrPay = "img/plin-qr.png";
    }else if (paymentMethod == "BancoDeLaNacion"){
        paymentMethod="Banco de la Nación"
    }
    confetti();
       const summary = `
          <main class="ticket-system">
             <div class="top">
             <h1 class="title">
                Envia este ticket junto con la constancia de tu pago.
             </h1>
             <div class="printer" />
             </div>
             <div class="receipts-wrapper">
                <div id="contenido" class="receipts">
                   <div class="receipt">
                      <div class="route">
                         <div class="item">
                            <span>Producto</span>
                            <h2><?=$producto->nombre?> X<?=$can?> </h2>
                         </div>
                      </div>
                      <div class="route">
                         <div class="item">
                            <span>Metodo de pago</span>
                            <h2>${paymentMethod}</h2>
                         </div>
                         <div class="item">
                            <span>Total a Pagar</span>
                            <h2>S/<?=$preTot?></h2>
                         </div>
                      </div>
                      <div class="details">
                         <div class="item">
                            <span>Nombre</span>
                            <h3>${clientForm.name.value} ${clientForm.lastname.value}</h3>
                         </div>
                         <div class="item">
                            <span>DNI</span>
                            <h3>${clientForm.dni.value}</h3>
                         </div>
                         <div class="item">
                            <span>Telefono</span>
                            <h3>${clientForm.telefono.value}</h3>
                         </div>
                         <div class="item">
                         <span>Direccion</span>
                         <h3>
                            ${clientForm.department.value}/
                            ${clientForm.province.value}/
                            ${clientForm.district.value}
                         </h3>
                         <h6>${clientForm.address.value}</h6>
                         <h6>${clientForm.address2.value}</h6>
                        <span> Agencia</span>
                        <h5>${agenciaElegida} </h5>
                        <h6>${clientForm.dirAgencia.value}</h6>
                         </div>
                         <div class="item">
                            <span>Email</span>
                            <h4>${clientForm.email.value}</h4>
                         </div>
                      </div>
                   </div>
                   <div class="receipt qr-code">
                   <div class="qr-dt-con">
                      <p class="text-center" >Henry Obed Cholan Romero</p>
                      <img class="qr" src="${qrPay}" alt="qrimg">
                      <p class="text-center" >+51 983 929 015</p>
                      </div>
                      <div  class="description">
                         <h4 class="text-center" id="randomWord">Cargando...</h4>
                         <p class="text-center">
                            Has la tranferencia 
                            agregando este codigo como comentario
                         </p>
                      </div>
                   </div>
                </div>
             </div>
            <a id="download">Descargar Ticket</a>
          </main>
       `;
        console.log(document.getElementById('inputOtherAgencia').value)
        console.log(agenciaElegida)
       document.getElementById('summary').innerHTML = summary;
       currentStep++;
       showStep(currentStep);
       randomWord();
        holis();


const xdBCP =`
            <strong>Número de cuenta BCP Soles</strong>
            <h4 class="text-center" id="pyTitle">19132941359098</h4>
            <h6 class="text-center">Henry Obed Cholan Romero </h6>
            <p class="text-center mdk">
                ¡SOLO TRANSFERENCIA DIGITAL!
            </p>
`; 
const xdBBVA =`
            <strong>Número de cuenta BBVA Soles</strong>
            <h4 class="text-center" id="pyTitle">0011-0628-0200241090</h4>
            <h6 class="text-center">Henry Obed Cholan Romero </h6>
            <p class="text-center mdk">
                ¡SOLO TRANSFERENCIA DIGITAL!
            </p>
`; 
const xdBn=`
            <strong>Cuenta de ahorros en Soles Banco de la Nación</strong>
            <h4 class="text-center" id="pyTitle">04-487-189109</h4>
            <h6 class="text-center">Henry Obed Cholan Romero </h6>
            <p class="text-center mdk">
                Deposito en agente
            </p>
`; 

    if (paymentMethod === "yape") {
        document.querySelector('.description').style.display = "block";
    } else if (paymentMethod === "plin") {
        document.querySelector('.description').style.display = "none";
    }else if(paymentMethod === "BCP"){
        document.querySelector('.qr-dt-con').style.display = "none";
        document.querySelector('.description').innerHTML=xdBCP;
    }else if(paymentMethod === "BBVA"){
        document.querySelector('.qr-dt-con').style.display = "none";
        document.querySelector('.description').innerHTML=xdBBVA;
    }else{ 
        document.querySelector('.qr-dt-con').style.display = "none";
        document.querySelector('.description').innerHTML=xdBn;
    }

}

//validar documentos
document.addEventListener('DOMContentLoaded', function () {
   const form = document.getElementById('client-form');
   const inputs = form.querySelectorAll('input');

   inputs.forEach(input => {
      input.addEventListener('input', function () {
         if (input.validity.valueMissing) {
            input.setCustomValidity('Por favor, completa este campo.');
         } else if (input.validity.patternMismatch) {
            input.setCustomValidity(input.title);  // Utiliza el mensaje en el 
            //atributo title
         } else {
            input.setCustomValidity('');  // Restablece el mensaje personalizado 
            //si todo está bien
         }
      });
   });

   form.addEventListener('submit', function (event) {
      if (!form.checkValidity()) {
         event.preventDefault();  // Prevenir el envío si hay errores
      }
   });
});

function toggleOtherField() {
    var select = document.getElementById('selectAgencia');
    var otherField = document.getElementById('otherAgenciaField');

  // Hide "Seleccione..." option when any other option is selected
    var selectOption = select.querySelector('option[value=""]');
    if (select.value !== "" && selectOption) {
        selectOption.style.display = 'none';
    } else if (select.value === "") {
        // Show "Seleccione..." option if it is selected
        selectOption.style.display = 'block';
    }
    
    if (select.value !== 'shalom') {
        otherField.style.display = 'block';
    } else {
        otherField.style.display = 'none';
    }
}




function validateAndNextStep(event) {
      event.preventDefault();
      const form = document.getElementById('client-form');
      if (form.checkValidity()) {
         nextStep();
      } else {
         form.reportValidity();
      }
      return false;
   }

    //Descargar Ticket
    function holis(){    
        document.getElementById("download").addEventListener("click", function() {
        let element = document.getElementById("contenido");

        html2canvas(element, {
          useCORS: true, // Si hay imágenes externas, habilitar CORS
          scrollY: 0     // Asegurarse de que capture todo el contenido
        }).then(function(canvas) {
          var imageData = canvas.toDataURL("image/jpeg");

          var link = document.createElement('a');
          link.href = imageData;
          link.download = 'ticket.jpg'; // Nombre del archivo de imagen
          link.click(); // Iniciamos la descarga
        });
        });
    }


//Llamadas
showStep(currentStep);
randomWord();
</script>
<script>
</script>


<?php include 'footer.php';?>
