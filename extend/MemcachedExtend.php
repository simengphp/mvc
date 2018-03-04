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
//        $mem->set("string","刘柱");
//        $string = $mem->get("string");

//        echo "<hr />统计服务器池中的所有服务器状态";
//        echo "<pre>";
//        var_dump($mem->getextendedstats());
//        echo "<hr />获取某一个服务器的状态";
//        var_dump($mem->getserverstatus("127.0.0.1"));
//        echo "<hr />";
//        var_dump($mem->getstats());
//        echo "<hr />获取版本信息";
//        var_dump($mem->getversion());

        $arr = [1,2,3,4,5,666];
//        $mem->set("arr",$arr);
        //替换某个缓存变量的值
        $json = json_encode($arr);
        $mem->replace("arr",$json);
        $string = $mem->get("arr");
        var_dump($string);


    }
}



