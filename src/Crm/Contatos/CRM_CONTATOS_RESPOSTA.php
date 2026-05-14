<?php

namespace OmieLib\Crm\Contatos;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contatos\Request\ContatoListarRequest;
use OmieLib\Crm\Contatos\Request\ContatoVerificarRequest;
use OmieLib\Crm\Contatos\Response\ContatoListarResponse;
use OmieLib\Crm\Contatos\Response\ContatoVerificarResponse;

/**
 * Status da Comunicação
 *
 * @pw_element integer $nCod Código do Contato
 * @pw_element string $cCodInt Código de Integração
 * @pw_element string $cCodStatus Código do Status
 * @pw_element string $cDesStatus Descrição do Status
 * @pw_complex CRM_CONTATOS_RESPOSTA
 */
class CRM_CONTATOS_RESPOSTA{
	/**
	 * Código do Contato
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
	/**
	 * Código do Status
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do Status
	 *
	 * @var string
	 */
	public string $cDesStatus;
}
