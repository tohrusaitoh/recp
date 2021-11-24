<?php
$doc_dir = "documents" ;
// index.php へのアクセス時は、フォルダへのアクセス制限を付けたページに移動
if ( preg_match( "/\/recp\//" , $_SERVER[ "REQUEST_URI" ] )
     && file_exists( "../2021-11-recp/index.php" ) ) {
    header( "Location: ../2021-11-recp/" ) ;
} else {
    $doc_dir = "." ;
}
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8"/>
    <title>福井大学リカレント教育プログラム・プログラミング応用</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <h1>福井大学リカレント教育プログラム<br />プログラミング応用</h1>
    <table>
      <tr>
	<td valign="top" style="background-color: #EFF;">
<?php include( ".menu-left.shtml" ) ;?>
	</td><td valign="top">
    <h2>講義内容と講義資料</h2>
    <ul>
      <li>
	<a href="<?php echo $doc_dir ; ?>/2021-11-07-recp-1.pdf">
	  Webアプリケーションとプログラム言語(11/07)</a>
	<ul>
	  <li>
	    インターネットやWebの仕組みについて理解し、
	    その中でJavaScriptやPHPなどのプログラム言語がどう使われるのか
	  </li>
	  <li>
        課題レポート
        <ol>
            <li><a href="https://forms.gle/osj3RNfzBhvTH1sk9">理解度確認(11/07)</a>
                       (Google Formsに回答してください)</li>
            <li>nslookup コマンドで、www.fukui-nct.ac.jp のIPアドレスを調べてください。</li>
            <li>そのIPアドレスを使ってWebページを開いてください。<br/>
				最近のブラウザは http://x.x.x.x で開くと、
				「安全か確認できないけど開きますか？」といった警告がでますが、
                「危険性を理解したうえで開く」を実行してみてください。
                 </li>
            <li>2,3で確認した内容の画面をキャプチャしたものをレポートにまとめ、
                 メールで<a href="mailto:tsaitoh@fukui-nct.ac.jp">tsaitoh@fukui-nct.ac.jp</a>に
                 提出してください。</li>
        </ol>
	  </li>
	</ul>
	<br />
      </li>
      <li>
	<a href="<?php echo $doc_dir ; ?>/2021-11-14-recp-2.pdf">JavaScriptによるフロントエンドプログラミング(11/14)</a>
	<ul>
	  <li>
	    Webブラウザ側で動くプログラム言語としてのJavaScriptについて、
	    基本的な文法と使い方を理解を目指す
	  </li>
	  <li>
        課題レポート
        <ol>
	    <li><a href="https://forms.gle/HTpozcBcnnqaydMf8">理解度確認(11/14)</a></li>
        <li>練習問題(棒グラフ)sample6.htmlの穴埋めした結果のHTMLのソースを
            画面のキャプチャし、レポートにまとめてください。</li>
        <li>もしくは、練習問題(配列との串刺し)sample9.htmlの
            穴埋めした結果について、
            同様に画面キャプチャしレポートにまとめてください。</li>
        <li>2,3のいずれかの穴埋めのレポート
             (両方について提出する場合は1つのファイルにまとめて構いません)を
            前回と同じように、メールで提出してください。</li>
        </ol>
	  </li>
	</ul>
	<br />
      </li>
      <li>
	<a href="<?php echo $doc_dir ; ?>/2021-11-21-recp-3.pdf">PHPによるバックエンドプログラミング(11/21)</a>
	<ul>
	  <li>
	    Webサーバで動くプログラム言語としての PHP について、
	    基本的な文法と、ブラウザ側からのデータの受け渡しの仕組みを理解
	  </li>
	  <li>
        課題レポート
        <ol>
	    <li><a href="https://forms.gle/Y9xYNBsZwTDDHjcs9">理解度確認(11/21)</a></li>
        <li>練習問題 PHPによる Hello World の練習問題 sampleD-table.php について、
            スタイルシートを使うように改良し、そのプログラムとその修正結果について、
            画面キャプチャなどでレポートにまとめてください。</li>
        <li>もしくは、複数の表を組み合わせるSQLの(2),(4)の練習問題について、
             穴埋めして命令を実行した結果について、
             ターミナルの画面キャプチャをとり、
             コマンドと結果についてレポートにまとめてください。</li>
        <li>2,3のいずれかのレポート
             (両方回答する場合は、1つのファイルにまとめて構いません)を、
             前回と同じように、メールで提出してください。</li>
        </ol>
	  </li>
	</ul>
	<br />
      </li>
      <li>
	<a href="<?php echo $doc_dir ; ?>/2021-11-28-recp-4.pdf">Webプログラミングとセキュリティ(11/28)</a>
	<ul>
	  <li>
	    Web プログラミングと、サイバー攻撃について考える。
	    サイバー攻撃の仕組みの基本を理解し、その対処方法を学ぶ。
	  </li>
	  <li>
        課題レポート
        <ol>
	    <li><a href="https://forms.gle/YtPadHirnDENSHCf9">理解度確認(11/28)</a></li>
        <li>講義の中で説明した攻撃の１つについて、
             攻撃するため入力内容とその結果の画面について、
             実際に実施して、レポートにまとめてください。</li>
        <li>そのレポートを、前回と同じようにメールで提出してください。</li>
        </ol>
	  </li>
	</ul>
	<br />
      </li>
    </ul>
    <h2>Paiza Cloudで資料をダウンロードする方法</h2>
    <ul>
      <li><a href="https://paiza.cloud/">Paiza Cloud</a></li>
    </ul>
    <pre style="background-color: #EEE;">
      ((( Paiza Cloud のターミナルで )))
      <font color="blue">~$</font> <b>cd public_html</b>
      <font color="blue">~/public_html$</font> <b>git clone <a href="https://github.com/tohrusaitoh/recp.git">https://github.com/tohrusaitoh/recp.git</a></b>
      <font color="blue">~/public_html$</font> <b>cd recp</p>
    </pre>
	</td>
      </tr>
    </table>
  </body>
</html>
