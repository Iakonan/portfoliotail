const themeToggleButton = document.getElementById('theme-toggle');
const body = document.body;
const footer = document.querySelector('footer');
const blobs = document.querySelectorAll('.blob');

// Funzione per applicare il tema
function applyTheme(theme) {
    if (theme === 'light') {
        body.classList.remove('bg-stone-950', 'text-gray-300');
        body.classList.add('bg-gray-100', 'text-stone-950');
        footer.classList.remove('bg-stone-950', 'text-gray-300');
        footer.classList.add('bg-gray-100', 'text-stone-950');
        blobs.forEach(blob => {
            blob.classList.remove('bg-gray-300');
            blob.classList.add('bg-stone-950');
        });
    } else {
        body.classList.remove('bg-gray-100', 'text-stone-950');
        body.classList.add('bg-stone-950', 'text-gray-300');
        footer.classList.remove('bg-gray-100', 'text-stone-950');
        footer.classList.add('bg-stone-950', 'text-gray-300');
        blobs.forEach(blob => {
            blob.classList.remove('bg-stone-950');
            blob.classList.add('bg-gray-300');
        });
    }
}

// Controlla il tema salvato in LocalStorage e applicalo
const savedTheme = localStorage.getItem('theme') || 'dark';
applyTheme(savedTheme);

// Event listener per il pulsante di toggle
themeToggleButton.addEventListener('click', () => {
    const currentTheme = body.classList.contains('bg-stone-950') ? 'dark' : 'light';
    const newTheme = currentTheme === 'dark' ? 'light' : 'dark';

    applyTheme(newTheme);
    localStorage.setItem('theme', newTheme); // Salva il nuovo tema
});
