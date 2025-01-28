<?php

class User{
	public $login;
	private  $password;
	public $head = false;


    public function getLogin() {
        return $this->login;
      }

      public function setLogin($login) {
        $this->login = $login;
      }

      public function setPassword($password) {
        $this->password = $password;
      }


      public function isValid($login, $password) {
        return $this->login === $login && $this->password === $password;
    }

	public function __construct($login, $password){
		$this->login = $login;
        $this->password = $password;
	}
}