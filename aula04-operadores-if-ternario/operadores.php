<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>

<body>
    <h1> Operadores </h1>

    <h2> operadores binários </h2>

    <p> >> (shift right) = divide o valor da variável por 2</p>
    <p>
        << (shiflt left)=multiplica o valor da variável por 2 </2>
            <?php
            $a = 2;

            echo '<p> variável $a vale ' . $a . ' - representação binária 0010 </p>';

            echo '<p> usando operador << na variável $a: <br>
                   $a = $a<<2;
                   <br>
                   o valor da variável é deslocado dois bits para esquerda, preenche com dois bits zero a direita
                   </p>';
            $a = $a << 2;
            echo '<p> novo valor da variável $a : ' . $a . '- representação binária 1000</p>';



            ?>
            <h2> comparação </h2>

            <table border="1">
                <tr>
                    <td> = </td>
                    <td> um sinal de igual </td>
                    <td> atribuição </td>
                    <td>
                        Vai substituir o valor da variável $a pelo valor da variável $b.<br>
                        Como 10 é um valor que o PHP considera verdadeiro, irá mostrar "iguais"
                        <pre>
                            $a = 0;
                            $b = 10;
                            if ($a = $b ) {
                                echo "iguais";
                            } else {
                                echo "diferente";
                            }
                        </pre>
                    </td>
                </tr>
                <tr>
                    <td> == </td>
                    <td> dois sinais de igual </td>
                    <td> compara valor </td>
                    <td>
                        Mostrará "iguais"
                        <pre>
                            $a = "10";
                            $b = 10;
                            if ($a == $b ) {
                                echo "iguais";
                            } else {
                                echo "diferente";
                            }
                        </pre>
                    </td>
                </tr>
                <tr>
                    <td> === </td>
                    <td> três sinais de igual </td>
                    <td> compara valor e tipo da variável </td>
                    <td>
                        Mostrará "diferente"
                        <pre>
                            $a = "10";
                            $b = 10;
                            if ($a === $b ) {
                                echo "iguais";
                            } else {
                                echo "diferente";
                            }
                        </pre>
                    </td>                    
                </tr>
            </table>
</body>

</html>