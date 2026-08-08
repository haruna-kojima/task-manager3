/* 
 Tailwind CSSのテンプレートパス設定を行い
 実際にウェブサイトをつくるときに使われるクラスだけを抽出してCSSファイルを生成する 
*/

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}