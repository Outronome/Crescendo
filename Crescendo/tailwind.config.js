/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        customBlue: "#8bd4cb",
      },
      screens: {
        'telemovelMI': '320px',
        'telemovelMF': '375px',
        'telemovelGI': '376px',
        'telemovelGF': '425px',
        'tabletI': '426px',
        'tabletF': '768px',
        'ecraPPI': '769px',
        'ecraPPF': '1024px',
        'ecraPI': '1025px',
        'ecraPF': '1440px',
        'ecraMI': '1441px',
        'ecraMF': '2560px',
        'ecraG': '2561px',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}