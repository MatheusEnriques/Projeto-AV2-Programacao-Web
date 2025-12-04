<?php


// Define o array de imagens
$slides = [
    [
        'url' => 'https://storage.alboom.ninja/sites/1132/albuns/432635/fotos-casamento-casal-noivos-regiane-e-fabio-campinas-espaco-quinta-das-brumelias-campinas-sp-fotografo-denis-silveira-fotografia-wedding-photography-182.JPG?t=1656367338',
        'titulo' => 'Casamento',
        'descricao' => '“Quer fotos de casamento que contem a história de vocês?”'
    ],
    [
        'url' => 'https://www.annagiffordfotografia.com.br/wp-content/uploads/2022/07/fotografia-de-parto-em-bh-2-1.jpg',
        'titulo' => 'Parto',
        'descricao' => '“Cada chegada merece ser lembrada com todo amor do mundo.”'
    ],
    [
        'url' => 'https://fotografiamais.com.br/wp-content/uploads/2018/09/fotografia-corporativa-o-que-e.jpg',
        'titulo' => 'Corporativo',
        'descricao' => '“Fotos que elevam sua marca e fortalecem sua autoridade.”'
    ]
];

$total_slides = count($slides);

// Determina slide atual
$current_index = isset($_GET['img']) ? (int)$_GET['img'] % $total_slides : 0;
?>

    // CARROSSEL PRINCIPAL
<div class="carrossel-container">
    <div style="text-align: center; margin-bottom: 15px;">
        <h3 style="color: #2c3e50;">Nossos trabalhos</h3>
        <p style="color: #666;">Imagem <?php echo $current_index + 1; ?> de <?php echo $total_slides; ?></p>
    </div>
    
    <!-- Slide Atual -->
    <div class="slide-atual">
        <img src="<?php echo htmlspecialchars($slides[$current_index]['url']); ?>" 
             alt="<?php echo htmlspecialchars($slides[$current_index]['titulo']); ?>"
             class="slide-imagem">
        
        <div class="slide-info">
            <h4><?php echo htmlspecialchars($slides[$current_index]['titulo']); ?></h4>
            <p><?php echo htmlspecialchars($slides[$current_index]['descricao']); ?></p>
        </div>
    </div>
    
    <!-- Indicadores de slides -->
    <div class="slide-indicadores">
        <?php for ($i = 0; $i < $total_slides; $i++): ?>
            <?php if ($i == $current_index): ?>
                <span class="indicador-ativo">●</span>
            <?php else: ?>
                <a href="?pg=conteudo&img=<?php echo $i; ?>" class="indicador-inativo">○</a>
            <?php endif; ?>
        <?php endfor; ?>
    </div>
    
    <!-- Controles de navegação -->
    <div class="slide-controles">
        <?php
            $prev_index = ($current_index - 1 + $total_slides) % $total_slides;
            $next_index = ($current_index + 1) % $total_slides;
        ?>
        
        <a href="?pg=conteudo&img=<?php echo $prev_index; ?>" class="btn-slide btn-anterior">
            ← Anterior
        </a>
        
        <a href="?pg=conteudo&img=<?php echo $next_index; ?>" class="btn-slide btn-proximo">
            Próximo →
        </a>
    </div>
</div>

<!--SEÇÃO: POR QUE ESCOLHER NOSSOS SERVIÇOS?-->
<div class="secao-destaques mt-5">
    <h3 class="text-center mb-4">Por que escolher a Jessica Ferreira como fotografa?</h3>
    
    <div class="row">
        <div class="col-md-3 text-center mb-4">
            <div class="destaque-item">
                <div class="destaque-icone">
                    <i class="bi bi-award"></i>
                </div>
                <h5>10+ Anos de Experiência</h5>
                <p class="small">Profissionalismo e qualidade garantidos</p>
            </div>
        </div>
        
        <div class="col-md-3 text-center mb-4">
            <div class="destaque-item">
                <div class="destaque-icone">
                    <i class="bi bi-camera"></i>
                </div>
                <h5>Equipamento Profissional</h5>
                <p class="small">Tecnologia de ponta para melhores resultados</p>
            </div>
        </div>
        
        <div class="col-md-3 text-center mb-4">
            <div class="destaque-item">
                <div class="destaque-icone">
                    <i class="bi bi-heart"></i>
                </div>
                <h5>Atendimento Personalizado</h5>
                <p class="small">Cada cliente recebe atenção especial</p>
            </div>
        </div>
        
        <div class="col-md-3 text-center mb-4">
            <div class="destaque-item">
                <div class="destaque-icone">
                    <i class="bi bi-clock-history"></i>
                </div>
                <h5>Entrega Rápida</h5>
                <p class="small">Fotos editadas em até 7 dias úteis</p>
            </div>
        </div>
    </div>
