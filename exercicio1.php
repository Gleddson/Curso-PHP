<?php

//Créditos a Nick Parlante (CodingBat)

define('SUCESSO', 'Parabens! O teste funcionou!');
define('FALHOU', 'Nao foi dessa vez! Obtido: %s / Esperado: %s');

/**
 * @access public
 * @param mixed $esperado Resultado esperado
 * @param mixed $obtido Resultado Obtido
 * @return string Mensagem de sucesso ou de falha
 */
function test($obtido, $esperado)
{
	if (is_bool($esperado))
		$esperado = $esperado ? 'true' : 'false';

	if (is_bool($obtido))
		$obtido = $obtido ? 'true' : 'false';

	$obtido = is_null($obtido) ? 'NULL' : $obtido;

	echo $obtido === $esperado ?
			 SUCESSO :
			 sprintf(FALHOU, $obtido, $esperado);

	echo PHP_EOL;
}

/**
 * @tutorial
 * 1. Soma Dobro:
 * Sejam dois números inteiros
 * Se ambos forem diferentes entre si, retorna apenas a sua soma,
 * caso contrario, retorna o dobro da sua soma
 *
 * @param int $a
 * @param int $b
 * @return int
 */

function somaDobro($a, $b)
{
	if ($a !== $b) {
		return $a + $b;
	} else {
		return 2*($a + $b);
	}
}

/**
 * @tutorial
 * 2. Papagaio:
 * Temos um papagaio que fala muito alto
 * $hora é um parâmetro entre 0 e 23
 * Teremos problemas se o papagaio estiver falando
 * antes das 7 e depois das 20 (retorna true)
 * @param boolean $falando
 * @param int $hora
 * @return boolean
 */

function papagaio($falando, $hora)
{
	if ($hora < 7 and $hora > 20) {
		return true;
	} else {
		return false;
	}
}

/**
 * @tutorial
 * 3. Problema Alunos:
 * Temos 2 alunos A e B
 * $a_sorri e $b_sorri representam o estado dos alunos A e B, se eles sorriem ou não.
 * Teremos problemas se ambos estiverem sorrindo ou se ambos não estiverem sorrindo
 * Retorna true se tivermos problemas
 * @param boolean $a_sorri
 * @param boolean $b_sorri
 * @return boolean
 */

function problemaAlunos($a_sorri, $b_sorri)
{
	if ($a_sorri == true and $b_sorri == true) {
		return true;
	} elseif ($a_sorri == false and b_sorri == false) {
		return true;
	} else {
		return false;
	}
}

/**
 * @tutorial
 * 4. Dormir:
 * $dia_semana é true para dias úteis
 * $feriado é true nos feriados
 * Você pode ficar dormindo quando é feriado ou não é dia útil
 * Retorna true ou false conforme você vá dormir ou não
 * @param boolean $dia_semana
 * @param boolean $feriado
 * @return boolean
 */

function dormir($dia_semana, $feriado)
{
	if ($dia_semana == false or $feriado == true) {
		return true;
	} else {
		return false;
	}
}

/**
 * @tutorial
 * 5. Diff21:
 * Dado um inteiro $n, retorna a diferença absoluta entre $n e 21
 * Porém, se $n for maior que 21, retorna o dobro da diferença absoluta
 * diff(19) -> 2
 * diff(21) -> 8
 * Dica: abs($n) retorna o valor absoluto de $n (http://php.net/manual/pt_BR/function.abs.php)
 * @param int $n
 * @return int
 */

function diff21($n)
{
	if($n > 21){
		return abs(2*(21-$n));
	}
	return (21-$n);
}

/**
 * @tutorial
 * 6. Inverte:
 * Seja uma string $s
 * Se $s tiver tamanho menor que 1, retorna ela mesma
 * caso contrário, $s é invertida
 * inverte('code') -> 'edoc'
 * inverte('a') -> 'a'
 * inverte('ab') -> 'ba'
 * Dica 1: strlen($s) retorna o tamanho da string (http://php.net/manual/pt_BR/function.strlen.php)
 * Dica 2: strrev($s) retorna a string invertida (http://php.net/manual/pt_BR/function.strrev.php)
 * @param string $s
 * @return string
 */

