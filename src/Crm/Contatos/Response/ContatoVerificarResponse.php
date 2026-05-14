<?php

namespace OmieLib\Crm\Contatos\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contatos\CRM_CONTATOS_PESQUISA;
use OmieLib\Crm\Contatos\CRM_CONTATOS_RESPOSTA;
use OmieLib\Crm\Contatos\Cadastros;
use OmieLib\Crm\Contatos\ContatosJsonClient;
use OmieLib\Crm\Contatos\Endereco;
use OmieLib\Crm\Contatos\Identificacao;
use OmieLib\Crm\Contatos\Request\ContatoListarRequest;
use OmieLib\Crm\Contatos\Request\ContatoVerificarRequest;
use OmieLib\Crm\Contatos\Telefone_email;

/**
 * Resposta da verificação se um contato existe a partir do nome e e-mail.
 *
 * @pw_element integer $nCod Código do Contato
 * @pw_element string $cCodInt Código de Integração
 * @pw_element string $cCodStatus Código do Status
 * @pw_element string $cDesStatus Descrição do Status
 * @pw_complex contatoVerificarResponse
 */
class ContatoVerificarResponse{
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
