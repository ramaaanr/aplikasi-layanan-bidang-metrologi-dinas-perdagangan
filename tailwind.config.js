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
      spacing: {
        76: '19rem',
        18: '4.5rem',
      },
      keyframes: {
         wiggle: {
           '0%, 100%': { 'transform': 'translateY(2rem)' },
           '50%': { 'transform': 'translateY(-0.5rem)' },
        }
      },
      animation: {
        wiggle: 'wiggle 2s ease-in-out infinite',
      }
    },
  },
  plugins: [
     require('flowbite/plugin')
  ],
}