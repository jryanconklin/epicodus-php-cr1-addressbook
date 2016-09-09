<?php
    class Contact
    {
    // Properties
        private $name;
        private $phone_number;
        private $email;
        private $street;
        private $city;
        private $state;
        private $zip;
        private $country;

    // Constructor

        function _construct($name, $phone, $email, $street, $city, $state, $zip, $country)
        {
            $this->name = $name;
            $this->phone = $phone;
            $this->email = $email;
            $this->street = $street;
            $this->city = $city;
            $this->state = $state;
            $this->zip = $zip;
            $this->country = $country;
        }

    // Getter and Setter Methods
        //Name
        function getName()
        {
            return $this->name;
        }

        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }
        //Phone
        function getPhone()
        {
            return $this->phone;
        }

        function setPhone($new_phone)
        {
            $this->phone = (integer) $new_phone;
        }
        //Email
        function getEmail()
        {
            return $this->email;
        }

        function setEmail($new_email)
        {
            $this->email = (string) $new_email;
        }
        //Street
        function getStreet()
        {
            return $this->street;
        }

        function setStreet($new_street)
        {
            $this->street = (string) $new_street;
        }
        //City
        function getCity()
        {
            return $this->city;
        }
        function setCity($new_city)
        {
            $this->city = (string) $new_city;
        }
        //State
        function getState()
        {
            return $this->state;
        }
        function setState($new_state)
        {
            $this->state = (string) $new_state;
        }
        //Zip
        function getZip()
        {
            return $this->zip;
        }

        function setZip($new_zip)
        {
            $this->zip = (integer) $new_zip;
        }
        //Country
        function getCountry()
        {
            return $this->country;
        }

        function setCountry($new_country)
        {
            $this->country = $new_country;
        }

    // General Methods
        function save()
        {
            array_push($_SESSION['list_of_contacts'], $this);
        }


    // Static Methods
        function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }

        function deleteAll()
        {
            $_SESSION['list_of_contacts'] = array();
        }

    }
?>
