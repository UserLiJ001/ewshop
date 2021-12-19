<?php
    namespace admin;//声明一个包名

    use controllers\BaseControllers; //使用控制器下controllers的BaseControllers类

    class Demo extends BaseControllers{ //extends BaseControllers 继承
    function index() {
        echo "index ............";

        $this->success('/home','成功');//调用success，跳转到/home
    }
    function add(){
        echo "add ..........";

        $this->error('/home/add','失败');//调用error，跳转到/home/add
    }
}