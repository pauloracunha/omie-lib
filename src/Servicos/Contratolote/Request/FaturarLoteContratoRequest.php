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
 * Faturar Contrato de Serviço em lote
 *
 * @pw_element string $cCodIntLote Codigo integração do Lote.<BR><BR>Preenchimento Opcional.
 * @pw_complex FaturarLoteContratoRequest
 */
class FaturarLoteContratoRequest{
	/**
	 * Codigo integração do Lote.<BR><BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $cCodIntLote;
}
