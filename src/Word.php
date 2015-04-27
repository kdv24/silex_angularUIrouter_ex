<?php

    class Word {
        private $name;
        private $id;

        function __construct($name, $id = null) {
            $this->name = $name;
            $this->id = $id;
        }

        //-----------------getter-functions-----------

        function getName() {
            return $this->name;
        }

        function getId() {
            return $this->id;
        }

        //-----------------setter-functions-----------

        function setName($name) {
            $this->name = $name;
        }

        function setId($id) {
            $this->id = $id;
        }

        //-----------------------------------------------

        function save() {
            array_push($_SESSION['things'], $this);
        }

        //----------------static-functions----------------

        static function getAll() {
            return $_SESSION['things'];
        }

    };

?>
