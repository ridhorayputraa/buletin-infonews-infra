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
            serif: ["Tinos", "serif"],
        },
        extend: {},
        colors: {
            blackPrimary: "#404040",
            blackTrans: "#545454",
            redHeavy: "#FB4141",
            grey: "#ECECEC",
            background: "#F6F9FF",
        },
    },
    plugins: [],
};
