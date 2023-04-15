<?php
include_once './src/config/config.php';
include_once './src/models/model.php';

session_start();

class controll{

    private $model;
    private $config;
    
    function __construct(){
        $this->config = new config();
        $this->model = new model($this->config);
    }

    public function loginPage(){
        include_once 'src/views/signinPage.php';
    }

    public function registerPage(){
        include_once 'src/views/registerPage.php';
    }

    public function insertAccountControll(){
        session_unset();
        if($_POST['submit_Signup']){
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $username = $_POST['username'];
            $upassword = $_POST['upassword'];
            $email = $_POST['email'];
            $urole = "user";

            if(!empty($firstName)){
                if(preg_match('/^[a-zA-Z]+$/', $firstName)){
                    if(strlen($firstName) >= 5 && strlen($firstName) <= 20){


                        if(!empty($lastName)){
                            if(preg_match('/^[a-zA-Z]+$/', $lastName)){
                                if(strlen($lastName) >= 5 && strlen($lastName) <= 20){


                                    if(!empty($username)){
                                        if(preg_match('/^[a-zA-Z0-9]+$/', $username)){
                                            if(strlen($username) >= 5 && strlen($username) <= 20){
                                                

                                                if(!empty($upassword)){
                                                    if(preg_match('/^[a-zA-Z0-9]+$/', $upassword)){
                                                        if(strlen($upassword) >= 5 && strlen($upassword) <= 50){


                                                            if(!empty($email)){
                                                                if(filter_var($email,FILTER_VALIDATE_EMAIL)){

                                                                    if(!isset($_SESSION['error'])){
                                                                        $status = $this->model->insertAccount($firstName,$lastName,$username,$upassword,$email,$urole);
                                                                        if($status === true){

                                                                        }else {
                                                                            $_SESSION['error'] = "เกิดข้อผิดพลาดในการ สมัครสมาชิกของคุณโปรลองอีกครั้ง";
                                                                            echo $_SESSION['error'];
                                                                        }
                                                                        
                                                                    }else {
                                                                        
                                                                        $_SESSION['error'] = "เกิดข้อผิดพลาดในการ สมัครสมาชิกของคุณโปรลองอีกครั้ง";
                                                                        echo $_SESSION['error'];
                                                                    }
                                                                }else {
                                                                    
                                                                    $_SESSION['error'] = "กรุณากรอก email ให้ถูกต้อง";
                                                                    echo $_SESSION['error'];
                                                                }
                                                            }else {
                                                                
                                                                $_SESSION['error'] = "กรุณากรอก email ของคุณ";
                                                                echo $_SESSION['error'];
                                                            }
                                                            

                                                        }else {
                                                            
                                                            $_SESSION['error'] = "password ของคุณต้องมีตัวอักษรระหว่าง 5 - 50";
                                                            echo $_SESSION['error'];
                                                        }
                                                    }else {
                                                        
                                                        $_SESSION['error'] = "กรุณากรอก password ให้ถูกต้อง";
                                                        echo $_SESSION['error'];
                                                    }
                                                }else {
                                                    $_SESSION['error'] = "กรุณากรอก password ของคุณ";
                                                    echo $_SESSION['error'];
                                                }


                                            }else {
                                                
                                                $_SESSION['error'] = "username ของคุณต้องมีตัวอักษรอยู่ระหว่าง 5 - 20";
                                                echo $_SESSION['error'];
                                            }
                                        }else {
                                            
                                            $_SESSION['error'] = "กรุณากรอก username ให้ถูกต้อง";
                                            echo $_SESSION['error'];
                                        }
                                    }else {
                                        
                                        $_SESSION['error'] = "กรุณากรอก username ของคุณ";
                                        echo $_SESSION['error'];
                                    }


                                    
                                }else {
                                    
                                    $_SESSION['error'] = "lastname ของคุณต้องมีตัวอักษรอยู่ระหว่าง 5 - 20";
                                    echo $_SESSION['error'];
                                }
                            }else {
                                
                                $_SESSION['error'] = "กรุณากรอก lastname ให้ถูกต้อง";
                                echo $_SESSION['error'];
                            }
                        }else {
                            
                            $_SESSION['error'] = "กรุณากรอก lastname ของคุณ";
                            echo $_SESSION['error'];
                        }


                    }else {
                        
                        $_SESSION['error'] = "firstname ของคุณต้องมีตัวอักษรอยู่ระหว่าง 5 - 20";
                        echo $_SESSION['error'];
                    }
                }else {
                    
                    $_SESSION['error'] = "กรุณากรอก firstname ให้ถูกต้อง";
                    echo $_SESSION['error'];
                }
            }else {
                
                $_SESSION['error'] = "กรุณากรอก firstname ของคุณ";
                echo $_SESSION['error'];
            }
            

        }else {
            echo "Please";
        }


    }

    public function uploadImage(){
        $targetDir = './src/public/images/';

        if(isset($_POST['submit'])){
            if(!empty($_FILES['file']['name'])){
                $fileName = basename($_FILES['file']['name']);
                $targetFilePath = $targetDir . $fileName;
                $fileType = pathinfo($fileName,PATHINFO_EXTENSION);
                $fileSize = $_FILES['file']['size'];
                    
                $allowType = array("jpg","png","gif","jpeg");   
                if(in_array($fileType,$allowType)){
                    if($fileSize < 5242880){
                        if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFilePath)){
                            $_SESSION['success'] = "You image has been uploaded.";
                            
                        }else {
                            $_SESSION['error'] = "Have an error about uploading please try again!";
                        }
                    }else {
                        $_SESSION['error'] = "You image must not exceed 5 mb!";
                    }
                }else {
                    $_SESSION['error'] = "Please select : JPG , PNG , JPEG , GIF !";
                }
            }else {
                $_SESSION['error'] = "Please select you image before submited!";
            }
        }else {
            header('localhost: ./src/index.php');
        }
    }

    public function mvcHandler(){
        $route = isset($_GET['route']) ? $_GET['route'] : NULL ;
        switch($route){
            case"loginPage":
                $this->loginPage();
            break;

            case"sign_up":
                $this->insertAccountControll();
            break;

            default:
                $this->registerPage();
            break;
        }

    }

}

?>