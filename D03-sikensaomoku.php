<pre style="font-size:1.1em">
あなたはある資格試験に挑戦しようとしています。
その試験は、試験 1 と試験 2 のふたつの試験からなり、試験1で必要最低点以上の点数を取らないと、試験2の点数が合計得点に加算されません。

1行目に試験 1 と試験 2 の点数が半角スペース区切り、2行目に試験1の必要最低点が与えられるので、合計得点を求めるプログラムを作成してください。
なお、試験 1 の点数が必要最低点ちょうどの場合、試験 2 の得点は合計得点に加算されます。

例えば入力例 1では

50 60 → 51
試験 1 で 50点、試験 2 で 60 点 を取り、必要最低点が 51 点で 試験 1 の点数が必要最低点未満のため試験 2 の点数が加算ないので以下のように出力してください。
50

入力例2
50 60 30
出力例2
110

入力例3
50 63 50
出力例3
113
<?php

$str = '50 60';
$int = 50;


$str = '50 60';
$int = 30;


$str = '50 63';
$int = 50;

// 同じコードでそれぞれの入力値に対して出力例通りの結果になるようにコードを書け