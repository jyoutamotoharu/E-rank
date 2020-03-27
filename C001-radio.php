<form name="radioB">
カナダの首都は？<br>
<input type="radio" name="Q1">オタワ<br>
<input type="radio" name="Q1">トロント<br>
<input type="radio" name="Q1">モントリオール<br>
<br>
スイスの首都は？<br>
<input type="radio" name="Q2">ジュネーブ<br>
<input type="radio" name="Q2">チューリッヒ<br>
<input type="radio" name="Q2">ベルン<br>
<br>
ドイツの首都は？<br>
<input type="radio" name="Q3">ハンブルク<br>
<input type="radio" name="Q3">ブレーメン<br>
<input type="radio" name="Q3">ベルリン<br>
<br>
スペインの首都は？<br>
<input type="radio" name="Q4">バルセロナ<br>
<input type="radio" name="Q4">マドリード<br>
<input type="radio" name="Q4">リスボン<br>
<br>
オーストラリアの首都は？<br>
<input type="radio" name="Q5">シドニー<br>
<input type="radio" name="Q5">メルボルン<br>
<input type="radio" name="Q5">キャンベラ<br>
<br>
中国の首都は？<br>
<input type="radio" name="Q6">武漢<br>
<input type="radio" name="Q6">北京<br>
<input type="radio" name="Q6">上海<br>
<br>
アメリカの首都は？<br>
<input type="radio" name="Q7">ニューヨーク<br>
<input type="radio" name="Q7">サンフランシスコ<br>
<input type="radio" name="Q7">ワシントン<br>
<br>
<input type="button" value="採点" onclick="saiten()" />
</form>



<script>
function saiten(){//関数への引数のリスト
  var seikai=0; //正解数を入れる変数
  //答えの番号を配列に入れる
  var trueAns = new Array(0,5,8,10,14,16,20);
  //正解のラジオボタンがチェックされているか確認
  for (i=0 ; i<7 ; i++)  {//0~7まで1ずつ加算を繰り返す
    if( document.radioB.elements[trueAns[i]].checked )
      seikai++;
  }
  
  alert("あなたは"+seikai*20+"点でした！");
}
</script>