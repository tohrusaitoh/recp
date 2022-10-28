<?php
$doc_dir = "documents" ;
// index.php へのアクセス時は、フォルダへのアクセス制限を付けたページに移動
if ( preg_match( "/\/recp\//" , $_SERVER[ "REQUEST_URI" ] )
     && file_exists( "../2022-10-recp/index.php" ) ) {
    header( "Location: ../2022-10-recp/" ) ;
} else if ( preg_match( "/\/recp\//" , $_SERVER[ "REQUEST_URI" ] )
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
	<a href="<?php echo $doc_dir ; ?>/2022-10-01-recp-1.pdf">
	  Webアプリケーションとプログラム言語(10/01)</a>
	<ul>
	  <li>
	    配布データ	<a href="<?php echo $doc_dir ; ?>/2022-10-01-recp-1.zip">2022-10-01-recp-1.zip</a>
	  </li>
	  <li>
	    インターネットやWebの仕組みについて理解し、
	    その中でJavaScriptやPHPなどのプログラム言語がどう使われるのか
	  </li>
	  <li>
        課題レポート
        <ol>
            <li><a href="https://forms.gle/RUvuFFs9weNLWdii6">理解度確認(10/01)</a>
                       (Google Formsに回答してください)</li>
            <li>nslookup コマンドで、www.fukui-nct.ac.jp のIPアドレスを調べてください。</li>
            <li>そのIPアドレスを使ってWebページを開いてください。<br/>
				最近のブラウザは http://x.x.x.x で開くと、
				「安全か確認できないけど開きますか？」といった警告がでますが、
                「危険性を理解したうえで開く」を実行してみてください。</li>
	    <li>
		自分の自己紹介の文章を C:\xampp\htdocs\recp\profile.html に作成し、
		ブラウザで http://localhost/recp/profile.html を表示させてください。</li>
            <li>2,3で確認した内容の画面をキャプチャしたものと、
		4で作成したページの画面をキャプチャしたものをレポートにまとめ、
                メールで<a href="mailto:tsaitoh@fukui-nct.ac.jp">tsaitoh@fukui-nct.ac.jp</a>に
                提出してください。</li>
        </ol>
	  </li>
	</ul>
	<br />
      </li>
      <li>
	<a href="<?php echo $doc_dir ; ?>/2022-10-08-recp-2.pdf">JavaScriptによるフロントエンドプログラミング(10/08)</a>
	<ul>
	  <li>
	    配布データ	<a href="<?php echo $doc_dir ; ?>/2022-10-08-recp-2.zip">2022-10-08-recp-2.zip</a>
	  </li>
	  <li>
	    Webブラウザ側で動くプログラム言語としてのJavaScriptについて、
	    基本的な文法と使い方を理解を目指す
	  </li>
	  <li>
        課題レポート
        <ol>
	    <li><a href="https://docs.google.com/forms/d/e/1FAIpQLScl9IOmM8M_K2cSSkwgKS2WIjZS4uRzs2dizyI5Pjw7Nj5Vuw/viewform?usp=sf_link">理解度確認(10/08)</a></li>
        <li>練習問題(棒グラフ)sample6.htmlの穴埋めした結果のHTMLのソースを
            画面のキャプチャし、レポートにまとめてください。</li>
        <li>もしくは、練習問題(配列との串刺し)sample9.htmlの
            穴埋めした結果について、
            同様に画面キャプチャしレポートにまとめてください。</li>
        <li>2,3のいずれかの穴埋めのレポート
             (両方について提出する場合は1つのファイルにまとめて構いません)を
            前回と同じように、以下の課題提出フォルダか
			<a href="mailto:tsaitoh@fukui-nct.ac.jp">tsaitoh@fukui-nct.ac.jp</a>にメールで提出してください。</li>
    <li><a href="https://drive.google.com/drive/folders/10SU7IgSKFopsozbRvQOFtS7l2hBWveMm?usp=sharing">課題提出フォルダ</a></li>
        </ol>
	  </li>
	</ul>
	<br />
      </li>
      <li>
	<a href="<?php echo $doc_dir ; ?>/2022-10-22-recp-3.pdf">PHPによるバックエンドプログラミング(10/22)</a>
	<ul>
    <li>
    配布データ	<a href="<?php echo $doc_dir ; ?>/2022-10-22-recp-3.zip">2022-10-22-recp-3.zip</a>
    </li>
    <li>
    Webサーバで動くプログラム言語としての PHP について、
    基本的な文法と、ブラウザ側からのデータの受け渡しの仕組みを理解
    <ul>
    <li>
    <a href="https://paiza.io/projects/rVL3c8o3YEx3ok9Erfb2Aw">関数と配列の繰り返し</a>(Paiza.IO)
    </li>
    <li>
    <a href="https://paiza.io/projects/elzf2OESpac80QtYjfNSQg">オブジェクト配列の参照</a>(Paiza.IO)
    </li>
    <li>
    <a href="https://paiza.io/projects/pEJ6KReJskR_FE7GttGMsw">オブジェクト配列の串刺し</a>(Paiza.IO)
    </li>
    </ul>
    </li>
    <li>
    Webサーバで使われるデータベースを扱うSQLについて、文法や仕組みを理解
    <ul>
    <li>
    <a href="https://paiza.io/projects/ku21QKvputzO190-CmrX8Q">品目データベース sampleG-itemlist.sql</a>(Paiza.IO)
    </li>
    <li>
    <a href="https://paiza.io/projects/PQV0_7tdfKtKi6rmgYW7Jg">品目・顧客・購入データベース sampleG.sql</a>(Paiza.IO)
    </li>
    </ul>
    </li>
    <li>
        課題レポート
        <ol>
	    <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSfTs1EkWJsH7B7pFpP93vMXZWbEZjQn78cFz1XrJ0njHLUSQQ/viewform?usp=sf_link">理解度確認(10/22)</a></li>
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
	<a href="<?php echo $doc_dir ; ?>/2022-10-29-recp-4.pdf">Webプログラミングとセキュリティ(10/29)</a>
	<ul>
	  <li>
	    Web プログラミングと、サイバー攻撃について考える。
	    サイバー攻撃の仕組みの基本を理解し、その対処方法を学ぶ。
	  </li>
	  <li>
        課題レポート
        <ol>
	    <li><a href="https://forms.gle/YtPadHirnDENSHCf9">理解度確認(10/29)</a></li>
        <li>講義の中で説明した攻撃の１つについて、
             攻撃するため入力内容とその結果の画面について、
             実際に実施して、レポートにまとめてください。</li>
        <li>そのレポートを、前回と同じようにメールで提出してください。</li>
        </ol>
	  </li>
	</ul>
	<br />
      </li>
		<?php for( $i = 0 ; $i < 10 ; $i++ ) echo "<br/>" ; ?>
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
