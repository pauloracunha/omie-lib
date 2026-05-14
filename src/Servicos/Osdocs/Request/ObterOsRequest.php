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
 * Solicita as informações de uma Ordem de Serviço
 *
 * @pw_element integer $nIdOs Filtra os registros pelo ID.
 * @pw_complex ObterOsRequest
 */
class ObterOsRequest{
	/**
	 * Filtra os registros pelo ID.
	 *
	 * @var integer
	 */
	public int $nIdOs;
}
