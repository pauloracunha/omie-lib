<?php

namespace OmieLib\Servicos\Contratolote\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contratolote\ContratoLoteJsonClient;
use OmieLib\Servicos\Contratolote\Detalhes;
use OmieLib\Servicos\Contratolote\Lotes;
use OmieLib\Servicos\Contratolote\Response\FaturarLoteContratoResponse;
use OmieLib\Servicos\Contratolote\Response\ListarLotesContratoResponse;
use OmieLib\Servicos\Contratolote\Response\StatusLoteContratoResponse;

/**
 * Obtém o status do Lote do Contrato de Serviço
 *
 * @pw_element integer $nIdLoteFat Id do Lote de Faturamento da Controle de Serviço
 * @pw_complex StatusLoteContratoRequest
 */
class StatusLoteContratoRequest{
	/**
	 * Id do Lote de Faturamento da Controle de Serviço
	 *
	 * @var integer
	 */
	public int $nIdLoteFat;
}
