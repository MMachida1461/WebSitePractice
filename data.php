<?php
// DBで値持たせて、それを取ってくる形にした方がいいとは思うけど一旦完了
  $news = array(
    ["2020.XX.XX", "デザイン雑誌「ＸＸＸＸＸＸ Vol.11』に掲載していただきました。"],
    ["2020.XX.XX", "Ｘ月ＸＸ日から写真集「ＸＸＸＸＸＸＸ」の販売を開始します。"],
    ["2019.XX.XX", "【イベント開催のお知らせ】テキストテキストテキストテキストテキストテキストテキスト"],
    ["2019.XX.XX", "デザイン雑誌「ＸＸＸＸＸＸ Vol.10』に掲載していただきました。"],
    ["2019.XX.XX", "【個展開催のお知らせ】テキストテキストテキストテキストテキストテキストテキスト"]
  );

  //送った後に、DBの連携やら、自分のメールアドレスに送るやらしないといけないと思うがまた今度
  echo $_POST['name'];
  echo $_POST['email'];
  echo $_POST['inquiry'];
?>