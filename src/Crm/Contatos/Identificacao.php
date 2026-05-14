<?php

namespace OmieLib\Crm\Contatos;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contatos\Request\ContatoListarRequest;
use OmieLib\Crm\Contatos\Request\ContatoVerificarRequest;
use OmieLib\Crm\Contatos\Response\ContatoListarResponse;
use OmieLib\Crm\Contatos\Response\ContatoVerificarResponse;

/**
 * Dados do contato
 *
 * @pw_element integer $nCod Código do Contato
 * @pw_element string $cCodInt Código de Integração
 * @pw_element string $cNome Nome do contato
 * @pw_element string $cSobrenome Sobrenome do contato&nbsp;
 * @pw_element string $cCargo Cargo
 * @pw_element string $dDtNasc Data de Nascimento
 * @pw_element integer $nCodVend Código do Vendedor
 * @pw_element integer $nCodConta Código da Conta
 * @pw_complex identificacao
 */
class Identificacao{
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
	 * Nome do contato
	 *
	 * @var string
	 */
	public string $cNome;
	/**
	 * Sobrenome do contato&nbsp;
	 *
	 * @var string
	 */
	public string $cSobrenome;
	/**
	 * Cargo
	 *
	 * @var string
	 */
	public string $cCargo;
	/**
	 * Data de Nascimento
	 *
	 * @var string
	 */
	public string $dDtNasc;
	/**
	 * Código do Vendedor
	 *
	 * @var integer
	 */
	public int $nCodVend;
	/**
	 * Código da Conta
	 *
	 * @var integer
	 */
	public int $nCodConta;
}
