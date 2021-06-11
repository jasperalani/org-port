<?php

class UserInputController {
    public $user_input;

    public function __construct($input) {
        	$this->user_input = $input;
            $this->sanitize();
    }

    public function sanitize() {
        foreach($this->user_input as $key => $text){
            $this->user_input[$key] = db()->escape($text);
        }
    }
}