</div>

<!--SEÇÃO: PACOTES EM DESTAQUE-->
<div class="secao-pacotes mt-5">
    <h3 class="text-center mb-4">Conheça Nossos Pacotes</h3>
    
    <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
            <div class="card-pacote">
                <div class="card-pacote-cabecalho" style="background: #3498db;">
                    <h4>BÁSICO</h4>
                    <h3>R$ 799</h3>
                </div>
                <div class="card-pacote-corpo">
                    <ul>
                        <li>✓ 2 horas de ensaio</li>
                        <li>✓ 50 fotos editadas</li>
                        <li>✓ 1 localização</li>
                        <li>✓ Entrega em 7 dias</li>
                    </ul>
                    <a href="?pg=pacote" class="btn-pacote" style="background: #3498db;">
                        Ver Detalhes
                    </a>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card-pacote">
                <div class="card-pacote-cabecalho" style="background: #e74c3c;">
                    <h4>PROFISSIONAL</h4>
                    <h3>R$ 1.499</h3>
                    <span class="badge-popular">MAIS POPULAR</span>
                </div>
                <div class="card-pacote-corpo">
                    <ul>
                        <li>✓ 4 horas de ensaio</li>
                        <li>✓ 100 fotos editadas</li>
                        <li>✓ 2 localizações</li>
                        <li>✓ 3 mudas de roupa</li>
                        <li>✓ Álbum digital</li>
                    </ul>
                    <a href="?pg=pacote" class="btn-pacote" style="background: #e74c3c;">
                        Ver Detalhes
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <div class="text-center mt-3">
        <a href="?pg=pacote" class="btn-link">
            Ver todos os pacotes →
        </a>
    </div>
</div>

<!--SEÇÃO: DEPOIMENTOS DE CLIENTES-->
<div class="secao-depoimentos mt-5">
    <h3 class="text-center mb-4">O que nossos clientes dizem</h3>
    
    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="depoimento-card">
                <div class="depoimento-texto">
                    "Fotos incríveis do nosso casamento! A Jessica capturou cada momento especial com muito talento e sensibilidade."
                </div>
                <div class="depoimento-autor">
                    <strong>Maria e João</strong><br>
                    <small>Casamento</small>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="depoimento-card">
                <div class="depoimento-texto">
                    "Ensaio newborn maravilhoso! Paciente e atenciosa com nosso bebê. As fotos ficaram perfeitas!"
                </div>
                <div class="depoimento-autor">
                    <strong>Ana Clara</strong><br>
                    <small>Ensaio Newborn</small>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="depoimento-card">
                <div class="depoimento-texto">
                    "Profissional excepcional! As fotos corporativas superaram nossas expectativas. Recomendo!"
                </div>
                <div class="depoimento-autor">
                    <strong>Carlos Silva</strong><br>
                    <small>Fotos Corporativas</small>
                </div>
            </div>
        </div>
    </div>
</div>

