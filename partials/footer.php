<?php 
$whatsapp = preg_replace('/^55/', '', $whatsapp);
$formatted = preg_replace('/(\d{2})(\d{5})(\d{4})/', '($1) $2-$3', $whatsapp);
?>
<footer id="contato" class="py-4">
    <div class="container-lg">
        <div class="row row-cols-1 row-cols-lg-2">
            <div class="col col-lg-7">
                <h3>Sobre</h3>
                <hr class="footer-border">
                <p>Olá, eu me chamo Matheus, desenvolvedor front-end especializado na criação de landing pages otimizadas para conversão. Trabalho tanto com construtores no-code quanto com sites codificados do zero, entregando soluções rápidas, responsivas e focadas em resultados. </p>
                <p>Tenho experiência com WordPress, HTML, CSS (SASS), JavaScript e jQuery, além de integração com APIs e ferramentas de marketing digital. Meu foco está em desenvolver interfaces que aliem boa performance, usabilidade e estética, sempre buscando as melhores práticas de SEO técnico e acessibilidade. Estou em constante evolução, estudando ferramentas modernas como React e Vite, e me desafiando a entregar cada vez mais qualidade e eficiência nos projetos que participo.</p>
            </div>
            <div class="col col-lg-5">
                <h3>Contato</h3>
                <hr class="footer-border">
                <address class="d-flex align-items-center">
                    <svg class="me-3 text-black" width="32" height="32" fill="currentColor" aria-hidden="true">
                        <use xlink:href="#icon-mail"></use>
                    </svg><a class="text-black text-decoration-none" title="devhazard@proton.me" href="mailto:devhazard@proton.me">devhazard@proton.me</a>
                </address>
                <address class="d-flex align-items-center">
                    <svg class="me-3 text-black" width="32" height="32" fill="currentColor" aria-hidden="true">
                        <use xlink:href="#icon-whatsapp"></use>
                    </svg><a class="text-black text-decoration-none" target="_blank" title="Enviar mensagem no WhatsApp" href="<?= $whatsapp_url ?>"><?= $formatted ?></a>
                </address>

                <address class="d-flex align-items-center">
                    <svg class="me-3 text-black" width="32" height="32" fill="currentColor" aria-hidden="true">
                        <use xlink:href="#icon-github"></use>
                    </svg>
                    <a class="text-black text-decoration-none" target="_blank" title="GitHub" href="https://github.com/matheussoaresv">
                        GitHub
                    </a>
                </address>
            </div>
        </div>
    </div>
    <p class="text-center mb-0 mt-4">&copy; <?= date('Y') ?> Dev Hazard. Todos os direitos reservados.</p>
</footer>
<?php include($_SERVER['DOCUMENT_ROOT'] . '/portfolio/assets/img/icons/icons.svg'); ?>
<script defer src=" https://cdn.jsdelivr.net/npm/swiper@11.2.8/swiper-bundle.min.js "></script>
<script type="module" src="<?= $mainJs ?>"></script>

</body>

</html>