<?php 
class Home extends Controller {
    public function index(){
        $model=new Model();
       //$model->test();
       $arr['name']='Rawan';
       $result=$model->where($arr);
       // echo "home controller";
       var_dump($result);
        $this->view('home');
    }
}

?>