<!--SEÇÃO: CTA (CALL TO ACTION) PRINCIPAL-->
<div class="secao-cta mt-5 text-center">
    <div class="cta-container">
        <h3>Pronto para eternizar seus momentos especiais?</h3>
        <p class="cta-descricao">Agende uma consulta gratuita e descubra como podemos transformar seus momentos em memórias eternas.</p>
        
        <div class="cta-botoes">
            <a href="?pg=reserva" class="btn-cta-principal">
                <i class="bi bi-calendar-check"></i> Agendar Agora
            </a>
            <a href="?pg=faleconosco" class="btn-cta-secundario">
                <i class="bi bi-chat"></i> Falar no WhatsApp
            </a>
        </div>
    </div>
</div>

<!--SEÇÃO: ESTATÍSTICAS-->
<div class="secao-estatisticas mt-5">
    <div class="row text-center">
        <div class="col-md-3 mb-4">
            <div class="estatistica-item">
                <h2 class="estatistica-numero">1.000+</h2>
                <p class="estatistica-label">Clientes Satisfeitos</p>
            </div>
        </div>
        
        <div class="col-md-3 mb-4">
            <div class="estatistica-item">
                <h2 class="estatistica-numero">10.000+</h2>
                <p class="estatistica-label">Fotos Entregues</p>
            </div>
        </div>
        
        <div class="col-md-3 mb-4">
            <div class="estatistica-item">
                <h2 class="estatistica-numero">50+</h2>
                <p class="estatistica-label">Casamentos</p>
            </div>
        </div>
        
        <div class="col-md-3 mb-4">
            <div class="estatistica-item">
                <h2 class="estatistica-numero">10+</h2>
                <p class="estatistica-label">Anos de Experiência</p>
            </div>
        </div>
    </div>
</div>

<!--SEÇÃO: ÁREA DE ATUAÇÃO-->
<div class="secao-localizacao mt-5">
    <h3 class="text-center mb-4">Atendemos em João Pessoa e Região</h3>
    
    <div class="localizacao-container text-center">
        <p class="mb-3">
            <i class="bi bi-geo-alt"></i> 
            <strong>Atendimento em:</strong> João Pessoa, Cabedelo, Bayeux, Santa Rita e cidades vizinhas
        </p>
        <p class="mb-3">
            <i class="bi bi-car-front"></i> 
            <strong>Deslocamento:</strong> Incluso para João Pessoa • Consultar outras cidades
        </p>
        <p>
            <i class="bi bi-clock"></i> 
            <strong>Horário de Atendimento:</strong> Segunda a Sábado, 8h às 18h
        </p>
    </div>
</div>

<style>
/* CONTAINER PRINCIPAL */
.carrossel-container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 20px;
}

/* CARROSSEL */
.slide-atual {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    margin-bottom: 20px;
}

.slide-imagem {
    width: 100%;
    height: 500px;
    object-fit: cover;
    display: block;
}

.slide-info {
    background: #2c3e50;
    color: white;
    padding: 20px;
}

.slide-info h4 {
    margin: 0 0 10px 0;
    color: #3498db;
}

.slide-indicadores {
    text-align: center;
    margin: 20px 0;
}

.indicador-ativo {
    color: #3498db;
    font-weight: bold;
    font-size: 1.5em;
    margin: 0 5px;
}

.indicador-inativo {
    color: #ccc;
    text-decoration: none;
    font-size: 1.5em;
    margin: 0 5px;
}

.indicador-inativo:hover {
    color: #3498db;
}

.slide-controles {
    display: flex;
    justify-content: space-between;
    margin-top: 20px;
}

.btn-slide {
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: all 0.3s;
}

.btn-anterior {
    background: #2c3e50;
    color: white;
}

.btn-proximo {
    background: #3498db;
    color: white;
}

.btn-slide:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 8px rgba(0,0,0,0.2);
}

/* DESTAQUES */
.destaque-item {
    padding: 20px;
    background: white;
    border-radius: 10px;
    box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    transition: transform 0.3s;
    height: 100%;
}

.destaque-item:hover {
    transform: translateY(-5px);
}

.destaque-icone {
    font-size: 2.5rem;
    color: #3498db;
    margin-bottom: 15px;
}

/* PACOTES */
.card-pacote {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s;
}

.card-pacote:hover {
    transform: translateY(-5px);
}

