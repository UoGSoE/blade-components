/** @type {import('tailwindcss').Config} */
const defaultTheme = require('tailwindcss/defaultTheme')

module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        fontFamily: {
          sans: ['Inter var', ...defaultTheme.fontFamily.sans],
        },
        colors: {
            uogblue: {
                50: '#a5b4c2',
                100: '#8ea2b3',
                200: '#778fa3',
                300: '#617c94',
                400: '#4a6985',
                500: '#345775',
                600: '#1d4466',
                700: '#1a3d5c',
                800: '#173652',
                900: '#143047',
                950: '#11293d',
            },
        },
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
  ],
}
