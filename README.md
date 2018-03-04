mvc框架初尝试
time：2018-03-01
author：思梦php公益讲师刘柱
QQ：476319748


目录结构：
libs核心文件
Controller==控制器的文件
Model==模型文件
View==视图文件
ORG==第三方文件
extend==扩展

1、统一单入口文件index.php


2、用php编写的一个小的MVC框架


3、模板引擎使用的是smarty


4、整合了memcache->memcachedExtend.php
memcache讲解：
1)memcache占用内存比较严重，如果你是单服务架构那么不适合使用memcache,它会抢占内存 \n
2)不能持久化操作，只适合一些为了缓存为应用的服务 \n
3)支持的类型有限
memcached比memcache有更加丰富的对数据缓存的操作
未来：各种模式的设计添加
