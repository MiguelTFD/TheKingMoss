<?php include 'header.php';?>
<?php
include 'entity/Drymoss.php'; // Asegúrate de que contiene el array $productos

if (isset($_POST['id'])) {
   $id = $_POST['id'];

   $producto = null;
   foreach ($productos as $p) {
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

 <style>
        .steps-container {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .step {
            flex: 1;
            text-align: center;
            padding: 10px;
            border: 2px solid #007bff;
            border-radius: 5px;
            color: #007bff;
            position: relative;
        }
        .step.active {
            background-color: #007bff;
            color: white;
        }
        .step.completed {
            background-color: #28a745;
            color: white;
        }
        .step.pending {
            background-color: #f8f9fa;
            color: #6c757d;
        }
        .step-content {
            display: none;
            margin-top: 20px;
        }
        .step-content.active {
            display: block;
        }
        .step-buttons {
            margin-top: 20px;
            text-align: center;
        }
        .step-buttons button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            margin: 0 10px;
            cursor: pointer;
            border-radius: 5px;
        }
        .step-buttons button:disabled {
            background-color: #ccc;
        }
        .confirmation-message {
            display: none;
            text-align: center;
            margin-top: 20px;
        }
        .confirmation-buttons button {
            margin: 0 10px;
        }
 /* Responsive Styles */
        @media (max-width: 768px) {
            .steps-container {
                flex-direction: column;
            }
            .step {
                margin-bottom: 10px;
            }
            .step-buttons button {
                width: 100%;
                margin: 5px 0;
                padding: 15px;
            }
        }

        @media (max-width: 480px) {
            .step {
                font-size: 14px;
                padding: 8px;
            }
            .step-buttons button {
                padding: 12px;
            }
        }
    </style>


<div class="steps-container">
        <div class="step active" id="step1-nav">Método de Pago</div>
        <div class="step pending" id="step2-nav">Datos del Cliente</div>
        <div class="step pending" id="step3-nav">Confirmación</div>
        <div class="step pending" id="step4-nav">Resumen</div>
    </div>

    <div class="step-content active" id="step1-content">
        <h2>Selecciona el Método de Pago</h2>
        <form id="payment-form">
            <label>
                <input type="radio" name="payment" value="credit_card" required> Tarjeta de Crédito
            </label><br>
            <label>
                <input type="radio" name="payment" value="paypal" required> PayPal
            </label><br>
            <div class="step-buttons">
                <button type="button" onclick="nextStep()">Siguiente</button>
            </div>
        </form>
    </div>

    <div class="step-content" id="step2-content">
        <h2>Ingresa tus Datos</h2>
        <form id="client-form">
            <label>Nombre:
                <input type="text" name="name" required>
            </label><br>
            <label>Correo:
                <input type="email" name="email" required>
            </label><br>
            <label>Dirección:
                <input type="text" name="address" required>
            </label><br>
            <div class="step-buttons">
                <button type="button" onclick="prevStep()">Anterior</button>
                <button type="button" onclick="nextStep()">Siguiente</button>
            </div>
        </form>
    </div>

    <div class="step-content" id="step3-content">
        <div class="confirmation-message" id="confirmation-message">
            <h1>¿Estás seguro de generar una solicitud de compra?</h1>
            <div class="confirmation-buttons">
                <button type="button" onclick="submitOrder()">Sí</button>
                <button type="button" onclick="prevStep()">No</button>
            </div>
        </div>
    </div>

    <div class="step-content" id="step4-content">
        <h2>Resumen de la Compra</h2>
        <div id="summary"></div>
    </div>


<?php include 'footer.php';?>
<script>
        let currentStep = 1;

        function showStep(step) {
            document.querySelectorAll('.step').forEach((element, index) => {
                element.className = 'step ' + (index + 1 === step ? 'active' : (index + 1 < step ? 'completed' : 'pending'));
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
                } else {
                    alert('Selecciona un método de pago.');
                }
            } else if (currentStep === 2) {
                // Ensure confirmation step is activated
                document.getElementById('confirmation-message').style.display = 'block';
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
            const paymentMethod = document.querySelector('input[name="payment"]:checked').value;
            const clientForm = document.getElementById('client-form');
            const summary = `
                <h3>Método de Pago: ${paymentMethod}</h3>
                <h4>Datos del Cliente:</h4>
                <p>Nombre: ${clientForm.name.value}</p>
                <p>Correo: ${clientForm.email.value}</p>
                <p>Dirección: ${clientForm.address.value}</p>
            `;
            document.getElementById('summary').innerHTML = summary;
            currentStep++;
            showStep(currentStep);
        }

        showStep(currentStep);
    </script>
