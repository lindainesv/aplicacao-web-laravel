<?php

class vicep {
  public function consultarCEP() {
    $cep = "25710251";
    $url = "https://viacep.com.br/ws/{$cep}/json/";
    $address = json_decode(file_get_contents($url));
    var_dump($address); 
    }
}
?>