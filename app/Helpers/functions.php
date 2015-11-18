<?php
/**
 * those helpful little functions that are needed everywhere
 * */
namespace app\Helpers;

use Illuminate\Log;

class Useful
{
    public static function encode_email_address($email)
    {
        $alwaysEncode = array('.', ':', '@');

        $result = '';

        // Encode string using oct and hex character codes
        for ($i = 0; $i < strlen($email); $i++) {
            // Encode 25% of characters including several that always should be encoded
            if (in_array($email[$i], $alwaysEncode) || mt_rand(1, 100) < 25) {
                if (mt_rand(0, 1)) {
                    $result .= '&#' . ord($email[$i]) . ';';
                } else {
                    $result .= '&#x' . dechex(ord($email[$i])) . ';';
                }
            } else {
                $result .= $email[$i];
            }
        }

        return $result;
    }

//cut it so that its only a few lines with a link to read more on the news page
    /* cuts a story down so fits on couple of lines with readmore link */
    function shortstory($string, $link)
    {
        $maxlen = 145;
        if (strlen($string) > $maxlen) {

            // truncate string
            $stringCut = substr($string, 0, $maxlen);

            // make sure it ends in a word so assassinate doesn't become ass...
            $string = substr($stringCut, 0, strrpos($stringCut, ' ')) . '... <a href="' . $link . '">Read More</a>';
        }
        return $string;
    }

    public function sanitize($data)
    {
        $rightNow = \Carbon\Carbon::now();
        //\Log::debug('sanitize: ' . $rightNow);

        foreach ($data as $key => $value) {
            if ($key != '_token') {
                $request[$key] = filter_var($data[$key], FILTER_SANITIZE_STRING);
                //      \Log::debug($key);

            }
        }

        return $data;
    }

}