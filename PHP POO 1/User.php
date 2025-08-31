<?php
ini_set('display_errors', 1);

class User{
    public $name;
    public $surname;
    private $birthdate;

    public function __construct(){
        $args = func_get_args();
        $nargs= func_num_args();
        
        switch ($nargs) {
            case '2':
                $this->construct1($args[0], $args[1]);
                break;
                
                default:
                $this->constructDefault($args[0], $args[1], $args[2]);
                break;
            }
    }

    private function construct1($name, $surname){
        $this->name = $name;
        $this->surname = $surname;
    }

    private function constructDefault($name, $surname, $email){
        $this->name = $name;
        $this->email = $email;
        $this->surname = $surname;
    }

    private function constructTotal($name, $surname, $email, $address, $bankaccount, $password, $birthdate, $family){
        $this->name = $name;
        $this->surname = $surname;
        $this->email = $email;
        $this->address = $address;
        $this->bankaccount = $bankaccount;
        $this->password = $password;
        $this->birthdate = $birthdate;
        $this->family = $family;
    }

    public function fullname(){
        return $this->name . " " . $this->surname;
    }

    private $email;
    private $address;
    private $bankaccount;
    private $passwd;
    private $family = array();

    public function getName(){
        return $this->name;
    }

    public function getSurname(){
        return $this->surname;
    }
    
    public function getEmail(){
        return $this->email;
    }

    public function getFamily(){
        return $this->family;
    }

    public function getAddress(){
        return $this->address;
    }

    public function getBankaccount(){
        return $this->bankaccount;
    }

    public function getBirthdate(){
        return $this->birthdate;
    }

    public function getPassword(){
        return $this->passwd;
    }

    public function setName(){
        $this->name;
    }

    public function setSurname(){
        $this->surname;
    }
    
    public function setEmail(){
        $this->email;
    }

    public function setFamily($familyArray){
        if(is_array($familyArray)){
            $this->family = $familyArray;
        } else if ($familyArray instanceof User){
            array_push($this->family, $familyArray);
        }else{
            echo "Error: setFamily necesita un array como argumento";
        }
    }

    public function addFamilyMember($member){
        if ($member instanceof User) {
            array_push($this->family, $member);
        } elseif (is_array($member)) {
            foreach($member as $value){
                $this->addFamilyMember($value);
            }
        } else {
            echo "Error: addFamilyMember requires a User instance or an array of User instances";
        }
    }

    public function showMe(){
        echo "Datos del Usuario: <br>" .
             "Nombre: " . $this->name . "<br>" .
             "Apellido: " . $this->surname . "<br>" .
             "Email: " . $this->email . "<br>" .
             "Direccion: " . $this->address . "<br>" .
             "Cuenta Bancaria: " . $this->bankaccount . "<br>" .
             "Familia: " . $this->familyToString() . "<br>" .
             "Constraseña: " . sha1($this->passwd) . "<br>" .
             "Fecha de Nacimiento: " . $this->birthdate . "<br>";
    }

    public function familyToString(){
        $string = "";

        foreach ($this->family as $value){
            $string .= $value->getName() . " ";
        }
        return trim($string);
    }
    
}

?>