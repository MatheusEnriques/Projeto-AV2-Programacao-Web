<?php
$nome = "Jessica Ferreira";
$endereco = "R. Profa. Alice Elisa de Melo, 198 - Mangabeira, João Pessoa - PB, 58057-400";
$telefone = "(83) 99826-7756";
$instagram_url = "https://www.instagram.com/jessicaferreirafotoart/";
$ano_atual = date("Y"); // Obtém o ano atual automaticamente
?>

<footer>
    <div class="container">
        <p>&copy; <?php echo $ano_atual; ?> **Direitos Reservados** | **<?php echo $nome; ?>**</p>
        
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
                <p>Telefone: **<a href="tel:<?php echo preg_replace('/[^\d]/', '', $telefone); ?>"><?php echo $telefone; ?></a>**</p>
            </div>

            <div class="info-section">
                <h4>📸 Redes Sociais</h4>
                <p>Instagram: **<a href="<?php echo $instagram_url; ?>" target="_blank">@jessicaferreirafotoart</a>**</p>
            </div>
        </div>
    </div>
</footer>

<style>
    footer {
        background-color: #333; /* Fundo escuro */
        color: #fff; /* Texto claro */
        padding: 20px 0;
        text-align: center;
        margin-top: 20px; /* Espaço acima do rodapé */
    }
    .container {
        max-width: 960px;
        margin: 0 auto;
        padding: 0 15px;
    }
    .footer-info {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
        text-align: left;
    }
    .info-section {
        margin: 10px 20px;
    }
    .info-section h4 {
        color: #ddd;
        margin-top: 0;
        border-bottom: 1px solid #555;
        padding-bottom: 5px;
    }
    footer a {
        color: #a0cff0; /* Cor do link */
        text-decoration: none;
    }
    footer a:hover {
        text-decoration: underline;
    }
    hr {
        border: 0;
        border-top: 1px solid #555;
        margin: 15px 0;
    }
</style>
