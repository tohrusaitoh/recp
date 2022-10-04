// <body onload="main()"> により
// ページ全体が読み込まれたとき(onload)に
// 関数 main() を実行する。
function main() {
  /*
  <div id="output"></div>の場所をみつけて(getElementById())
  その内側(innerHTML)を"Hello World"に書き換える。
  */
  document.getElementById( "output" ).innerHTML = "Hello World!" ;
}

/** Local Variables: **/
/** mode: html **/
/** tab-width: 8 **/
/** End: **/
