<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * ShortURL: Bijective conversion between natural numbers (IDs) and short strings
 *
 * $this->url_shortener->encode() takes an ID and turns it into a short string
 * $this->url_shortener->decode() takes a short string and turns it into an ID
 *
 * Features:
 * + large alphabet (51 chars) and thus very short resulting strings
 * + proof against offensive words (removed 'a', 'e', 'i', 'o' and 'u')
 * + unambiguous (removed 'I', 'l', '1', 'O' and '0')
 *
 * Example output:
 * 123456789 <=> pgK8p
 *
 * Source: https://github.com/delight-im/ShortURL (Apache License 2.0)
 */

class url_shortener {


    public $alphabet = SHORTURL_SALT;
    public $base = 53;


    function encode($num) {
        $str = '';
        while ($num > 0) {
            $str = substr($this->alphabet, ($num % $this->base), 1) . $str;
            $num = floor($num / $this->base);
        }
        return $str;
    }

    function decode($str) {
        $num = 0;
        $len = strlen($str);
        for ($i = 0; $i < $len; $i++) {
            $num = $num * $this->base + strpos($this->alphabet, $str[$i]);
        }
        return $num;
    }

}

/* End of file flickr.php */
/* Location: ./application/libraries/flickr.php */