/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    fontFamily: {
      'sans': ['Poppins', 'sans-serif'],
    },
    
    colors: {
      primary: '#F2BE22',
      secondary: '#F24C3D',
      light: '#FAFAFA',
      'light-2': '#F1F1F1',
      grey: '#686D6C',
      'light-grey': '#DEDEDE',
      'dark-grey': '#363D3B',
      dark: '#040D12',
      'dark-secondary': '#05131B'
    },
    extend: {
      backgroundImage: {
        'hero-image': "url('/public/images/hero.jpg)"
      },
      spacing: {
      76: '19rem',
    },
    },
  },
  plugins: [
     require('flowbite/plugin')
  ],
}