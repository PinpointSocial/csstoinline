<?php

class csstoinlineTest extends PHPUnit_Framework_TestCase {

   public function testSimple() {
      $css = 'p{color:blue}';
      $html = '<html><head></head><body><p>foo</p></body></html>';

      $conv = Csstoinline::convert($html, $css);
      echo $conv;
   }

}
