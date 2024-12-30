<style>
        .video-overlay {
            display: none;
            position: absolute;
            z-index: 1000;
        }
        .video-hover {
            width: 100%;
            height: auto;
            display: none;
        }
        .btn.saiba-mais {
            display: block;
            margin-top: 10px;
            text-align: center;
            background-color: rgb(17, 255, 0);
            color: rgb(0, 0, 0);
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            border: 1px solid #ccc;
        }
        .new-banner {
            width: 100%;
            height: 500px;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }
        .titulo-galeria {
            margin-top: 0px;
            text-align: center;
            color: rgb(0, 0, 0);
        }
        .zoom-effect {
            width: 300px;
        }
        .footer {
            background-color: #282c34;
            color: white;
            padding: 20px 0;
            text-align: center;
            margin-top: 50px;
        }
        .footer-content {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .payment-icon {
            width: 30px;
            height: 30px;
            margin: 5px;
            transition: transform 0.3s;
            cursor: pointer;
        }
        .payment-icon:hover {
            transform: scale(1.1);
        }
        .social-media a {
            margin: 0 10px;
            transition: transform 0.3s;
        }
        .social-media a:hover {
            transform: scale(1.2);
        }
    </style>
    
    
    <footer class="footer" style="background-color: #282c34; color: white; padding: 20px 0; text-align: center; margin-top: 50px;">
        <div class="footer-content" style="display: flex; justify-content: space-around; flex-wrap: wrap;">
            <div class="about-us" style="margin-bottom: 20px; flex: 1; min-width: 200px; text-align: center;">
                <h2 style="font-size: 20px; margin-bottom: 10px; color: rgb(255, 215, 0);">QUEM SOMOS</h2>
                <p style="font-size: 14px;">Somos uma agência de turismo dedicada a proporcionar experiências inesquecíveis. Estamos comprometidos em realizar seus sonhos.</p>
                <div class="social-media" style="margin-top: 10px; text-align: center;">
                    <a href="https://wa.me/5551982115653" target="_blank" style="margin: 0 10px;">
                        <i class="fab fa-whatsapp fa-2x" aria-hidden="true" style="color: #25D366;"></i>
                    </a>
                    <a href="https://www.instagram.com/sandrobenturismo/" target="_blank" style="margin: 0 10px;">
                        <i class="fab fa-instagram fa-2x" aria-hidden="true" style="color: #E1306C;"></i>
                    </a>
                    <a href="https://www.facebook.com/sandrobenturismo" target="_blank" style="margin: 0 10px;">
                        <i class="fab fa-facebook fa-2x" aria-hidden="true" style="color: #1877F2;"></i>
                    </a>
                </div>
            </div>
            <div class="travel-packages" style="margin-bottom: 20px; flex: 1; min-width: 200px; text-align: center;">
                <h2 style="font-size: 20px; margin-bottom: 10px; color: rgb(255, 215, 0);">NOSSAS VIAGENS</h2>
                <p style="font-size: 16px;">Viagens Nacionais</p>
                <p style="font-size: 16px;">Viagens Internacionais</p>
            </div>
            <div class="payment-methods" style="margin-bottom: 20px; flex: 1; min-width: 200px; text-align: center;">
                <div class="payment-container" style="max-width: 600px; margin: 0 auto;">
                    <h2 style="font-size: 20px; margin-bottom: 10px; color: rgb(255, 215, 0);">PAGAMENTOS</h2>
                    <div style="display: flex; justify-content: center; flex-wrap: wrap; margin-top: 10px;">
                        <div style="background-color: white; padding: 5px; border-radius: 5px; margin: 5px;">
                            <img src="assets/img/pagamentos/visa.png" alt="Visa" class="payment-icon">
                        </div>
                        <div style="background-color: white; padding: 5px; border-radius: 5px; margin: 5px;">
                            <img src="assets/img/pagamentos/mastercard.webp" alt="MasterCard" class="payment-icon">
                        </div>
                        <div style="background-color: white; padding: 5px; border-radius: 5px; margin: 5px;">
                            <img src="assets/img/pagamentos/boleto.png" alt="Boleto" class="payment-icon">
                        </div>
                        <div style="background-color: white; padding: 5px; border-radius: 5px; margin: 5px;">
                            <img src="assets/img/pagamentos/pix.png" alt="Pix" class="payment-icon">
                        </div>
                        <div style="background-color: white; padding: 5px; border-radius: 5px; margin: 5px;">
                            <img src="assets/img/pagamentos/nubank.svg" alt="NUPay" class="payment-icon">
                        </div>
                    </div>
                    <style>
                        .payment-icon {
                            width: 30px;
                            height: 30px;
                            margin: 5px;
                            transition: transform 0.3s;
                            cursor: pointer;
                        }
                        .payment-icon:hover {
                            transform: scale(1.1);
                        }
                    </style>
                    <div class="installments" style="margin-top: 10px;">
                    </div>
                </div>
            </div>
        </div>
        <p style="font-size: 14px;">&copy; 2023 Sandro Ben Turismo. Todos os direitos reservados DMProjetos.</p>
    </footer>