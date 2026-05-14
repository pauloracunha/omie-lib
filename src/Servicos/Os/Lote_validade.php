<?php

namespace OmieLib\Servicos\Os;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Os\Request\OsListarRequest;
use OmieLib\Servicos\Os\Request\OsObterRequest;
use OmieLib\Servicos\Os\Request\OsStatusRequest;
use OmieLib\Servicos\Os\Request\OsTrocarEtapaRequest;
use OmieLib\Servicos\Os\Response\OsListarResponse;
use OmieLib\Servicos\Os\Response\OsObterResponse;
use OmieLib\Servicos\Os\Response\OsStatusResponse;
use OmieLib\Servicos\Os\Response\OsTrocarEtapaResponse;

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
