/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      fontFamily: {
        'TechMono': ['"Share Tech Mono"', 'monospace'],
        'TechReg': ['"Share Tech"', 'sans-serif'],
        'Inter': ['"Inter"', 'sans-serif']
      },
    },

  },
  plugins: [],
}

