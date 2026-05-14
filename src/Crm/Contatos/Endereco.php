<?php

namespace OmieLib\Crm\Contatos;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contatos\Request\ContatoListarRequest;
use OmieLib\Crm\Contatos\Request\ContatoVerificarRequest;
use OmieLib\Crm\Contatos\Response\ContatoListarResponse;
use OmieLib\Crm\Contatos\Response\ContatoVerificarResponse;

/**
 * Endereço do Contato
 *
 * @pw_element string $cEndereco Endereço do contato&nbsp;
 * @pw_element string $cCompl Complemento&nbsp;
 * @pw_element string $cCEP CEP
 * @pw_element string $cBairro Bairro&nbsp;
 * @pw_element string $cCidade Cidade&nbsp;
 * @pw_element string $cUF Estado&nbsp;
 * @pw_element string $cPais País
 * @pw_complex endereco
 */
class Endereco{
	/**
	 * Endereço do contato&nbsp;
	 *
	 * @var string
	 */
	public string $cEndereco;
	/**
	 * Complemento&nbsp;
	 *
	 * @var string
	 */
	public string $cCompl;
	/**
	 * CEP
	 *
	 * @var string
	 */
	public string $cCEP;
	/**
	 * Bairro&nbsp;
	 *
	 * @var string
	 */
	public string $cBairro;
	/**
	 * Cidade&nbsp;
	 *
	 * @var string
	 */
	public string $cCidade;
	/**
	 * Estado&nbsp;
	 *
	 * @var string
	 */
	public string $cUF;
	/**
	 * País
	 *
	 * @var string
	 */
	public string $cPais;
}
