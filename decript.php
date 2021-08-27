<?php function decrypt_sps($string,$pedido)
 {
     /* =================================================
      * BRADESCO SPS NOTIFICA - PHP
        Autor: Lucas Ghilardi
        E-mail: lucasmghilardi@gmail.com
      * =================================================
     
      */
     $output = false;
     $encrypt_method = "AES-256-CBC";
     $salt="ComercioBradesco";
     //CHAVE BRADESCO SITE
     $key = 'TBiIVqybXXYqZGNuVzpLdw6qRxON3vfXakUYlBQPKH4';
     //PEDIDO JSON
     
     $secret_key=$key.$pedido;
     // hash
     $key = hash('sha256', $secret_key);
     $key = openssl_pbkdf2($secret_key,$salt,'256','65536', 'sha256'); 

     // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
     $iv = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
     $chars = array_map("chr", $iv);
     $IVbytes = join($chars);
     
     
             $output = openssl_decrypt(($string), $encrypt_method, $key, 0, $IVbytes);
         
     
     return $output;
 }



 //JSON RETORNO BRADESCO - TRANSFORME EM OBJETO
 
$data = json_decode('{"pedido":{"numero":"758","merchantid":"200001357","dados":"x2NxTdUrp\/ty\/mCsq4QSftu4Jd8yPS2EzD4ZyXui2q31Uo1RgtcqmlTR6NS+zVK5G8CUSFPpvJAxdLL2FEV26H8LNZSDviVPAyh7u61qMoEroZAfK3Ca4u0yRs\/xhM2+"}}');

//PEGA PRODUTO
$pedido =  $data->pedido->numero;
//DADOS Encriptados 
$data =  $data->pedido->dados;

//DADOS ABERTOS 
$dados =  decrypt_sps($data,$pedido);
$dados= json_decode($dados);


//Valor pago ex 1000 = R$ 10,00
$valor_pago = $dados->valorPago/100;

//CODIGO 121 - PAGO
  $status = $dados->status;
 $pedido = $dados->pedido;

 ?>
