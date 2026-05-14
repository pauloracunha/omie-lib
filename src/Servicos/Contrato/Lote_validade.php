<?php

namespace OmieLib\Servicos\Contrato;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contrato\Request\CsConsultarRequest;
use OmieLib\Servicos\Contrato\Request\CsExcluirItemRequest;
use OmieLib\Servicos\Contrato\Request\CsListarRequest;
use OmieLib\Servicos\Contrato\Response\CsConsultarResponse;
use OmieLib\Servicos\Contrato\Response\CsExcluirItemResponse;
use OmieLib\Servicos\Contrato\Response\CsListarResponse;

/**
 * Informações referentes ao lote e validade do produto.
 *
 * @pw_element integer $nIdLote Id do lote do produto.<BR><BR>Obrigatório quando o produto possui controle de lote e o método do consumo do lote está definido como 'Manual' nas configurações..
 * @pw_element decimal $nQtdLote Informe aqui a quantidade do lote para o produto.<BR><BR>É obrigatório quando o produto possui controle de lote e o método do consumo do lote está definido como 'Manual' nas configurações.
 * @pw_complex lote_validade
 */
class Lote_validade{
	/**
	 * Id do lote do produto.<BR><BR>Obrigatório quando o produto possui controle de lote e o método do consumo do lote está definido como 'Manual' nas configurações..
	 *
	 * @var integer
	 */
	public int $nIdLote;
	/**
	 * Informe aqui a quantidade do lote para o produto.<BR><BR>É obrigatório quando o produto possui controle de lote e o método do consumo do lote está definido como 'Manual' nas configurações.
	 *
	 * @var decimal
	 */
	public float $nQtdLote;
}
