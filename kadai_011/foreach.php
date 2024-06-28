<?php

// 連想配列を作成
$vegetables = array(
  "名前" => "玉ねぎ",
  "値段" => 200,
  "産地" => "北海道",
);


foreach ($vegetables as $key => $value) {
  echo $key . ":" . $value . "\n" .'<br>';
}

?>
