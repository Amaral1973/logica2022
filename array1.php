<?php
echo '<hr>';
echo '<h2>Array PHP</h2>';
$array1 = array(1,2,3);
$array2 = ["a","b","c"];
print_r($array1);
echo '<br>';
print_r($array2);
echo '<br>';
echo '<hr>';
echo '<h2>Array por Posições</h2>';
echo $array1[2].'<br>';
echo $array2[2].'<br>';
echo '<hr>';
echo '<h2>Array Associativo</h2>';
$arr=array( "nome"=>"Rafael","sobrenome"=>"Marques", "idade"=>"25");
print_r($arr);
echo "<br/><br/>";
echo "Nome: <b>".$arr["nome"]."</b><br/>";
echo "Sobrenome: <b>".$arr["sobrenome"]."</b><br/>";
echo "Idade: <b>".$arr["idade"]."</b>";
echo '<hr>';
echo '<h2>Array Multidimensional</h2>';
$arr=array(
    array("Primeiro valor","Segundo valor"),
    array("Terceiro valor","Quarto valor")
    );
print_r($arr);
echo "<br/>";
print_r($arr[0]);
echo "<br/>";
print_r($arr[1]);
echo '<hr>';
echo '<h2>Array Multidimensional Impressão por Posição</h2>';
print_r($arr[0][0]);
echo "<br/>";
print_r($arr[0][1]);
echo "<br/>";
print_r($arr[1][0]);
echo "<br/>";
print_r($arr[1][1]);
echo '<hr>';
echo '<h2>Contando os elementos de um array</h2>';
$numeros = [1,2,700,13,6,78,100,212,15,2,3,1000,412,6];
echo count($numeros);
echo '<hr>';
echo '<h2>Adicionando um valor a array dinamicamente</h2>';
$arr = array();
$arr[] = 'azul';
$arr[] = 'amarelo';
$arr[] = 'vermelho';
$arr[] = 'verde';
print_r($arr);
echo '<hr>';
echo '<h2>Adicionando um valor a um array já existente</h2>';
$arr=array("primeiro valor", "segundo valor", "terceiro valor"); 
	echo "valor incial da minha array é:<br>";
 	print_r($arr);
	echo "<br/><br/>";
	$arr[] = 'quarto valor';
	$arr[] = 'quinto valor';
	echo "Agora a nossa array é:<br/>";
  	print_r($arr);
	echo "<br/>";
echo '<hr>';
echo '<h2>Adicionar um Novo Elemento no Inicio do Array</h2>';
$frutas=array('maçã','banana','limão');
array_unshift($frutas, 'abacaxi');
print_r($frutas);
echo '<hr>';
echo '<h2>Adicionar um Novo Elemento no Final do Array</h2>';
$frutas=array('maçã','banana','limão');
array_push($frutas, 'abacaxi');
print_r($frutas);
echo '<hr>';
echo '<h2>Remover o Primeiro Elemento de um Array</h2>';
$frutas=array('maçã','banana','limão','abacaxi');
array_shift($frutas);
print_r($frutas);
echo '<hr>';
echo '<h2>Remover o Último Elemento de um Array</h2>';
$frutas=array('maçã','banana','limão','abacaxi');
array_pop($frutas);
print_r($frutas);
echo '<hr>';
echo '<h2>Ordenando os elementos de forma crescente</h2>';
$carros = array("Volvo", "BMW", "Toyota");
sort($carros);
print_r($carros);
echo '<br>';
$numeros = array(3, 6, 2, 52, 11);
sort($numeros);
print_r($numeros);
echo '<hr>';
echo '<h2>Ordenando os elementos de forma decrescente</h2>';
$carros = array("Volvo", "BMW", "Toyota");
rsort($carros);
print_r($carros);
echo '<br>';
$numeros = array(3, 6, 2, 52, 11);
rsort($numeros);
print_r($numeros);
echo '<hr>';
echo '<h2>Ordenando uma array com chaves personalizadas através do valor de forma crescente</h2>';
$idade = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($idade);
print_r($idade);
echo '<hr>';
echo '<h2>Ordenando uma array com chaves personalizadas através do valor de forma decrescente</h2>';
$idade = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($idade);
print_r($idade);
echo '<hr>';
echo '<h2>Ordenando uma array com chaves personalizadas através da Chave de forma crescente</h2>';
$idade = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($idade);
print_r($idade);
echo '<hr>';
echo '<h2>Remover Elementos Repetidos de um Array</h2>';
$frutas=array('maçã','banana','limão','banana','abacaxi','banana','limão');
$frutas=array_unique($frutas);
print_r($frutas);
echo '<hr>';
echo '<h2>Combinando PHP Arrays</h2>';
$frutas=array('maçã','banana','limão');
$legumes=array('batata','cenoura');
$compras=array_merge($frutas,$legumes);
print_r($compras);
echo '<hr>';
echo '<h2>Filtrando Elementos de um Array</h2>';
function filtro($value)
{
    return $value >= 100;
}
$numeros = [1,2,700,13,6,78,100,212,15,2,3,1000,412,6];
$filtrado = array_filter($numeros, 'filtro');
print_r($filtrado);
echo '<hr>';
echo '<h2>Array - Foreach</h2>';
$cores = array("azul", "vermelho", "amarelo", "verde"); 
    foreach ($cores as $value) {
        echo "$value <br>";
    }
echo '<hr>';
echo '<h2>Array - For</h2>';
$cores = array("azul", "vermelho", "amarelo", "verde");
  $valormax=count($cores);
for ($i = 0; $i < $valormax; $i++) {
  echo "$cores[$i] <br>";
}
echo '<hr>';
echo '<h2>Array - While</h2>';
$cores = array("azul", "vermelho", "amarelo", "verde");
  $valormax=count($cores);
  $i=0;
while($i < $valormax){
  echo "$cores[$i] <br>";
  $i++;
}
echo '<hr>';
echo '<h2>Filtrando um valor no Array</h2>';
$valores = array(1,2,3,4,5,6,7,8,9);
foreach ($valores as &$valor) 
{
    if($valor["id"] == "5")
    {
        print_r($valor);
    }
}
echo '<hr>';
echo '<h2>Verificando se existe um registro dentro do array</h2>';
$frutas = array("laranja","caju","banana");
if(in_array('laranja',$frutas) == true){
  echo "Valor encontrado!";
} else {
  echo "Valor não encontrado!";
}
?>