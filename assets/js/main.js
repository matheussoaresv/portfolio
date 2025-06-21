import 'bootstrap';
import '../css/style.css';

const linha = document.getElementById('linhaFade');

window.addEventListener('scroll', () => {
  const scrollTop = window.scrollY || document.documentElement.scrollTop;
  const maxScroll = 200;

  let fator = 1 - scrollTop / maxScroll;
  if (fator < 0) fator = 0;

  linha.style.transform = `scaleX(${fator})`;
  linha.style.opacity = fator;
});

const swiperProjetos = new Swiper('.swiper.projetos', {
  slidesPerView: 1,
  spaceBetween: 10,

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
    enabled: false,
  },

  scrollbar: {
    el: '.swiper-scrollbar',
    draggable: true,
  },

  breakpoints: {
    992: {
      navigation: {
        enabled: true,
      },
      slidesPerView: 2,
      spaceBetween: 20,
      grabCursor: false,
      simulateTouch: false,
    }
  }
});


document.addEventListener('DOMContentLoaded', () => {
  document.querySelectorAll('.card').forEach(card => {
    card.addEventListener('click', () => {
      const title = card.getAttribute('data-title') || '';
      let imgs = [];
      try {
        imgs = JSON.parse(card.getAttribute('data-imgs') || '[]');
      } catch (e) {
        console.error('JSON inválido em data-imgs', e);
      }

      const contentEl = document.getElementById('projetoModalContent');
      contentEl.innerHTML = imgs.map(src => `
        <div class="mb-3">
          <img src="${src}" class="img-fluid" alt="${title}">
        </div>
      `).join('');
    });
  });
});

const observer = new IntersectionObserver((entries) => {
  entries.forEach((entry) => {

    if (entry.isIntersecting) {
      const el = entry.target;


      const delay = el.dataset.animateDelay;
      if (delay) {
        el.style.animationDelay = delay;
      }

      el.classList.add('animate');
      observer.unobserve(el);
    }
  });
}, {
  threshold: 0.2
});

document.querySelectorAll(
  '.fade-in, .slide-up, .slide-left, .slide-right, .zoom-in, [data-animate-delay]'
).forEach(el => observer.observe(el));