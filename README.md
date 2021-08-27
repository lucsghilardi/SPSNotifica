# SPSNotifica
##Autor: Lucas Ghilardi
##E-mail: lucasmghilardi@gmail.com
##Retorno Bradesco SPSNotifica v1 2 2 - PHP
##Versão Utilizada PHP 7.4

##Exemplo de codigo em PHP Para realizar a descriptografia do Bradesco. 
##Retorno PIX / Boleto 

$$Algoritmo utilizado AES-256 CBC utilizando a cifra AES/CBC/PKCS5PADDING


Salt = string com valor fixo em ComercioBradesco<br>
dkLen = numérico fixo em 65536<br>
Iteration = numérico fixo em 256<br>
Vetor de inicialização deve ser preenchido com o array de bytes 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0



