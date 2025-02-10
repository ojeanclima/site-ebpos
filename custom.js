<script>
document.addEventListener('DOMContentLoaded', function() {
    const animatedElements = document.querySelectorAll('[data-settings*="animation"], [data-settings*="delay"], [data-settings*="fade-in"]');
    animatedElements.forEach(element => {
        element.style.animation = 'none';
        element.style.transition = 'none';
        element.style.transitionDelay = '0s';
        element.style.transitionDuration = '0s';
        element.style.opacity = '1'; // Remover fade-in
    });
});
</script>
