<?php

class dokter
{
    public $name;
    public $phone;
    public $email;
    public $note;
    public $specialist_id;
    public function __construct($name, $phone, $email, $note = "No Note", $specialist_id = null) {
        $this->name = trim($name);
        $this->phone = trim($phone);
        $this->email = trim($email);
        $this->note = !empty(trim($note)) ? trim($note) : "No Note";
        $this->specialist_id = $specialist_id; //nyimpen id specialist
    }
}

?>