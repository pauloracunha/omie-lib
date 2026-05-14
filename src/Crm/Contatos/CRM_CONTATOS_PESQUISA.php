<?php

namespace OmieLib\Crm\Contatos;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contatos\Request\ContatoListarRequest;
use OmieLib\Crm\Contatos\Request\ContatoVerificarRequest;
use OmieLib\Crm\Contatos\Response\ContatoListarResponse;
use OmieLib\Crm\Contatos\Response\ContatoVerificarResponse;

/**
 * Pesquisa do Contato
 *
 * @pw_element integer $nCod Código do Contato
 * @pw_element string $cCodInt Código de Integração
 * @pw_complex CRM_CONTATOS_PESQUISA
 */
class CRM_CONTATOS_PESQUISA{
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
}
