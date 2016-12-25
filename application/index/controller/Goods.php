<?php
namespace app\index\controller;

class Goods
{
    public function index(){
        return 'index';
    }
    public function add(){
        return 'add';
    }
    public function edit($id){
        return 'edit:'.$id;
    }
}