.card-pacote-cabecalho {
    color: white;
    padding: 20px;
    text-align: center;
    position: relative;
}

.card-pacote-cabecalho h4 {
    margin: 0;
    font-size: 1.5rem;
}

.card-pacote-cabecalho h3 {
    margin: 10px 0 0 0;
    font-size: 2rem;
}

.badge-popular {
    background: white;
    color: #e74c3c;
    padding: 5px 10px;
    border-radius: 20px;
    font-size: 0.8rem;
    position: absolute;
    top: 10px;
    right: 10px;
    font-weight: bold;
}

.card-pacote-corpo {
    padding: 20px;
    background: white;
}

.card-pacote-corpo ul {
    list-style: none;
    padding: 0;
    margin: 0 0 20px 0;
}

.card-pacote-corpo li {
    padding: 8px 0;
    border-bottom: 1px solid #eee;
}

.card-pacote-corpo li:last-child {
    border-bottom: none;
}

.btn-pacote {
    display: block;
    text-align: center;
    padding: 10px;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background 0.3s;
}

.btn-pacote:hover {
    opacity: 0.9;
    color: white;
    text-decoration: none;
}

.btn-link {
    color: #3498db;
    text-decoration: none;
    font-weight: bold;
}

.btn-link:hover {
    text-decoration: underline;
}

/* DEPOIMENTOS */
.depoimento-card {
    background: #f8f9fa;
    padding: 25px;
    border-radius: 10px;
    border-left: 4px solid #3498db;
    height: 100%;
}

.depoimento-texto {
    font-style: italic;
    margin-bottom: 20px;
    line-height: 1.6;
}

.depoimento-autor {
    border-top: 1px solid #ddd;
    padding-top: 15px;
}

/* CTA PRINCIPAL */
.secao-cta {
    background: linear-gradient(135deg, #2c3e50, #34495e);
    color: white;
    padding: 50px 20px;
    border-radius: 15px;
}

.cta-container {
    max-width: 800px;
    margin: 0 auto;
}

.cta-descricao {
    font-size: 1.1rem;
    opacity: 0.9;
    margin-bottom: 30px;
}

.cta-botoes {
    display: flex;
    justify-content: center;
    gap: 15px;
    flex-wrap: wrap;
}

.btn-cta-principal {
    background: #e74c3c;
    color: white;
    padding: 15px 30px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: bold;
    transition: all 0.3s;
}

.btn-cta-principal:hover {
    background: #c0392b;
    transform: translateY(-3px);
    color: white;
    text-decoration: none;
}

.btn-cta-secundario {
    background: transparent;
    color: white;
    padding: 15px 30px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: bold;
    border: 2px solid white;
    transition: all 0.3s;
}

.btn-cta-secundario:hover {
    background: white;
    color: #2c3e50;
    text-decoration: none;
}

/* ESTATÍSTICAS */
.estatistica-item {
    padding: 20px;
}

.estatistica-numero {
    color: #3498db;
    font-size: 2.5rem;
    margin: 0;
}

.estatistica-label {
    color: #666;
    font-weight: bold;
    margin: 0;
}

/* LOCALIZAÇÃO */
.localizacao-container {
    background: #f8f9fa;
    padding: 30px;
    border-radius: 10px;
    max-width: 800px;
    margin: 0 auto;
}

.localizacao-container i {
    color: #3498db;
    margin-right: 10px;
}

/* RESPONSIVIDADE */
@media (max-width: 768px) {
    .slide-imagem {
        height: 300px;
    }
    
    .destaque-item {
        margin-bottom: 20px;
    }
    
    .cta-botoes {
        flex-direction: column;
        align-items: center;
    }
    
    .btn-cta-principal,
    .btn-cta-secundario {
        width: 100%;
        max-width: 300px;
        text-align: center;
    }
    
    .estatistica-numero {
        font-size: 2rem;
    }
}

@media (max-width: 480px) {
    .slide-controles {
        flex-direction: column;
        gap: 10px;
    }
    
    .btn-slide {
        width: 100%;
        text-align: center;
    }
}

</style>
