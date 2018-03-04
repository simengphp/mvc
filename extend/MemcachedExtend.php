<?php
//namespace extend\MemcachedExtend;
/**
 * Created by crazy
 * User: crazy
 * Date: 2018/3/2
 * Time: 17:00
 */

class MemcachedExtend {


    public function memTest(){
        $mem = new Memcache();
        $mem->connect("127.0.0.1",11211);
        $mem->set("string","刘柱");
        $string = $mem->get("string");
        var_dump($string);
    }
}



