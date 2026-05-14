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
 * Exclui uma característica de uma contar.
 *
 * @pw_element integer $nCod Código da conta
 * @pw_element string $cCodInt Código de integração com sistemas legados
 * @pw_element string $campo Nome da característica.<BR><BR>Preenchimento obrigatório. <BR>Caso não encontre a característica um novo cadastro será adicionado.
 * @pw_complex ExcluirCaractCRMContaRequest
 */
class ExcluirCaractCRMContaRequest{
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
	 * Nome da característica.<BR><BR>Preenchimento obrigatório. <BR>Caso não encontre a característica um novo cadastro será adicionado.
	 *
	 * @var string
	 */
	public string $campo;
}
