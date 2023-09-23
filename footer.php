
<?php wp_footer(); ?>
</body>

<script>
    function handleResize() {
        const firstDiv = document.querySelector("body > div")
        document.body.style.zoom = window.innerWidth > 1000
            ? window.innerWidth / firstDiv.offsetWidth
            : 1;
    }

    window.addEventListener("resize", handleResize);
    handleResize();
</script>
</html>
