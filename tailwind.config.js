/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')
import colors from 'tailwindcss/colors'

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./vendor/hup234design/cms/**/*.blade.php",
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
  ],
  theme: {
    extend: {
        fontFamily: {
            sans:    ['Inter', ...defaultTheme.fontFamily.sans],
            heading: ['Gloria Hallelujah', ...defaultTheme.fontFamily.sans],
        },
      colors: {
              'et-skyblue': '#24bff8',
              'et-light-skyblue': '#d3f2fd', // Adjusted lighter version of et-skyblue
              'et-dark-skyblue': '#1a8cb7', // Adjusted darker version of et-skyblue
              'et-crimson': '#f43f5e',
              'et-light-crimson': '#f98fa3', // Adjusted lighter version of et-crimson
              'et-dark-crimson': '#b32d48', // Adjusted darker version of et-crimson
              'et-blue': '#0d6efd',
              'et-light-blue': '#6a8eff', // Adjusted lighter version of et-blue
              'et-dark-blue': '#0a58ca', // Adjusted darker version of et-blue
              'et-navy': '#06377e',
              'et-light-navy': '#4a67a1', // Adjusted lighter version of et-darkblue
              'et-dark-navy': '#042a5f', // Adjusted darker version of et-darkblue
        danger: colors.rose,
                primary: colors.blue,
                success: colors.green,
                warning: colors.yellow,
      }
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
}
