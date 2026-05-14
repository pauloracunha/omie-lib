<?php

namespace OmieLib\Estoque\Consulta;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Consulta\Request\EstoqueMovimentoRequest;
use OmieLib\Estoque\Consulta\Request\ListarEstPosRequest;
use OmieLib\Estoque\Consulta\Request\ListarMovEstoqueRequest;
use OmieLib\Estoque\Consulta\Response\EstoqueMovimentoResponse;
use OmieLib\Estoque\Consulta\Response\ListarEstPosResponse;
use OmieLib\Estoque\Consulta\Response\ListarMovEstoqueResponse;

/**
 * Posição do estoque dos produtos encontrados.
 *
 * @pw_element integer $nCodProd Código do Produto.
 * @pw_element string $cCodInt Código de Integração do Produto.
 * @pw_element string $cCodigo Código do produto.<BR>(Visualizado na tela).
 * @pw_element string $cDescricao Descrição do Produto.
 * @pw_element decimal $nPrecoUnitario Preço Unitário de venda.
 * @pw_element decimal $nSaldo Saldo do produto.
 * @pw_element decimal $nCMC Custo Médio Contábil.
 * @pw_element decimal $nPendente Saldo pendente em pedidos de venda em aberto (não faturados) e não cancelados.
 * @pw_element decimal $estoque_minimo Estoque mínimo para o produto.
 * @pw_element integer $codigo_local_estoque Código do local do estoque.
 * @pw_element decimal $reservado Indica a quantidade reservada do estoque para o produto.
 * @pw_element decimal $fisico Indica a quantidade física em estoque para o produto.
 * @pw_complex produtos
 */
class Produtos{
	/**
	 * Código do Produto.
	 *
	 * @var integer
	 */
	public int $nCodProd;
	/**
	 * Código de Integração do Produto.
	 *
	 * @var string
	 */
	public string $cCodInt;
	/**
	 * Código do produto.<BR>(Visualizado na tela).
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Descrição do Produto.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Preço Unitário de venda.
	 *
	 * @var decimal
	 */
	public float $nPrecoUnitario;
	/**
	 * Saldo do produto.
	 *
	 * @var decimal
	 */
	public float $nSaldo;
	/**
	 * Custo Médio Contábil.
	 *
	 * @var decimal
	 */
	public float $nCMC;
	/**
	 * Saldo pendente em pedidos de venda em aberto (não faturados) e não cancelados.
	 *
	 * @var decimal
	 */
	public float $nPendente;
	/**
	 * Estoque mínimo para o produto.
	 *
	 * @var decimal
	 */
	public float $estoque_minimo;
	/**
	 * Código do local do estoque.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Indica a quantidade reservada do estoque para o produto.
	 *
	 * @var decimal
	 */
	public float $reservado;
	/**
	 * Indica a quantidade física em estoque para o produto.
	 *
	 * @var decimal
	 */
	public float $fisico;
}
