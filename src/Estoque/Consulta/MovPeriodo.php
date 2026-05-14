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
 * Movimentação no período.
 *
 * @pw_element string $tipo tipo do lançamento (Anterior,Entrada,Saída,Atual)
 * @pw_element decimal $qtde Quantidade do Movimento
 * @pw_element decimal $cmcUnitario Custo Médio Contábil.
 * @pw_element decimal $cmcTotal CMC Total
 * @pw_complex movPeriodo
 */
class MovPeriodo{
	/**
	 * tipo do lançamento (Anterior,Entrada,Saída,Atual)
	 *
	 * @var string
	 */
	public string $tipo;
	/**
	 * Quantidade do Movimento
	 *
	 * @var decimal
	 */
	public float $qtde;
	/**
	 * Custo Médio Contábil.
	 *
	 * @var decimal
	 */
	public float $cmcUnitario;
	/**
	 * CMC Total
	 *
	 * @var decimal
	 */
	public float $cmcTotal;
}
