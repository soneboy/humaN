<?php

class Human{

    private $id;
    private $jmbg;
    private $firstName;
    private $lastName;
    private $address;
    private $nationality;
    private $age;
    private $martialStatus;
    private $occupation;

    /**
     * @param $id
     * @throws Exception
     */
    public function setId($id)
    {
        if(!is_numeric($id)) {
            throw new \Exception('Property id expeccts numeri value, ' . gettype($id) . ' given.', 500);
        }

        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param $jmbg
     * @throws Exception
     */
    public function setJMBG($jmbg)
    {
        if(!preg_match( '/^[A-Z0-9]{13}$/', $jmbg)) {
            throw new \Exception('Invalid jmbg number.', 500);
        }

        $this->jmbg = $jmbg;
    }

    /**
     * @return mixed
     */
    public function getJMBG()
    {
        return $this->jmbg;
    }

    /**
     * @param $firstName
     * @throws Excepion
     */
    public function setFirstName($firstName)
    {
        if(!is_string($firstName)) {
            throw new \Excepion('Propery firstName expetcs string value, ' . gettype($firstName) . ' given.', 500);
        }

        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param $lastName
     * @throws Excepion
     */
    public function setLastName($lastName)
    {
        if(!is_string($lastName)) {
            throw new \Excepion('Propery lastName expetcs string value, ' . gettype($lastName) . ' given.', 500);
        }

        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param $address
     * @throws Excepion
     */
    public function setAddress($address)
    {
        if(!is_string($address)) {
            throw new \Excepion('Property adress expetcs string value, ' . gettype($address) . ' given.', 500);
        }

        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getAdress()
    {
        return $this->address;
    }

    /**
     * @param $nationality
     * @throws Excepion
     */
    public function setNationality($nationality)
    {
        if(!is_string($nationality)) {
            throw new \Excepion('Property nationality expetcs string value, ' . gettype($nationality) . ' given.', 500);
        }

        $this->nationality = $nationality;
    }

    /**
     * @return mixed
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * @param $age
     * @throws Excepion
     */
    public function setAge($age)
    {
        if(!is_numeric($age)) {
            throw new \Excepion('Property age expetcs numeric value, ' . gettype($age) . ' given.', 500);
        }

        $this->age = $age;
    }

    /**
     * @return mixed]
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param $martialStatus
     * @throws Exception
     */
    public function setMartialStatus($martialStatus)
    {
        if($martialStatus !== 'single' && $martialStatus !== 'married') {
             throw new \Exception('Unknown martial satus.', 500);
        }

        $this->martialStatus = $martialStatus;
    }

    /**
     * @return mixed
     */
    public function getMartialStatus()
    {
        return $this->martialStatus;
    }

    /**
     * @param $occupation
     * @throws Excepion
     */
    public function setOccupation($occupation)
    {
        if(!is_string($occupation)) {
            throw new \Excepion('Propery occupation expetcs numeric value, ' . gettype($occupation) . ' given.', 500);
        }

        $this->occupation = $occupation;
    }

    /**
     * @return mixed
     */
    public function getOccupation()
    {
        return $this->occupation;
    }
}