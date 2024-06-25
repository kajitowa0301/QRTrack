/** @type {import('tailwindcss').Config} */
const plugin = require('tailwindcss/plugin')

export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    // ブレイクポイントを指定
    screens: {
      'sm': '375px',
      'md': '720px',
      'lg': '900px',
      'xl': '1120px',
    },
    color: {
      // 使いたい色を指定
      primary:'#3490dc',
      pink:'#ee9ca7',
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
        '.test' : {
          fontSize: '7rem',
          color: '#ffdde1',
          fontWeight: 'bold',
        },
        '.gra':{
            background:'#43C6AC',
            background: '-webkit-linear-gradient(to right, #F8FFAE, #43C6AC)',
            background: 'linear-gradient(to right, #F8FFAE, #43C6AC)',   
        },
      })
    })
  ],
}

