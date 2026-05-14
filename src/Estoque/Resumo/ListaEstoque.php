<?php

namespace OmieLib\Estoque\Resumo;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Resumo\Request\ObterEstoqueProdRequest;
use OmieLib\Estoque\Resumo\Response\ObterEstoqueProdResponse;

/**
 * Exibe os totais de estoque do produto.
 *
 * @pw_element integer $nIdlocal Código do local do estoque.
 * @pw_element decimal $nFisico Indica a quantidade física em estoque para o produto.
 * @pw_element decimal $nReservado Indica a quantidade reservada do estoque para o produto.
 * @pw_element decimal $nPrevisaoSaida Indica a quantidade prevista de saída do produto.
 * @pw_element decimal $nPrevisaoEntrada Indica a quantidade prevista de entrada do produto.
 * @pw_element decimal $nDisponivel Indica a quantidade disponivel de estoque do produto.
 * @pw_element decimal $nCMC Valor do CMC da Estoque do produto.
 * @pw_element decimal $nPrecoUnitario Preço Unitário de venda.
 * @pw_element decimal $nPrecoUltComp Preço unitário da última compra do produto.
 * @pw_element string $dDtUltComp Data da última compra do produto.
 * @pw_element decimal $nEstoqueMinimo Estoque mínimo para o produto.
 * @pw_element string $cIcone Unicode do Ícone.
 * @pw_element string $cCor Hexadecimal da cor.
 * @pw_element string $cDescricaoLocal Descrição do local de estoque.
 * @pw_complex listaEstoque
 */
class ListaEstoque{
	/**
	 * Código do local do estoque.
	 *
	 * @var integer
	 */
	public int $nIdlocal;
	/**
	 * Indica a quantidade física em estoque para o produto.
	 *
	 * @var decimal
	 */
	public float $nFisico;
	/**
	 * Indica a quantidade reservada do estoque para o produto.
	 *
	 * @var decimal
	 */
	public float $nReservado;
	/**
	 * Indica a quantidade prevista de saída do produto.
	 *
	 * @var decimal
	 */
	public float $nPrevisaoSaida;
	/**
	 * Indica a quantidade prevista de entrada do produto.
	 *
	 * @var decimal
	 */
	public float $nPrevisaoEntrada;
	/**
	 * Indica a quantidade disponivel de estoque do produto.
	 *
	 * @var decimal
	 */
	public float $nDisponivel;
	/**
	 * Valor do CMC da Estoque do produto.
	 *
	 * @var decimal
	 */
	public float $nCMC;
	/**
	 * Preço Unitário de venda.
	 *
	 * @var decimal
	 */
	public float $nPrecoUnitario;
	/**
	 * Preço unitário da última compra do produto.
	 *
	 * @var decimal
	 */
	public float $nPrecoUltComp;
	/**
	 * Data da última compra do produto.
	 *
	 * @var string
	 */
	public string $dDtUltComp;
	/**
	 * Estoque mínimo para o produto.
	 *
	 * @var decimal
	 */
	public float $nEstoqueMinimo;
	/**
	 * Unicode do Ícone.
	 *
	 * @var string
	 */
	public string $cIcone;
	/**
	 * Hexadecimal da cor.
	 *
	 * @var string
	 */
	public string $cCor;
	/**
	 * Descrição do local de estoque.
	 *
	 * @var string
	 */
	public string $cDescricaoLocal;
}
