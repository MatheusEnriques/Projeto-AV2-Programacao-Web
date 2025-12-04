<h3>Fale Conosco</h3>
<form action="processa_contato.php" method="POST">
    <div class="mb-3 mt-3">
        <label for="email_input" class="form-label">Seu Email:</label>
        <p class="text-muted">Nosso Email de Contato: jessicaferreirafotografiaa@gmail.com</p>
        <input type="email" class="form-control" id="email_input" placeholder="Digite seu email" name="email">
    </div>
    <div class="mb-3">
        <label for="nome_input" class="form-label">Seu Nome:</label>
        <p class="text-muted">Seu Contato: Jessica Ferreira</p>
        <input type="text" class="form-control" id="nome_input" placeholder="Seu nome" name="nome">
    </div>
    <div class="mb-3">
        <label for="mensagem_input" class="form-label">Mensagem:</label>
        <p class="text-muted">Envie uma mensagem indicando o ensaio desejado, informe a data e logo entraremos em contato para informar a disponibilidade.</p>
        <textarea class="form-control" id="mensagem_input" placeholder="Mensagem" name="mensagem"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>