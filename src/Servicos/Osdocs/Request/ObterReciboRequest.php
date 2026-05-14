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
 * Solicita as informaçoes de um recibo
 *
 * @pw_element integer $nIdRec ID do recibo.<BR>Informe aqui o ID do recibo.<BR><BR>Essa informação pode ser obtida pela API:<BR>api/v1/servicos/os/#osStatus<BR><BR>preenchimento obrigatório.
 * @pw_complex ObterReciboRequest
 */
class ObterReciboRequest{
	/**
	 * ID do recibo.<BR>Informe aqui o ID do recibo.<BR><BR>Essa informação pode ser obtida pela API:<BR>api/v1/servicos/os/#osStatus<BR><BR>preenchimento obrigatório.
	 *
	 * @var integer
	 */
	public int $nIdRec;
}
