<section id="projetos">
    <div class="container-lg">
        <div class="row row-cols-1">
            <div class="col">
                <h2 class="text-center">Conheça os meus projetos</h2>
            </div>
        </div>
        <div class="swiper projetos py-5">
            <div class="swiper-wrapper">
                <?php for ($i = 1; $i <= 3; $i++): ?>
                    <div class="swiper-slide">
                        <?php include_once "partials/projetos/landing-pages/card-$i.php" ?>
                    </div>
                <?php endfor; ?>
            </div>

            <div class="swiper-button-prev">
                <svg width="64" height="64" fill="currentColor" aria-hidden="true">
                    <use xlink:href="#icon-circle-arrow-left"></use>
                </svg>
            </div>
            <div class="swiper-button-next">
                <svg width="64" height="64" fill="currentColor" aria-hidden="true">
                    <use xlink:href="#icon-circle-arrow-right"></use>
                </svg>
            </div>

            <div class="swiper-scrollbar"></div>
        </div>
    </div>
</section>

<div class="modal fade" id="projetoModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable pt-5">
        <div class="modal-content">
            <div class="modal-header border-0">
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body" id="projetoModalContent">

            </div>
        </div>
    </div>
</div>