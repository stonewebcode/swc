<?php
/**
 * those helpful little functions that are needed everywhere
 * */
namespace app\Helpers;

use Illuminate\Log;

class DataHelper
{
    /**
     * Remove any rogue html from user input array
     *
     * @param  Array $data
     * @return Array $data
     */
    public function sanitize($data)
    {

        foreach ($data as $key => $value) {
            if ($key != '_token') {
                $data[$key] = $this->clean($data[$key]);
            }
        }

        return $data;
    }

    /**
     * Remove any rogue html from string
     *
     * @param  string $datavalue
     * @return string $datavalue
     */
    public function clean($datavalue)
    {
        //\Log::debug(' Before: ' .$datavalue);
        $datavalue = filter_var($datavalue, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
        //\Log::debug(' After: ' .$datavalue);
        return $datavalue;
    }

}