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
      listStyleImage: {
      checkmark: 'url("/public/caret-right.svg")',
    },},
  },
  plugins: [
    require('flowbite/plugin')
  ],
}