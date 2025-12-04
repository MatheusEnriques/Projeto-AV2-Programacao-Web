<h2 class="mb-4">Faça sua Reserva</h2>

<?php if(isset($_SESSION['erro_reserva'])): ?>
    <div class="alert alert-danger">
        <?php echo $_SESSION['erro_reserva']; unset($_SESSION['erro_reserva']); ?>
    </div>
<?php endif; ?>

<?php if(isset($_SESSION['sucesso_reserva'])): ?>
    <div class="alert alert-success">
        <?php echo $_SESSION['sucesso_reserva']; unset($_SESSION['sucesso_reserva']); ?>
    </div>
<?php endif; ?>

<form action="dados.php" method="POST" class="needs-validation" novalidate>
    <div class="mb-3">
        <label for="nome" class="form-label">Nome Completo *</label>
        <input type="text" class="form-control" id="nome" name="cliente" 
               placeholder="Digite seu nome completo" required>
        <div class="invalid-feedback">
            Por favor, informe seu nome.
        </div>
    </div>
    
    <div class="mb-3">
        <label for="email" class="form-label">Email *</label>
        <input type="email" class="form-control" id="email" name="email" 
               placeholder="seu@email.com" required>
        <div class="invalid-feedback">
            Por favor, informe um email válido.
        </div>
    </div>
    
    <div class="mb-3">
        <label for="telefone" class="form-label">Telefone/WhatsApp</label>
        <input type="tel" class="form-control" id="telefone" name="telefone" 
               placeholder="(83) 99826-7756">
    </div>
    
    <div class="row">
        <div class="col-md-6 mb-3">
            <label for="data" class="form-label">Data Sugerida *</label>
            <input type="date" class="form-control" id="data" name="data" required>
            <div class="invalid-feedback">
                Por favor, selecione uma data.
            </div>
        </div>
        
        <div class="col-md-6 mb-3">
            <label for="hora" class="form-label">Horário Sugerido *</label>
            <input type="time" class="form-control" id="hora" name="hora" required>
            <div class="invalid-feedback">
                Por favor, selecione um horário.
            </div>
        </div>
    </div>
    
    <div class="mb-3">
        <small class="text-muted">* Campos obrigatórios</small>
    </div>
    
    <button type="submit" class="btn btn-primary btn-lg w-100">
        <i class="bi bi-send"></i> Enviar Reserva
    </button>
</form>

<script>
// Validação do formulário
(function() {
    'use strict';
    var forms = document.querySelectorAll('.needs-validation');
    Array.prototype.slice.call(forms).forEach(function(form) {
        form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
                event.preventDefault();
                event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
    });
})();
</script>