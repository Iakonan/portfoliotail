/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        'sequel': ['Sequel 100 Wide 95'],
      },
    },
  },
  plugins: [
    require('tailwind-scrollbar-hide'),
  ],
};