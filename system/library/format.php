<?php
class format{  
 public static function formatDate($date){
  return date('F j, Y, g:i a', strtotime($date));
 }
 public static function textShorten($text, $limit = 400){
  $text = $text. " ";
  $text = substr($text, 0, $limit);
  $text = substr($text, 0, strrpos($text, ' '));
  return $text." ";
 } 
}