<?php 
class App{
    
    private $nameController="Home";
    private  $nameMethod="index";
    //من الرابط  url تابع يقوم بجلب قيمة المتغير
    //home يفحصه اذا كان فارغ نضع 
    // الى عناصر مصفوفة من خلال السلاش string نفصل الرابط يلي هوي عبارة عن  explode من خلال تابع 
    private function spliteURL(){
      $url=$_GET['url'] ?? "home";
    $url=explode("/",$url); 
    return $url;
    }
    public function loadController(){
        $URL=$this->spliteURL();
        //ucfirst جعل اول حرف كبير
        $filename="../app/controllers/".ucfirst($URL[0]).".php";
        if(file_exists($filename)){  
          require $filename;
            $this->nameController=ucfirst($URL[0]);
     
    
        }else{
            $filename="../app/controllers/_404.php";
         
            require $filename; 
               $this->nameController="_404";
        }

    $controller= new $this->nameController();
call_user_func_array([$controller,$this->nameMethod],[]);
    }
    }
    
    ?>