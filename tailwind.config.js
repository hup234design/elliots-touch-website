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
                'skyblue': {
                    DEFAULT: '#24BFF8',
                    50: '#D6F3FE',
                    100: '#C2EDFD',
                    200: '#9BE2FC',
                    300: '#73D6FB',
                    400: '#4CCBF9',
                    500: '#24BFF8',
                    600: '#07A3DD',
                    700: '#057BA6',
                    800: '#045370',
                    900: '#022B3A',
                    950: '#01171F'
                },
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
            },
            typography: (theme) => ({
                DEFAULT: {
                    css: {
                        blockquote: {
                            backgroundColor: theme('colors.gray.100'),
                            color: theme('colors.et-dark-navy'), // Change text color
                            fontWeight: 'bold', // Make text bold
                            borderLeftWidth: theme('borderWidth.4'), // Thicker left border
                            borderLeftColor: theme('colors.et-navy'), // Stronger color for the border
                            padding: theme('spacing.4'), // Adjust padding to accommodate thicker border
                            marginLeft: 0,
                            marginRight: 0,
                            textAlign: 'center', // Center align all text
                            quotes: '"\\201C""\\201D""\\2018""\\2019"',
                            '&::before': {
                                content: 'open-double-quote',
                            },
                            '&::after': {
                                content: 'close-double-quote',
                            },
                        },
                    },
                },
            }),
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
}
