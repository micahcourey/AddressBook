<?php
class Contact
{
    private $name;
    private $phone_number;
    private $address;

    function __construct($name, $phone_number, $address)
    {
        this->name = $name;
        this->phone_number = $phone_number;
        this->address = $address;
    }

    function setName($new_name)
    {
        this->name = (string) $new_name;
    }

    function setPhoneNumber($new_phone_number)
    {
        this->phone_number = (string) $new_phone_number;
    }

    function setAddress($new_address)
    {
        this->address = (string) $new_address;
    }

    function getName()
    {
        return $this->name;
    }

    function getPhoneNumber()
    {
        return $this->phone_number;
    }

    function getAddress()
    {
        return $this->address;
    }

    function save()
    {
        array_push($_SESSION['contacts_list'], $this);
    }

    static function getAll()
    {
        return $_SESSION['contacts_list'];
    }

    static function deleteAll()
    {
        $_SESSION['contacts_list'] = array();
    }
}
?>
