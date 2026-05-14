<?php

namespace OmieLib\Crm\Contascaract\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contascaract\Caracteristicas;
use OmieLib\Crm\Contascaract\ContasCaracteristicasJsonClient;
use OmieLib\Crm\Contascaract\Response\AlterarCaractCRMContaResponse;
use OmieLib\Crm\Contascaract\Response\ConsultarCaractCRMContaResponse;
use OmieLib\Crm\Contascaract\Response\ExcluirCaractCRMContaResponse;
use OmieLib\Crm\Contascaract\Response\ExcluirTodasCaractCRMContaResponse;
use OmieLib\Crm\Contascaract\Response\IncluirCaractCRMContaResponse;

/**
 * Consulta todas as características de uma conta.
 *
 * @pw_element integer $nCod Código da conta
 * @pw_element string $cCodInt Código de integração com sistemas legados
 * @pw_complex ConsultarCaractCRMContaRequest
 */
class ConsultarCaractCRMContaRequest{
	/**
	 * Código da conta
	 *
	 * @var integer
	 */
	public int $nCod;
	/**
	 * Código de integração com sistemas legados
	 *
	 * @var string
	 */
	public string $cCodInt;
}
