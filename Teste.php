<?php

    //Variaveis
        //Strings
            $nome = "Vitor"; 
            $sobreNome = "Marques";
        //Números
            //Soma
                $num1 = 10;
                $num2 = 20;
                $num3 = 30;
                $num4 = 40;
                $media = ($num1+$num2+$num3+$num4)/4;
            //Subtração
                $calc1 = $media -$num1;
            //Multiplicação
                $total = $num1*$num2*$num3*$num4;
            //Resto //Trás o resto da conta
                $calca = $num2 % $num1;
            //Porcento
                $Porcen1 = 1000;
                $Porcen2 = 0.15;
                $PorcenTotal = ($Porcen1 * $Porcen2);//1000*0.15
                $PorcenTotal2 = ($num1 * $num2)/2; //10*20/2

    //echo é a função para "printar" na tela
    echo "Olá Mundo";
    echo "<br><br>";
    echo $nome;
    echo "<br>";
    echo $sobreNome;
    echo "<br><br>";

    //Contas
            echo "$num1  $num2  $num3  $num4";
            echo "<br><br>";
        //Média
            echo "A média: " . $media; // O ponto faz a concatenação
            echo "<br><br>";
        //Subtração
            echo "A subtração: $calc1";
            echo "<br><br>";
        //Subtração    
            echo "A multiplicação: $total";
            echo "<br><br>";
        //Porcentagem
            echo "Porcentagem: $PorcenTotal";
            echo "<br>";
            echo "Porcentagem: $PorcenTotal2";
            echo "<br><br>";
        //Resto  //Trás o resto da conta
            echo "O Resto: $calca";

?>