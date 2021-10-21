<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8"/>
    <title>Sample Page 15(様々な入力フォーム)</title>
  </head>
  <body>
    <h1>Sample Page 15<br/>(様々な入力フォーム)</h1>
    <form method="GET" action="sampleF.php">
      <table border="1">
      <tr><td>名前(text)      </td><td><input type="text" size="10" name="NAME" /></td></tr>
      <tr><td>パスワード(password)</td><td><input type="password" size="10" name="PASS" /></td></tr>
      <tr><td>隠れた値(hidden)  </td><td><input type="hidden" name="HIDDEN" value="隠れた値" /></td></tr>
      <tr><td>ご意見(textarea)	</td><td><textarea name="OPINION" cols="20" rows="4"></textarea></td></tr>
      <tr>
        <td>性別(radio)</td>
        <td>
          男性：<input type="radio" name="GENDER" value="男" />
          女性：<input type="radio" name="GENDER" value="女" />
        </td>
      </tr>
      <tr>
        <td>ペット(checkbox)</td>
        <td>
          犬：<input type="checkbox" name="PET[]" value="犬" />
          猫：<input type="checkbox" name="PET[]" value="猫" />
          鳥：<input type="checkbox" name="PET[]" value="鳥" />
        </td>
      </tr>
      <tr>
        <td>職業(select+option)</td>
        <td>
          <select name="WORK">
            <option value="">職業を選んでください</option>
            <option value="学生">学生</option>
            <option value="会社員">会社員</option>
            <option value="公務員">公務員</option>
          </select>
        </td>
      </tr>
      <tr><td>(submit)</td><td><input type="submit" value="処理" /></td></tr>
      </table>
    </form>
    <table border="1">
        <tr><th>変数</th><th>値</th></tr>
        <tr><td>$_REQUEST["NAME"]</td><td><?php echo $_REQUEST["NAME"] ; ?></td></tr>
        <tr><td>$_REQUEST["PASS"]</td><td><?php echo $_REQUEST["PASS"] ; ?></td></tr>
        <tr><td>$_REQUEST["HIDDEN"]</td><td><?php echo $_REQUEST["HIDDEN"] ; ?></td></tr>
        <tr><td>$_REQUEST["OPINION"]</td><td><?php echo $_REQUEST["OPINION"] ; ?></td></tr>
        <tr><td>$_REQUEST["GENDER"]</td><td><?php echo $_REQUEST["GENDER"] ; ?></td></tr>
	<tr><td>$_REQUEST["PET"]</td><td><?php foreach( $_REQUEST["PET"] as $v ) echo $v ; ?></td></tr>
        <tr><td>$_REQUEST["WORK"]</td><td><?php echo $_REQUEST["WORK"] ; ?></td></tr>
    </table>
  </body>
</html>

<!-- Local Variables: -->
<!-- mode: php -->
<!-- tab-width: 8 -->
<!-- End: -->
