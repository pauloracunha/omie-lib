<?php

namespace OmieLib\Servicos\Oslote\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Oslote\Detalhes;
use OmieLib\Servicos\Oslote\Lotes;
use OmieLib\Servicos\Oslote\NfseLote;
use OmieLib\Servicos\Oslote\OrdemServicoLoteJsonClient;
use OmieLib\Servicos\Oslote\Response\FaturarLoteOSResponse;
use OmieLib\Servicos\Oslote\Response\ListarLoteNfseResponse;
use OmieLib\Servicos\Oslote\Response\ListarLotesOSResponse;
use OmieLib\Servicos\Oslote\Response\StatusLoteOsResponse;

/**
 * Obtém o status do Lote da Ordem de Serviço
 *
 * @pw_element integer $nIdLoteFat Id do Lote de Faturamento da Ordem de Serviço
 * @pw_complex StatusLoteOsRequest
 */
class StatusLoteOsRequest{
	/**
	 * Id do Lote de Faturamento da Ordem de Serviço
	 *
	 * @var integer
	 */
	public int $nIdLoteFat;
}
