/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
      colors: {
        myblack: '#061826',
        myblue: '#0471A6',
        myblue2 : '#3685B5',
        myblue3: '#89AAE6',
        myrose: '#AC80A0',
        white: '#FFFFFF',
      }
  },
  plugins: [],
}

