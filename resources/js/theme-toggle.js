const themeToggleButton = document.getElementById('theme-toggle');
const body = document.body;
const footer = document.querySelector('footer'); // Seleziona il footer
const blobs = document.querySelectorAll('.blob'); // Seleziona tutti i blob

themeToggleButton.addEventListener('click', () => {
    // Toggling between dark and light mode
    if (body.classList.contains('bg-stone-950')) {
        // Modalità chiara
        body.classList.remove('bg-stone-950', 'text-gray-300');
        body.classList.add('bg-gray-100', 'text-stone-950');

        // Cambia il footer
        footer.classList.remove('bg-stone-950', 'text-gray-300');
        footer.classList.add('bg-gray-100', 'text-stone-950');

        // Cambia i blobs in modalità chiara
        blobs.forEach(blob => {
            blob.classList.remove('bg-gray-300');
            blob.classList.add('bg-stone-950'); // Cambia in un colore scuro
        });
    } else {
        // Modalità scura
        body.classList.remove('bg-gray-100', 'text-stone-950');
        body.classList.add('bg-stone-950', 'text-gray-300');

        // Cambia il footer
        footer.classList.remove('bg-gray-100', 'text-stone-950');
        footer.classList.add('bg-stone-950', 'text-gray-300');

        // Cambia i blobs in modalità scura
        blobs.forEach(blob => {
            blob.classList.remove('bg-gray-950'); // Assicurati di avere un colore scuro predefinito
            blob.classList.add('bg-gray-300'); // Cambia in un colore chiaro
        });
    }
});
