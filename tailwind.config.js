/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
        colors: {
          grey: '#ECECEC',
          background : '#F6F9FF'
        },
    },
    plugins: [],
};
