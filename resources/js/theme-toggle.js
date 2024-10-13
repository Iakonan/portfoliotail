const themeToggleButton = document.getElementById('theme-toggle');
const body = document.body;
const footer = document.querySelector('footer'); // Seleziona il footer

themeToggleButton.addEventListener('click', () => {
    // Toggling between dark and light mode
    if (body.classList.contains('bg-stone-950')) {
        body.classList.remove('bg-stone-950', 'text-gray-300');
        body.classList.add('bg-gray-100', 'text-stone-950');

        // Cambia il footer
        footer.classList.remove('bg-stone-950', 'text-gray-300');
        footer.classList.add('bg-gray-100', 'text-stone-950');
    } else {
        body.classList.remove('bg-gray-100', 'text-stone-950');
        body.classList.add('bg-stone-950', 'text-gray-300');

        // Cambia il footer
        footer.classList.remove('bg-gray-100', 'text-stone-950');
        footer.classList.add('bg-stone-950', 'text-gray-300');
    }
});

const logo = document.getElementById('logo');

logo.addEventListener('mouseenter', () => {
    logo.src = 'images/logomiolime.png'; // Nuovo logo al passaggio del mouse
});

logo.addEventListener('mouseleave', () => {
    logo.src = 'images/logomionero.png'; // Logo originale
});
