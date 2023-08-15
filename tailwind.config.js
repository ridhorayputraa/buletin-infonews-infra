/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            poppins: ["Poppins", "sans-serif"],
        },
        extend: {},
        colors: {
            blackPrimary: '#404040',
            redHeavy: '#FB4141',
            grey: "#ECECEC",
            background: "#F6F9FF",
        },
    },
    plugins: [],
};
