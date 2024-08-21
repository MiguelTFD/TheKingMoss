<footer class="footerTp">
    <!--<div class="footerLf">
        <h2>Topics</h2>
    </div>-->
    <div class="footerRt" id="contact">
        <h2>Contact</h2>
    </div>
</footer>
</body>
</html>
<script>
    class App {
        constructor() {
            this.track = document.querySelector('#track');
            this.items = Array.from(this.track.querySelectorAll('.carrusel'));
            this.itemWidth = this.items[0].offsetWidth;
            this.itemCount = this.items.length;
            this.setupCarousel();
        }

        setupCarousel() {
            // Clonar elementos para el bucle infinito
            this.cloneItems();
            // Posicionar el carrusel en el medio
            this.track.style.left = `-${this.itemWidth * this.itemCount}px`;
        }

        cloneItems() {
            const clones = this.items.map(item => item.cloneNode(true));
            const startClones = this.items.map(item => item.cloneNode(true));

            // Agregar clones al final y al inicio
            clones.forEach(clone => this.track.appendChild(clone));
            startClones.reverse().forEach(clone => this.track.insertBefore(clone, this.track.firstChild));

            // Ajustar el ancho del track
            this.track.style.width = `${this.itemWidth * (this.itemCount * 3)}px`;
        }

        processingButton(event) {
            const btn = event.currentTarget;
            const direction = btn.dataset.button === "button-prev" ? 1 : -1;
            this.moveCarousel(direction);
        }

        moveCarousel(direction) {
            const currentLeft = parseFloat(this.track.style.left) || 0;
            const newLeft = currentLeft + (direction * this.itemWidth);

            // Aplicar el movimiento
            this.track.style.transition = 'left 0.5s ease';
            this.track.style.left = `${newLeft}px`;

            // Ajuste del bucle
            this.track.addEventListener('transitionend', () => {
                if (newLeft >= 0) {
                    // Si llegamos al principio
                    this.track.style.transition = 'none';
                    this.track.style.left = `-${this.itemWidth * this.itemCount}px`;
                } else if (newLeft <= -(this.itemWidth * (this.itemCount * 2))) {
                    // Si llegamos al final
                    this.track.style.transition = 'none';
                    this.track.style.left = `-${this.itemWidth * this.itemCount}px`;
                }
            }, { once: true });
        }
    }

    window.onload = () => {
        const app = new App();
        document.querySelectorAll('.carrusel-arrow').forEach(button => {
            button.addEventListener('click', app.processingButton.bind(app));
        });
    }

</script>