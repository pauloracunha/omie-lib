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
 * Lista as Ordens de Serviço que se encontram em uma etapa do processo de faturamento de ordens de serviço.
 *
 * @pw_element string $cEtapa Código da Etapa.<BR><BR>Valores possíveis:
 * @pw_complex osObterRequest
 */
class OsObterRequest{
	/**
	 * Código da Etapa.<BR><BR>Valores possíveis:
	 *
	 * @var string
	 */
	public string $cEtapa;
}
