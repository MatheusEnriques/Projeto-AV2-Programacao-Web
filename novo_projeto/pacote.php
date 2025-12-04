<?php
// pacote.php - Página de Pacotes
?>

<div class="container py-5">
    <h1 class="text-center mb-5" style="color: #2c3e50;">📦 Nossos Pacotes</h1>
    
    <div class="row justify-content-center">
        <!-- Pacote Básico -->
        <div class="col-md-4 mb-4">
            <div class="card text-center shadow-lg h-100" style="border-top: 5px solid #3498db;">
                <div class="card-body p-4">
                    <div style="font-size: 3rem; color: #3498db;">📸</div>
                    <h3 class="mt-3" style="color: #3498db;">BÁSICO</h3>
                    <h2 class="my-3">R$ 799</h2>
                    
                    <ul class="list-unstyled text-start mb-4">
                        <li class="mb-2">✓ 2 horas de ensaio</li>
                        <li class="mb-2">✓ 50 fotos editadas</li>
                        <li class="mb-2">✓ 1 localização</li>
                        <li class="mb-2">✓ Entrega em 7 dias</li>
                        <li class="mb-2">✓ Download online</li>
                    </ul>
                    
                    <a href="?pg=faleconosco" class="btn btn-lg w-100" 
                       style="background: #3498db; color: white;">
                        Contratar
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Pacote Profissional -->
        <div class="col-md-4 mb-4">
            <div class="card text-center shadow-lg h-100" style="border-top: 5px solid #e74c3c;">
                <div class="card-body p-4">
                    <div style="font-size: 3rem; color: #e74c3c;">⭐</div>
                    <h3 class="mt-3" style="color: #e74c3c;">PROFISSIONAL</h3>
                    <h2 class="my-3">R$ 1.499</h2>
                    
                    <ul class="list-unstyled text-start mb-4">
                        <li class="mb-2">✓ 4 horas de ensaio</li>
                        <li class="mb-2">✓ 100 fotos editadas</li>
                        <li class="mb-2">✓ 2 localizações</li>
                        <li class="mb-2">✓ 3 mudas de roupa</li>
                        <li class="mb-2">✓ Álbum digital</li>
                        <li class="mb-2">✓ Entrega em 5 dias</li>
                    </ul>
                    
                    <a href="?pg=faleconosco" class="btn btn-lg w-100" 
                       style="background: #e74c3c; color: white;">
                        Contratar
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Pacote Premium -->
        <div class="col-md-4 mb-4">
            <div class="card text-center shadow-lg h-100" style="border-top: 5px solid #2c3e50;">
                <div class="card-body p-4">
                    <div style="font-size: 3rem; color: #2c3e50;">👑</div>
                    <h3 class="mt-3" style="color: #2c3e50;">PREMIUM</h3>
                    <h2 class="my-3">R$ 2.299</h2>
                    
                    <ul class="list-unstyled text-start mb-4">
                        <li class="mb-2">✓ 6 horas de ensaio</li>
                        <li class="mb-2">✓ 150 fotos editadas</li>
                        <li class="mb-2">✓ 3 localizações</li>
                        <li class="mb-2">✓ 5 mudas de roupa</li>
                        <li class="mb-2">✓ Álbum físico</li>
                        <li class="mb-2">✓ Fotos impressas</li>
                        <li class="mb-2">✓ Prioridade na entrega</li>
                    </ul>
                    
                    <a href="?pg=faleconosco" class="btn btn-lg w-100" 
                       style="background: #2c3e50; color: white;">
                        Contratar
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Pacotes Especiais -->
    <div class="row mt-5">
        <div class="col-12">
            <h3 class="text-center mb-4" style="color: #2c3e50;">🎯 Pacotes Especiais</h3>
            
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="p-3 rounded" style="background: #f8f9fa; border-left: 4px solid #9b59b6;">
                        <h5 style="color: #9b59b6;">CASAMENTO</h5>
                        <p class="mb-2"><strong>A partir de R$ 3.999</strong></p>
                        <p class="small">Cobertura completa do seu dia especial</p>
                    </div>
                </div>
                
                <div class="col-md-4 mb-3">
                    <div class="p-3 rounded" style="background: #f8f9fa; border-left: 4px solid #1abc9c;">
                        <h5 style="color: #1abc9c;">GESTANTE</h5>
                        <p class="mb-2"><strong>R$ 1.299</strong></p>
                        <p class="small">Eternize esse momento mágico</p>
                    </div>
                </div>
                
                <div class="col-md-4 mb-3">
                    <div class="p-3 rounded" style="background: #f8f9fa; border-left: 4px solid #f1c40f;">
                        <h5 style="color: #f1c40f;">NEWBORN</h5>
                        <p class="mb-2"><strong>R$ 899</strong></p>
                        <p class="small">Os primeiros dias do seu bebê</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- CTA Final -->
    <div class="text-center mt-5">
        <div class="p-4 rounded" style="background: #2c3e50; color: white;">
            <h4 class="mb-3">Não encontrou o que precisa?</h4>
            <p class="mb-4">Entre em contato para um orçamento personalizado!</p>
            <a href="?pg=faleconosco" class="btn btn-light btn-lg">
                📞 Fale Conosco
            </a>
        </div>
    </div>
</div>

<style>
    .card {
        border-radius: 10px;
        transition: transform 0.3s;
    }
    .card:hover {
        transform: translateY(-5px);
    }
</style>