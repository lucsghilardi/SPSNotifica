# SPSNotifica Bradesco
Autor: Lucas Ghilardi<br>
E-mail: lucasmghilardi@gmail.com<br>
Retorno Bradesco SPSNotifica v1 2 2 - PHP<br>
Versão Utilizada PHP 7.4<br><br>

Exemplo de codigo em PHP Para realizar a descriptografia do Bradesco. <br>
Retorno PIX / Boleto <br><br>

Algoritmo utilizado AES-256 CBC utilizando a cifra AES/CBC/PKCS5PADDING<br><br>


Salt = string com valor fixo em ComercioBradesco<br>
dkLen = numérico fixo em 65536<br>
Iteration = numérico fixo em 256<br>
Vetor de inicialização deve ser preenchido com o array de bytes 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0



