<?php
$whatsapp = 5511933161695;
$whatsapp_url = 'https://wa.me/' . $whatsapp . '?text=Ol%C3%A1%2C%20tenho%20interesse%20no%20desenvolvimento%20do%20meu%20website%21';
include_once 'public/partials/header.php'; ?>
<main>
    <section id="banner" class="py-2">
        <div class="area">
            <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
            </ul>

            <div class="container-lg">
                <div class="row row-cols-1 row-cols-md-2 align-items-center gy-4">
                    <figure class="col order-md-2 animate__animated animate__fadeInRight">
                        <img class="img-fluid" fetchpriority="high" src="/portfolio-novo/public/imgs/desenvolvedor-frontend.webp" alt="Desenvolvedor Front End" decoding="async">
                    </figure>
                    <div class="col order-md-1 animate__animated animate__fadeInLeft">
                        <h1 class="section__title">Olá, eu sou Matheus</h1>
                        <h2>Desenvolvedor Front End</h2>
                        <p>Especializado em criar interfaces dinâmicas e responsivas. Entrego websites <span>acessíveis</span> e de <span>fácil compreensão</span> para quem não tem experiência técnica, com <span>preços amigáveis.</span></p>
                        <div class="d-flex gap-4">
                            <div class="btn__custom secondary"><a title="Conheça meus projetos" href="#projetos">Conheça meus projetos <i class="fa-solid fa-diagram-project"></i></a></div>
                            <div class="btn__custom primary"><a title="Entre em contato" href="#contato">Entre em contato <i class="fa-solid fa-arrow-right"></i></a></div>
                        </div>
                        
                        <ul class="social-list mt-4">
                            <li>
                                <a target="_blank" href="https://github.com/matheussoaresv"><i class="fa-brands fa-github"></i></a>
                            </li>
                            <li>
                                <a href="<?= $whatsapp_url ?>"><i class="fa-brands fa-whatsapp"></i></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.instagram.com/dev.hazard/"><i class="fa-brands fa-instagram"></i></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="area-arrow d-flex justify-content-center">
                    <img class="animate__animated animate__fadeInUp" src="/portfolio-novo/public/imgs/arrow-down.webp" alt="Seta indicando para baixo">
                </div>
            </div>
        </div>
    </section>

    <section id="sobre">
        <div class="container-lg">
            <div class="area__bg-primary">
                <div class="row row-cols-1 row-cols-md-2 align-items-center gy-4">
                    <figure class="col animate__animated animate__fadeInLeft">
                        <img class="img-fluid" loading="lazy" fetchpriority="low" src="/portfolio-novo/public/imgs/entusiasta-tecnologia.webp" alt="Entusiasta em tecnologia" decoding="async">
                    </figure>
                    <div class="col animate__animated animate__fadeInRight">
                        <div class="d-flex gap-4 mb-4">
                            <i class="fa-brands fa-js"></i>
                            <i class="fa-brands fa-wordpress"></i>
                            <i class="fa-brands fa-php"></i>
                            <i class="fa-brands fa-react"></i>
                        </div>
                        <p class="section__title fs-5">Sobre mim</p>
                        <h2>Sou um entusiasta da tecnologia, sempre em busca de novas oportunidades para expandir meus conhecimentos e aplicar soluções .</h2>
                        <p>Desenvolvedor Front-End com 3 anos de experiência, apaixonado por criar interfaces funcionais e estéticas. Ao longo da minha trajetória, trabalhei com WordPress e React, sempre buscando soluções inovadoras e proporcionando experiências excepcionais aos usuários.</p>
                        <p>Cada projeto é uma oportunidade de aprimorar habilidades e encontrar novas abordagens para resolver problemas de forma criativa. Se você busca um desenvolvedor que alia estética e usabilidade, estou pronto para transformar suas ideias em soluções práticas e de alta qualidade.</p>

                        <div class="btn__custom primary"><a title="Confira meus projetos" href="#projetos">Confira meus projetos <i class="fa-solid fa-arrow-right"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projetos" class="py-5">
        <div class="container-lg">
            <p class="section__title fs-5 text-center">Projetos</p>
            <h2 class="text-center mb-4">Confira os meus projetos em destaque</h2>
            <div class="row row-cols-1 row-cols-md-3 gy-4">
                <div class="col">
                    <div class="card">
                        <figure>
                            <img decoding="async" fetchpriority="low" loading="lazy" src="/portfolio-novo/public/imgs/viss-incorporadora.webp" class="img-fluid" alt="Viss">
                        </figure>
                        <div class="card-body">
                            <h3 class="text-white fs-5">Viss Incorporadora</h3>
                            <p class="text-white"><strong>Segmento:</strong> Imobiliário</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <figure>
                            <img decoding="async" fetchpriority="low" loading="lazy" src="/portfolio-novo/public/imgs/dr-rafael-locali.webp" class="img-fluid" alt="Dr. Rafael Locali">
                        </figure>
                        <div class="card-body">
                            <h3 class="text-white fs-5">Dr. Rafael Locali</h3>
                            <p class="text-white"><strong>Segmento:</strong> Médico</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <figure>
                            <img decoding="async" fetchpriority="low" loading="lazy" src="/portfolio-novo/public/imgs/lp-chemitec.webp" class="img-fluid" alt="Chemitec">
                        </figure>
                        <div class="card-body">
                            <h3 class="text-white fs-5">Chemitec - GoFind</h3>
                            <p class="text-white"><strong>Segmento:</strong> Agro-Veterinário</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contato">
        <div class="container-lg">
            <div class="area__bg-primary">
                <div class="row row-cols-1">
                    <div class="col col-md-5">
                        <figure>
                            <img src="" alt="">
                        </figure>
                        <p class="section__title fs-5">Contato</p>
                        <h2>Gostou do meu trabalho? Vamos trabalhar juntos!</h2>
                        <p>Estou sempre disponível para conversas. Entre em contato através do meu email <a href="mailto:">devhazard@proton.me</a> ou me chame nas minhas redes sociais</p>

                        <ul class="social-list">
                            <li>
                                <a target="_blank" href="https://github.com/matheussoaresv"><i class="fa-brands fa-github"></i></a>
                            </li>
                            <li>
                                <a href="<?= $whatsapp_url ?>"><i class="fa-brands fa-whatsapp"></i></i></a>
                            </li>
                            <li>
                                <a target="_blank" href="https://www.instagram.com/dev.hazard/"><i class="fa-brands fa-instagram"></i></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include_once 'public/partials/footer.php'; ?>