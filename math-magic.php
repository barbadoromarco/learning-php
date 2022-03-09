<?php
// $answer should be 1. No matter what the original number was! 
  $my_num = 7;
  $answer = $my_num;
  $answer += 2;
  $answer *= 2;
  $answer -= 2;
  $answer /= 2;
  $answer -= $my_num;
  echo $answer;
