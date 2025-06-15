<?php
$whatsapp = 11933161695;
$whatsapp_url = 'https://wa.me/' . $whatsapp . '?text=Olá%20gostaria%20de%20saber%20mais';

include_once 'partials/header.php' ?>

<main class="content py-5">
    <?php include_once 'partials/content/hero.php' ?>

    <section id="projetos" class="py-4">
        <div class="container-lg">
            <div class="row row-cols-1">
                <div class="col">
                    <h2 class="text-center">Projetos</h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-lg-2 gy-4 mt-5">
                <?php for ($i = 1; $i <= 2; $i++) {
                    include_once "partials/cards/card-$i.php";
                } ?>
            </div>
        </div>
    </section>

    <?php include_once "partials/content/diferencials.php" ?>
    
    <section id="sobre">
        <div class="container-lg">
             <div class="row row-cols-1 row-cols-lg-2 gy-4 mt-5">
         <div class="col">
             <p class="fw-bold fs-2">Vamos conversar!</p>
             <address class="d-flex align-items-center">
                 <i class="fa fa-envelope me-3 fs-2" aria-hidden="true"></i><a class="text-black text-decoration-none" title="devhazard@proton.me" href="mailto:devhazard@proton.me">devhazard@proton.me</a>
             </address>
             <address class="d-flex align-items-center">
                 <i class="fa-brands fa-whatsapp me-3 fs-2"></i><a class="text-black text-decoration-none" target="_blank" title="Enviar mensagem no WhatsApp" href="<?= $whatsapp_url ?>"><?= preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $whatsapp) ?>
                 </a>
             </address>
         </div>
         <div class="col">
             <p>Olá, eu sou o Matheus, desenvolvedor front-end especializado na criação de landing pages otimizadas para conversão. Trabalho tanto com construtores no-code quanto com sites codificados do zero, entregando soluções rápidas, responsivas e focadas em resultados.</p>
         </div>
     </div>
        </div>
    </section>
    
</main>

<?php include_once 'partials/footer.php' ?>