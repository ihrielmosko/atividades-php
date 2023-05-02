<form method="post">
    <input type="text" name="valor1" placeholder="Valor 1"><br/>
    <input type="text" name="valor2" placeholder="Valor 2">
    <input type="submit" name="button0" value="ok">
</form>

<?php
// Impressão de conjunto fechado
if(isset($_POST['button0']))
{
    $val1 = $_POST["valor1"];
    $val2 = $_POST["valor2"];

    for ($i=$val1+1; $i<$val2; $i++) {
        echo $i;
    }
}
?>

<hr/>
<br/>

<form method="post">
    <input type="text" name="multiplicador" placeholder="Número da tabuada">
    <input type="submit" name="button1" value="ok">
</form>

<?php
// Tabuada
if (isset($_POST['button1'])){

    $n = $_POST["multiplicador"];


    for ($i = 0; $i <= 10; $i++) {
  
        echo $n." x ".$i." = ".$n*$i."<br/>";

    }
}
?>

<hr/>
<br/>

<form method="post">
    <input type="text" name="numero1" placeholder="Número 1">
    <select name="operador">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="numero2" placeholder="Número 2">
    <input type="submit" name="button2" value="ok">
</form>

<?php
//Cálculo
if(isset($_POST['button2'])) {
    $num1 = $_POST["numero1"];
    $num2 = $_POST["numero2"];
    $operador = $_POST["operador"];

    switch (operador) {
       case "+":
          echo $num1 + $num2;
           break;
       case "-":
           echo $num1 - $num2;
           break;
      case "*":
          echo $num1 * $num2;
          break;
      case "/":
         echo $num1 / $num2;
         break;
    }
}
?>

<hr/>
<br/>

<?php
//Array de países

$paises = ["Brasil", "Japão", "Alemanha", "Rússia", "China", "EUA", "Índia", "Argélia", "Austália", "Angola"];

for ($i=0; $i<10; $i++) {
    echo $i+1 . " - " . $paises[$i] . "<br/>";
}
?>

<hr/>
<br/>

<form method="post">
    <input type="text" name="n1" placeholder="Número 1"><br/>
    <input type="text" name="n2" placeholder="Número 2"><br/>
    <input type="submit" name="button3" value="ok">
</form>

<?php
//Impressão de conjunto fechado de 2 em 2

if(isset($_POST['button3']))
    {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];

    if ($n1<$n2) {
        for ($i = $n1 + 2; $i < $n2; $i = $i + 2) {
            echo $i;
        }
    } else {echo "O primeiro numero deve ser menor que o segundo";}
}