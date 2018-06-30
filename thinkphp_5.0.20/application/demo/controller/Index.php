<?php
namespace app\demo\controller;
use think\Controller;
header("Content-type: text/html; charset=utf-8"); 
class Index extends Controller{
    public function index(){
  
   
       return $this->fetch();
    }
   
}
