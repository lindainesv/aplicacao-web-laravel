<?php

// class ViaCEP {
//   /**
//    * Metodo responsavel por consultar CEP no ViaCEP
//    * @param string $cep
//    * @return array
//    */
//   public static function consultarCEP($cep){
//     //Inicia o CURL
//     $curl = curl_init();

//     //Configura o CURL
//     curl_setopt_array($curl, [
//       CURLOPT_URL => 'https://viacep.com.br/ws/'.$cep.'/json/',
//       CURLOPT_RETURNTRANSFER => true,
//       CURLOPT_CUSTOMREQUEST => 'GET'
//     ]);

//     //Response
//     $response = curl_exec($curl);

//     //Fecha o CURL
//     curl_close($curl);

//     //Retorna os dados
//     print_r($response);

//     //Converte o JSON para ARRAY
//     $array = json_decode($response, true);

//     //Retorna os dados
//     return isset($array['cep']) ? $array : null;
//   }

//   // public static function consultarCEP($cep){
//   //   echo "<pre> ";
//   //   print_r($cep);
//   //   echo " <pre>"; exit;
//   // }
// }

// class ViaCEP {
  // $cep = $_POST['cep'];

// public static function consultarCEP($cep) {
  $cep = "25710251";

  $url = "https://viacep.com.br/ws/{$cep}/json/";

  $address = json_decode(file_get_contents($url));

  var_dump($address);

  // return view('home')->with('address', $address);
// }
// }

?>