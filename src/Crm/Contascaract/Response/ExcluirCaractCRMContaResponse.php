<?php

namespace OmieLib\Crm\Contascaract\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contascaract\Caracteristicas;
use OmieLib\Crm\Contascaract\ContasCaracteristicasJsonClient;
use OmieLib\Crm\Contascaract\Request\AlterarCaractCRMContaRequest;
use OmieLib\Crm\Contascaract\Request\ConsultarCaractCRMContaRequest;
use OmieLib\Crm\Contascaract\Request\ExcluirCaractCRMContaRequest;
use OmieLib\Crm\Contascaract\Request\ExcluirTodasCaractCRMContaRequest;
use OmieLib\Crm\Contascaract\Request\IncluirCaractCRMContaRequest;

/**
 * Resposta da exclusão de uma característica de uma conta.
 *
 * @pw_element integer $nCod Código da conta
 * @pw_element string $cCodInt Código de integração com sistemas legados
 * @pw_element string $cCodStatus Código do status de processamento
 * @pw_element string $cDesStatus Descrição do status de processamento
 * @pw_complex ExcluirCaractCRMContaResponse
 */
class ExcluirCaractCRMContaResponse{
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
	/**
	 * Código do status de processamento
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do status de processamento
	 *
	 * @var string
	 */
	public string $cDesStatus;
}
