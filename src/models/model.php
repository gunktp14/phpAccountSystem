<?php

class model{
    private $dns;
    private $dbUser;
    private $dbPass;
    public $conDB;

    function __construct($config){
        $this->dns = $config->dns;
        $this->dbUser = $config->dbUser;
        $this->dbPass = $config->dbPass;
        $this->connect();
    }

    public function connect(){
        try{
            $this->conDB = new PDO($this->dns,$this->dbUser,$this->dbPass);
        }catch(PDOException $err){
            echo "<br>Have an error about : " . $err->getMessage();
            echo "<br>Have error in line : ". $err->getLine();
        }
    }

    public function insertAccount($firstName,$lastName,$username,$password,$email,$urole){  
        $sql = "INSERT INTO `account_tb` (`id`,`firstName`, `lastName`, `username`, `password`, `email`, `phone_number`, `urole`) VALUES ('', :firstname, :lastname, :username, :upassword, :email ,NULL , :urole)";      
        $query = $this->conDB->prepare($sql); 
        $query->bindParam(':firstName',$firstName);
        $query->bindParam(':lastName',$lastName);
        $query->bindParam(':username',$username);
        $query->bindParam(':upassword',$upassword);
        $query->bindParam(':email',$email);
        $query->bindParam(':urole',$urole);
        if($query->execute()){
            return true;
        }else {
            return false;
        }
    }


}

?>