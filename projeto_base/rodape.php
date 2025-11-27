<?php
$nome = "Jessica Ferreira";
$endereco = "R. Profa. Alice Elisa de Melo, 198 - Mangabeira, João Pessoa - PB, 58057-400";
$telefone = "(83) 99826-7756";
$instagram_url = "https://www.instagram.com/jessicaferreirafotoart/";
$ano_atual = date("Y"); // Obtém o ano atual automaticamente
?>

<footer>
    <div class="container">
        <p>&copy; <?php echo $ano_atual; ?> **Direitos Reservados** | **<?php echo $nome; ?>*Jessica Ferreira Fotografia*</p>
        
        <hr>

        <div class="footer-info">
            <div class="info-section">
                <h4>📍 Localização</h4>
                <address>
                    <?php echo $endereco; ?>
                </address>
            </div>
            
            <div class="info-section">
                <h4>📞 Contato</h4>
                <p>Telefone: **<a href="tel:<?php echo preg_replace('/[^\d]/', '', $telefone); ?>"><?php echo $telefone; ?></a>*(83) 99826-7756*</p>
            </div>

            <div class="info-section">
                <h4>📸 Redes Sociais</h4>
                <p>Instagram: **<a href="<?php echo $instagram_url; ?>" target="_blank">@jessicaferreirafotoart</a>**</p>
            </div>
        </div>
    </div>
</footer>