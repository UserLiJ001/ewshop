<?php   //基础控制器，前后台控制器的一个父类
    namespace controllers;

    //控制器是控制流程的，比如失败去哪，成功去哪
    class BaseControllers{

        //成功的跳转
        protected function success($url,$mess){ //因为并不是直接访问控制器方法，而是通过子类调用所以做保护protected,调用这个方法时直接给个$url就可以了，跳转的消息$mess
            echo "我经过了基础控制器,this is success";

            //直接用javascript跳转
            echo "<script>";
            echo "alert('{$mess}');"; //弹出消息

            if(!empty($url)){ //判断如果给的地址是不为空
                echo "location.href='{$url}';";//js代码
            }

            echo "</script>";
        }

        //失败的跳转
        protected function error($url,$mess){ //因为并不是直接访问控制器方法，而是通过子类调用所以做保护protected,调用这个方法时直接给个$url就可以了，跳转的消息$mess
            echo "我经过了基础控制器,this is error";

            //直接用javascript跳转
            echo "<script>";
            echo "alert('ERROR:{$mess}');"; //弹出消息

            if(!empty($url)){ //判断如果给的地址是不为空
                echo "location.href='{$url}';";//js代码
            }

            echo "</script>";
        }
    }
