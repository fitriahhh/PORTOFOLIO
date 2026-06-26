/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        accent: '#D9A05B', // warm gold
        bg:     '#0F1A07', // deep forest green
        bg2:    '#16240C', // slightly lighter
        bdr:    '#26321A', // border line
        ink:    '#F2F0E6', // off-white
        mute:   '#8A9078', // pale green
      },
      fontFamily: {
        display: ['"Space Grotesk"', 'sans-serif'],
        body:    ['Inter', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
