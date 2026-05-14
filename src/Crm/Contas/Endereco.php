<?php

namespace OmieLib\Crm\Contas;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contas\Request\ContaListarRequest;
use OmieLib\Crm\Contas\Request\ContaVerificarRequest;
use OmieLib\Crm\Contas\Response\ContaListarResponse;
use OmieLib\Crm\Contas\Response\ContaVerificarResponse;

/**
 * Endereço da conta
 *
 * @pw_element string $cEndereco Endereço
 * @pw_element string $cCompl Complemento do Endereço
 * @pw_element string $cCEP CEP
 * @pw_element string $cBairro Bairro
 * @pw_element string $cCidade Cidade
 * @pw_element string $cUF Estado
 * @pw_element string $cPais País
 * @pw_complex endereco
 */
class Endereco{
	/**
	 * Endereço
	 *
	 * @var string
	 */
	public string $cEndereco;
	/**
	 * Complemento do Endereço
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
	 * Bairro
	 *
	 * @var string
	 */
	public string $cBairro;
	/**
	 * Cidade
	 *
	 * @var string
	 */
	public string $cCidade;
	/**
	 * Estado
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
