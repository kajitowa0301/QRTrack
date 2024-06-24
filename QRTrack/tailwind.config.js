/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin')

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    color: {
      // 使いたい色を指定
      primary:'#3490dc',
      success:'#38c172',
      danger:'#e3342f',
    },
  },
  plugins: [
    // プロパティをまとめることができる
    plugin(function({addComponents}) {
      addComponents({
        '.plugin': {
            fontWeight: 'bold',
            color: '#3490dc',
            fontSize: '5rem',
        },
      })
    })
  ],
}

