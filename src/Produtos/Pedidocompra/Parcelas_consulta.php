<?php

namespace OmieLib\Produtos\Pedidocompra;

use OmieLib\Common\OmieFail;

/**
 * Parcelas do Pedido de Compras
 *
 * @pw_element integer $nParcela Número da parcela
 * @pw_element string $dVencto Data de vencimento da parcela
 * @pw_element decimal $nValor Valor da parcela
 * @pw_element integer $nDias Dias para vencimento da parcela (a partir da data de previsão de entrega)
 * @pw_element decimal $nPercent Percentual da parcela em relação ao total do pedido de compra
 * @pw_element string $cTipoDoc Tipo de Documento.<BR>Preenchimento opcional.<BR><BR>Lista de tipos de documentos em:<BR>/api/v1/geral/tiposdoc
 * @pw_complex parcelas_consulta
 */
class Parcelas_consulta{
	/**
	 * Número da parcela
	 *
	 * @var integer
	 */
	public int $nParcela;
	/**
	 * Data de vencimento da parcela
	 *
	 * @var string
	 */
	public string $dVencto;
	/**
	 * Valor da parcela
	 *
	 * @var decimal
	 */
	public float $nValor;
	/**
	 * Dias para vencimento da parcela (a partir da data de previsão de entrega)
	 *
	 * @var integer
	 */
	public int $nDias;
	/**
	 * Percentual da parcela em relação ao total do pedido de compra
	 *
	 * @var decimal
	 */
	public float $nPercent;
	/**
	 * Tipo de Documento.<BR>Preenchimento opcional.<BR><BR>Lista de tipos de documentos em:<BR>/api/v1/geral/tiposdoc
	 *
	 * @var string
	 */
	public string $cTipoDoc;
}
