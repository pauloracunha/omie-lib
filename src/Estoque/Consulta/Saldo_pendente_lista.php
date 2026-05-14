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
 * Estoque mínimo para o produto.
 *
 * @pw_element integer $codigo_local_estoque Código do local do estoque.
 * @pw_element integer $id_prod Código do Produto.
 * @pw_element decimal $qtde_saida Quantidade pendente de saída.
 * @pw_element decimal $qtde_entrada Quantidade pendente de entrada.
 * @pw_complex saldo_pendente_lista
 */
class Saldo_pendente_lista{
	/**
	 * Código do local do estoque.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Código do Produto.
	 *
	 * @var integer
	 */
	public int $id_prod;
	/**
	 * Quantidade pendente de saída.
	 *
	 * @var decimal
	 */
	public float $qtde_saida;
	/**
	 * Quantidade pendente de entrada.
	 *
	 * @var decimal
	 */
	public float $qtde_entrada;
}
