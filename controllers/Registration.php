<?php

class RegistrationController extends UserInputController
{

    /**
     * $status: int
     * 0 Default
     * 1 Error
     * 2 Success
     */
    public $status = 0;

    public function __construct()
    {
        parent::__construct($_POST);

        if (empty($this->user_input)) {
            return $this->fail();
        }

        $this->register();
    }

    public function register()
    {
        if (
            empty($this->user_input['username'])
            || empty($this->user_input['email'])
            || empty($this->user_input['password'])
        ) {
            // Handle server error
            return $this->fail();
        }

        if (
            strlen($this->user_input['username']) > 255
            || strlen($this->user_input['username']) > 255
            || strlen($this->user_input['username']) > 64
        ) {
            // Handle input error
            return $this->fail();
        }

        if (!filter_var($this->user_input['email'], FILTER_VALIDATE_EMAIL)) {
            // Handle invalid email
        }

        // TODO: Check if username or email is already taken.        

        $this->user_input['password'] = password_hash($this->user_input['password'], PASSWORD_DEFAULT);

        $u = $this->user_input['username'];
        $e = $this->user_input['email'];
        $p = $this->user_input['password'];

        $insert = "INSERT INTO `users` (username, email, `password`) VALUES ('$u', '$e', '$p');";

        $result = db()->query($insert);

        if($result){
            $this->status = 2;
        }else{
            return $this->fail(); 
        }
    }

    private function fail()
    {
        $this->status = 1;
        return;
    }
}
