/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      keyframes :{
        wiggle: {
          '0%' : { opacity: '0' },
          '100%': { opacity: '1' },
        }
      },
      listStyleImage: {
      checkmark: 'url("/public/caret-right.svg")',
    },},
  },
  plugins: [
    require('flowbite/plugin')
  ],
}