# SPSNotifica
Autor: Lucas Ghilardi
E-mail: lucasmghilardi@gmail.com
Retorno Bradesco SPSNotifica v1 2 2 - PHP
Versão Utilizada PHP 7.4

Exemplo de codigo em PHP Para realizar a descriptografia do Bradesco. 
Retorno PIX / Boleto 

algoritmo utilizado AES-256 CBC utilizando a cifra AES/CBC/PKCS5PADDING


Salt = string com valor fixo em ComercioBradesco
dkLen = numérico fixo em 65536
Iteration = numérico fixo em 256
Vetor de inicialização deve ser preenchido com o array de bytes 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0



