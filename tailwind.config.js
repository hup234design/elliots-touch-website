/** @type {import('tailwindcss').Config} */

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
      colors: {
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
