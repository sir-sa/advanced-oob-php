<?php 
    class musicPlayer{
        private $track;

        public function __construct($mp3)
        {
            $this->track=$mp3;
        }

        public function setTrack($mp3){
           $this->track=$mp3;
        }

        public function play(){
            echo"playing file {$this->track}";
        }

        // function connect(){
        //     try {
        //         //code...
        //         $this->db_conn=new PDO("mysqli::host=$this->db_host, dbname=$this->db_name",$this->db_user, $this->db_pass);
        //     } catch (PDOException $ex) {
        //         //throw $th;
        //         return $ex->getMessage();
        //     }
            
        // }
    }
?>