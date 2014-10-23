<?php
/**
 * Created by PhpStorm.
 * User: jonas
 * Date: 23/10/14
 * Time: 13:18
 */

namespace util;


class Storage {

    public function writeData($data) {
        return file_put_contents('data.json', json_encode($data));
    }

    public function readData() {
        return json_decode(file_get_contents('data.json'));
    }
} 