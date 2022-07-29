/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.{html, js }"],
  theme: {
    extend: {
      fontFamily: {
        sans: ["Poppins", "sans-serif"],
      },
      colors: {
        main: "rgba(9, 32, 63, 1)",
        mainsec: "rgba(83, 120, 149, 1)",
      },
    },
  },
  plugins: [],
};
