<?php

namespace OmieLib\Crm\Contatos;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contatos\Request\ContatoListarRequest;
use OmieLib\Crm\Contatos\Request\ContatoVerificarRequest;
use OmieLib\Crm\Contatos\Response\ContatoListarResponse;
use OmieLib\Crm\Contatos\Response\ContatoVerificarResponse;

/**
 * Lista os cadastros encontrados.
 *
 * @pw_element identificacao $identificacao Dados do contato
 * @pw_element endereco $endereco Endereço do Contato&nbsp;
 * @pw_element telefone_email $telefone_email Telefone e e-mail&nbsp;
 * @pw_element string $cObs Observações.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Dados do contato
	 *
	 * @var Identificacao
	 */
	public Identificacao $identificacao;
	/**
	 * Endereço do Contato&nbsp;
	 *
	 * @var Endereco
	 */
	public Endereco $endereco;
	/**
	 * Telefone e e-mail&nbsp;
	 *
	 * @var Telefone_email
	 */
	public Telefone_email $telefone_email;
	/**
	 * Observações.
	 *
	 * @var string
	 */
	public string $cObs;
}
