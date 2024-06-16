/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
          fontFamily: {
        sans: ['Inter var', ...defaultTheme.fontFamily.sans],
      },

  },
  plugins: [],
}