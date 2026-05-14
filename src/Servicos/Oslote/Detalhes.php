<?php

namespace OmieLib\Servicos\Oslote;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Oslote\Request\FaturarLoteOSRequest;
use OmieLib\Servicos\Oslote\Request\ListarLoteNfseRequest;
use OmieLib\Servicos\Oslote\Request\ListarLotesOSRequest;
use OmieLib\Servicos\Oslote\Request\StatusLoteOsRequest;
use OmieLib\Servicos\Oslote\Response\FaturarLoteOSResponse;
use OmieLib\Servicos\Oslote\Response\ListarLoteNfseResponse;
use OmieLib\Servicos\Oslote\Response\ListarLotesOSResponse;
use OmieLib\Servicos\Oslote\Response\StatusLoteOsResponse;

/**
 * Ordens de serviços que foram processadas pelo lote filtrado
 *
 * @pw_element integer $nIdPedido Id do pedido processado
 * @pw_element string $cStatus Status do faturamento.<BR><BR>RUNNING<BR>DONE<BR>ERROR
 * @pw_element string $cMensagem Detalhamento do Status do processamento.
 * @pw_complex detalhes
 */
class Detalhes{
	/**
	 * Id do pedido processado
	 *
	 * @var integer
	 */
	public int $nIdPedido;
	/**
	 * Status do faturamento.<BR><BR>RUNNING<BR>DONE<BR>ERROR
	 *
	 * @var string
	 */
	public string $cStatus;
	/**
	 * Detalhamento do Status do processamento.
	 *
	 * @var string
	 */
	public string $cMensagem;
}
