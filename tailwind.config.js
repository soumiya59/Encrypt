/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./*.{html,php}'],
  theme: {
    screens: {
      sm: '480px',
      md: '768px',
      lg: '976px',
      xl: '1440px',
    },
    extend: {
      colors: {
        dark:'#22202e',
        green:'#adff2f',
      },
    },
  },
  plugins: [],
}
