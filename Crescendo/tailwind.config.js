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
        primary: {"50":"#eff6ff","100":"#dbeafe","200":"#bfdbfe","300":"#93c5fd","400":"#60a5fa","500":"#3b82f6","600":"#2563eb","700":"#1d4ed8","800":"#1e40af","900":"#1e3a8a","950":"#172554"},
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