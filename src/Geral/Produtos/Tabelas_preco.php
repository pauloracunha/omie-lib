<?php

namespace OmieLib\Geral\Produtos;

use OmieLib\Common\OmieFail;

/**
 * Lista de tabelas de preço.
 *
 * @pw_element integer $nCodTabPreco Id da tabela de preço.
 * @pw_element string $cNomeTabPreco Nome da tabela de preço.
 * @pw_element decimal $nValorTabPreco Valor do produto na tabela de preço.
 * @pw_complex tabelas_preco
 */
class Tabelas_preco{
	/**
	 * Id da tabela de preço.
	 *
	 * @var integer
	 */
	public int $nCodTabPreco;
	/**
	 * Nome da tabela de preço.
	 *
	 * @var string
	 */
	public string $cNomeTabPreco;
	/**
	 * Valor do produto na tabela de preço.
	 *
	 * @var decimal
	 */
	public float $nValorTabPreco;
}
