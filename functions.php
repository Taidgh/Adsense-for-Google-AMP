<?php
/*-----------------------------------------------------------------------------------*/
/* Add the following code to functions.php in your theme folder. Edit ca-pub-1234567890 and data-ad-slot="12345678"
/* Add [firstadsense] to the content of your page/post
/*-----------------------------------------------------------------------------------

function firstAdsense() {

if ( function_exists( 'is_amp_endpoint' ) && is_amp_endpoint() ) : 
        {return '<amp-ad width="100vw" height=320
  type=\'adsense\'
  data-ad-client=\'ca-pub-1234567890\'
  data-ad-slot="12345678"
  data-auto-format="rspv"
  data-full-width>
    <div overflow></div>
</amp-ad>';}
else : 
        {return '<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- Non Amp PetscamsEmbeddedinPost -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-1234567890"
     data-ad-slot="12345678"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>';}
endif; 
}
add_shortcode('firstadsense', 'firstAdsense');