function inverte($s)
{
	if (strlen($s) < 1) {
		return $s;
	}
	return strrev($s);
}

/**
 * @tutorial
 * 7. Apaga:
 * Seja uma string $s e um inteiro $n
 * Retorna uma nova string sem a posição $n
 * apaga('code', 2) -> 'coe'
 * apaga('code', 0) -> 'ode'
 * Dica 1: substr_replace() permite substituir caracteres de uma string (http://php.net/manual/pt_BR/function.substr-replace.php)
 * @param string $s
 * @param int $n
 * @return string
 */

function apaga($s, $n)
{
	$s = substr_replace($s, '' , $n);
	return $s;
}

/**
 * @tutorial
 * 8. Dez:
 * Dados dois inteiros $a e $b
 * Retorna true se um dos dois é 10 ou se a soma de ambos é 10
 * @param int $a
 * @param int $b
 * @return boolean
 */

function dez($a, $b)
{
	if ($a == 10 or $b == 10 or ($a + $b) == 10) {
		return true;
	}
	return false;
}

/**
 * @tutorial
 * 9. Dista10:
 * Dados um inteiro $n
 * Retorna true se a diferença absoluta entre $n e 100 ou $n e 200
 * for menor ou igual a 10
 * dista10(93) -> true
 * dista10(101) -> true
 * dista10(142) -> false
 * @param int $n
 * @return boolean
 */

function dista10($n)
{
	if (abs(100-$n) <= 10 or abs(200-$n) <= 10) {
		return true;
	}
	return false;
}

echo '1. Soma Dobro:' . PHP_EOL;
test(somaDobro(1, 2), 3);
test(somaDobro(2, 2), 8);
test(somaDobro(2, 1), 3);
test(somaDobro(3, 3), 12);

echo PHP_EOL . PHP_EOL;

echo '2. Papagaio:' . PHP_EOL;
test(papagaio(true, 6), true);
test(papagaio(true, 10), false);
test(papagaio(false, 19), false);
test(papagaio(true, 21), true);

echo PHP_EOL . PHP_EOL;

echo '3. Problema Alunos:' . PHP_EOL;
test(problemaAlunos(true, true), true);
test(problemaAlunos(true, false), false);
test(problemaAlunos(false, true), false);
test(problemaAlunos(false, false), true);

echo PHP_EOL . PHP_EOL;

echo '4. Dormir:' . PHP_EOL;
test(dormir(true, true), true);
test(dormir(true, false), false);
test(dormir(false, true), true);
test(dormir(false, false), true);

echo PHP_EOL . PHP_EOL;

echo '5. Diff21:' . PHP_EOL;
test(diff21(19), 2);
test(diff21(25), 8);
test(diff21(10), 11);
test(diff21(31), 20);

echo PHP_EOL . PHP_EOL;

echo '6. Inverte:' . PHP_EOL;
test(inverte('code'), 'edoc');
test(inverte('b'), 'b');
test(inverte('php'), 'php');
test(inverte('inverte'), 'etrevni');

echo PHP_EOL . PHP_EOL;

echo '7. Apaga:' . PHP_EOL;
test(apaga('code', 1), 'cde');
test(apaga('curso', -1), 'curs');
test(apaga('php', 2), 'ph');
test(apaga('apaga', 4), 'apag');

echo PHP_EOL . PHP_EOL;

echo '8. Dez:' . PHP_EOL;
test(dez(10, 10), true);
test(dez(10, 3), true);
test(dez(1, 2), false);
test(dez(3, 7), true);

echo PHP_EOL . PHP_EOL;

echo '9. Dista10:' . PHP_EOL;
test(dista10(93), true);
test(dista10(110), true);
test(dista10(142), false);
test(dista10(205), true);
