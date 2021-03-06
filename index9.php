
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>4タイプ診断 - DIT JS入門</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="header">
    <h2>4タイプ診断 - DIT JS入門</h2>
  </div>
  <div id="wrapper">

    <div id="main">
      <div class="description">
        <p>あなたを「王様」、「軍人」、「学者」、「職人」の4タイプに分類します。</p>
      </div>

      <div class="questions">
        <form name="shindan">
          <div class="question">
            <p>質問1.</p>
            <p>グループディスカッションにおけるあなたの役割は？</p>
            <ul>
              <li><input name="q0" value="officer" checked>リーダー</li>
              <li><input type="radio" name="q0" value="scholar">アイデアマン</li>
              <li><input type="radio" name="q0" value="king">ムードメーカ</li>
              <li><input type="radio" name="q0" value="craftsman">監視役</li>
            </ul>
          </div>

<div class="question">
            <p>質問2.</p>
            <p>後輩との関係で大事にすることは？</p>
            <ul>
              <li><input type="radio" name="q1" value="officer" checked>しっかりとした上下関係</li>
              <li><input type="radio" name="q1" value="king">後輩から慕われること</li>
              <li><input type="radio" name="q1" value="craftsman">自分と価値観が合うこと</li>
              <li><input type="radio" name="q1" value="scholar">特に何も気にしない</li>
            </ul>
          </div>

          <div class="question">
            <p>質問3.</p>
            <p>課題が締切りに間に合わなさそう！どうする？</p>
            <ul>
              <li><input type="radio" name="q2" value="king" checked>とりあえず出す</li>
              <li><input type="radio" name="q2" value="craftsman">諦める</li>
              <li><input type="radio" name="q2" value="officer">先生に謝りに行く</li>
	      <li><input type="radio" name="q2" value="scholar">そんなことにはならない</li>

  <div class="question">
            <p>質問4.</p>
            <p>出来そうにない依頼をされたら？</p>
            <ul>
              <li><input type="radio" name="q3" value="officer" checked>努力してなんとか仕上げる</li>
              <li><input type="radio" name="q3" value="scholar">猶予をもらってじっくり取り組む</li>
              <li><input type="radio" name="q3" value="king">断れずに引き受け失敗する</li>
              <li><input type="radio" name="q3" value="craftsman">きっぱり断る</li>
            </ul>
          </div>

          <div class="question">
            <p>質問5.</p>
            <p>学校のマラソン大会！あなたの行動は？</p>
            <ul>
              <li><input type="radio" name="q4" value="king" checked>上位を目指して走る</li>
              <li><input type="radio" name="q4" value="officer">友達と勝負しながら走る</li>
              <li><input type="radio" name="q4" value="craftsman">自分のペースで走る</li>
              <li><input type="radio" name="q4" value="scholar">なぜ走らなければいけないのかと考える</li>
            </ul>
          </div>
          <div class="submit">
            <input type="button" value="診断する" onclick="result()">
          </div>
        </form>
      </div>
    </div>

  </div>
  <div id="footer">
    <small>© DIT 2015 All Right Reserved.</small>
  </div>
  <script type="text/javascript" src="script.js"></script>
</body>
</html>
