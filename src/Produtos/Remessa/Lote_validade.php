<?php

namespace OmieLib\Produtos\Remessa;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Remessa\Request\RemessaDevolverRequest;
use OmieLib\Produtos\Remessa\Request\RemessaListarRequest;
use OmieLib\Produtos\Remessa\Request\RemessaStatusRequest;
use OmieLib\Produtos\Remessa\Response\RemessaDevolverResponse;
use OmieLib\Produtos\Remessa\Response\RemessaListarResponse;
use OmieLib\Produtos\Remessa\Response\RemessaStatusResponse;

/**
 * Informações referentes ao lote e validade do produto.
 *
 * @pw_element integer $nIdLote Id do Lote do produto.<BR><BR>Obrigatório quando o produto possui controle de lote e o método do consumo do lote está definido como 'Manual' nas configurações..
 * @pw_element decimal $nQtdLote Informe aqui a quantidade do Lote para o produto.<BR><BR>É obrigatório quando o produto possui controle de lote e o método do consumo do lote está definido como 'Manual' nas configurações.
 * @pw_complex lote_validade
 */
class Lote_validade{
	/**
	 * Id do Lote do produto.<BR><BR>Obrigatório quando o produto possui controle de lote e o método do consumo do lote está definido como 'Manual' nas configurações..
	 *
	 * @var integer
	 */
	public int $nIdLote;
	/**
	 * Informe aqui a quantidade do Lote para o produto.<BR><BR>É obrigatório quando o produto possui controle de lote e o método do consumo do lote está definido como 'Manual' nas configurações.
	 *
	 * @var decimal
	 */
	public float $nQtdLote;
}
