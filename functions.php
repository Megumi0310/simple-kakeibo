<?php

//h関数：値を受け取ったら無効化の処理をして結果を返すメソッド(function処理の1つ)
function h($value) {
  //htmlspecialchars：意味のあるコードを無効化する
  return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

