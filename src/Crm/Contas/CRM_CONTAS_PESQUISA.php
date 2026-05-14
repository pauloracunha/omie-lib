<?php

namespace OmieLib\Crm\Contas;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contas\Request\ContaListarRequest;
use OmieLib\Crm\Contas\Request\ContaVerificarRequest;
use OmieLib\Crm\Contas\Response\ContaListarResponse;
use OmieLib\Crm\Contas\Response\ContaVerificarResponse;

/**
 * Pesquisa da conta
 *
 * @pw_element integer $nCod Código da Conta
 * @pw_element string $cCodInt Código de Integração
 * @pw_complex CRM_CONTAS_PESQUISA
 */
class CRM_CONTAS_PESQUISA{
	/**
	 * Código da Conta
	 *
	 * @var integer
	 */
	public int $nCod;
	/**
	 * Código de Integração
	 *
	 * @var string
	 */
	public string $cCodInt;
}
