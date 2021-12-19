<?php //主入口文件

    //包含所有的composer的组件库
    require('vendor/autoload.php');

    //包含所有的app/controllers/admin/demo.php
    //require("app/controllers/admin/demo.php");

        //1.或者在composer.json"autoload": {
            //        "psr-4": {
            //            "admin\\":"app/controllers/admin/",
            //            "home\\": "app/controllers/home/"
                           //.........
            //        }
            //    }
        //2.在终端输入composer dump-autoload
            //会自动在autoload_psr4中生成包含
                    //return array(
                    //    'admin\\' => array($baseDir . '/app/controllers/admin'),
                    //    'NoahBuscher\\Macaw\\' => array($vendorDir . '/noahbuscher/macaw'),
                    //);





    //引入包名
    use NoahBuscher\Macaw\Macaw;






    //使用get请求。访问"/"的时候，执行回调函数function
    Macaw::get("/",function (){
        echo "gsdgs";
    });
    Macaw::post("/hello/demo",function (){//使用post请求。
        echo "gsdgs";
    });
    Macaw::any("/hello/(:num)",function ($num){ //(:num)必须传一个值   //使用any请求：通用使用get和post请求
        echo "gsdgs".$num;
    });

    //访问"/hello/(:num)"的时候，请求一个类"admin\Admin@index" index是方法
    Macaw::any("/hello/(:num)","admin\Admin@index");

    //访问admin下的Demo类下的index方法
    Macaw::get("/admin","admin\Demo@index");
    Macaw::get("/admin/add","admin\Demo@add");

    //访问home下的Text类下的index方法
    Macaw::get("/home","home\Text@index");
    Macaw::get("/home/add","home\Text@add");


    //解析
    Macaw::dispatch();