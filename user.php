<?php
    use Endroid\QrCode\QrCode;
    
    class User {
            function __construct($url) {
                $this->url = $url;
            }
            function getData() {
                $jsonObj = json_decode(file_get_contents($this->url));
                return $jsonObj;
            }
            function getDomain($jsonObj) {
                $email = $jsonObj->email;
                if (($pos = strpos($email, "@")) !== FALSE) { 
                $emailDomain = substr($email, $pos+1); 
                } else {
                echo "Error geting user email domain: ". "<br>";
                }
                return $emailDomain;
            }
        }

        function getPersonData($jsonObj) {
            $data = serialize($jsonObj);
            $myJSON = json_encode($jsonObj);
  
            echo "User JSON data:  ". $myJSON . "<br>";
  
            $qr = new QrCode($data);
            $qr->writeFile("qr.png");
  
            $imgUrl = "qr.png";
  
            return $imgUrl;
        }
?>