<?php

namespace OmieLib\Crm\Contatos\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contatos\CRM_CONTATOS_PESQUISA;
use OmieLib\Crm\Contatos\CRM_CONTATOS_RESPOSTA;
use OmieLib\Crm\Contatos\Cadastros;
use OmieLib\Crm\Contatos\ContatosJsonClient;
use OmieLib\Crm\Contatos\Endereco;
use OmieLib\Crm\Contatos\Identificacao;
use OmieLib\Crm\Contatos\Response\ContatoListarResponse;
use OmieLib\Crm\Contatos\Response\ContatoVerificarResponse;
use OmieLib\Crm\Contatos\Telefone_email;

/**
 * Verifica se um contato existe a partir do nome e e-mail.
 *
 * @pw_element string $cNome Nome do contato
 * @pw_element string $cEmail E-mail do contato
 * @pw_complex contatoVerificarRequest
 */
class ContatoVerificarRequest{
	/**
	 * Nome do contato
	 *
	 * @var string
	 */
	public string $cNome;
	/**
	 * E-mail do contato
	 *
	 * @var string
	 */
	public string $cEmail;
}
