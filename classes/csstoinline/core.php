<?php

class Csstoinline_Core {
   
   public static function convert($html, $css, $xhtml = false) {
      include Kohana::find_file('vendor', 'CssToInlineStyles/css_to_inline_styles'); 

      $convert = new CSSToInlineStyles($html, $css);
      return $convert->convert($xhtml);
   }


}
