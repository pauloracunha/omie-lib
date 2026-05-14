<?php

namespace OmieLib\Servicos\Osdocs\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Osdocs\OsDocsJsonClient;
use OmieLib\Servicos\Osdocs\Response\ObterDemonstResponse;
use OmieLib\Servicos\Osdocs\Response\ObterNFSeResponse;
use OmieLib\Servicos\Osdocs\Response\ObterOsResponse;
use OmieLib\Servicos\Osdocs\Response\ObterRPSResponse;
use OmieLib\Servicos\Osdocs\Response\ObterReciboResponse;
use OmieLib\Servicos\Osdocs\Response\ObterViaUnicaResponse;

/**
 * Solicita as informações de uma nota fiscal Via Única
 *
 * @pw_element integer $nIdNf ID do documento fiscal.<BR><BR>Essa informação pode ser obtida pela API:<BR>/api/v1/mobile/faturamento/<BR>Retornado na tag 'nIdDoc'<BR><BR>Preenchimento obrigatório.
 * @pw_complex ObterViaUnicaRequest
 */
class ObterViaUnicaRequest{
	/**
	 * ID do documento fiscal.<BR><BR>Essa informação pode ser obtida pela API:<BR>/api/v1/mobile/faturamento/<BR>Retornado na tag 'nIdDoc'<BR><BR>Preenchimento obrigatório.
	 *
	 * @var integer
	 */
	public int $nIdNf;
}
