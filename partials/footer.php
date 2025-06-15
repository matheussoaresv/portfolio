<footer>

</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"
    crossorigin="anonymous">
</script>

<script src=" https://cdn.jsdelivr.net/npm/swiper@11.2.8/swiper-bundle.min.js "></script>

<script>
  const linha = document.getElementById('linhaFade');

  window.addEventListener('scroll', () => {
    const scrollTop = window.scrollY || document.documentElement.scrollTop;
    const maxScroll = 200;

    let fator = 1 - scrollTop / maxScroll;
    if (fator < 0) fator = 0;

    linha.style.transform = `scaleX(${fator})`;
    linha.style.opacity = fator;
  });
</script>

</body>

</html>