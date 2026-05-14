<?php

namespace OmieLib\Crm\Contas;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contas\Request\ContaListarRequest;
use OmieLib\Crm\Contas\Request\ContaVerificarRequest;
use OmieLib\Crm\Contas\Response\ContaListarResponse;
use OmieLib\Crm\Contas\Response\ContaVerificarResponse;

/**
 * Identificação da conta
 *
 * @pw_element integer $nCod Código da Conta
 * @pw_element string $cCodInt Código de Integração
 * @pw_element string $cNome Nome da Conta
 * @pw_element string $cNomeFantasia Nome fantasia da conta
 * @pw_element string $cDoc Número do Documento: CNPJ ou CPF.
 * @pw_element integer $nCodVend Código do Vendedor
 * @pw_element integer $nCodVert Código da Vertical
 * @pw_element integer $nCodTelemkt Código do Telemarketing
 * @pw_element string $dDtReg Data de Registro
 * @pw_element string $dDtValid Data de Validade da Reserva
 * @pw_element string $cObs Observação
 * @pw_complex identificacao
 */
class Identificacao{
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
	/**
	 * Nome da Conta
	 *
	 * @var string
	 */
	public string $cNome;
	/**
	 * Nome fantasia da conta
	 *
	 * @var string
	 */
	public string $cNomeFantasia;
	/**
	 * Número do Documento: CNPJ ou CPF.
	 *
	 * @var string
	 */
	public string $cDoc;
	/**
	 * Código do Vendedor
	 *
	 * @var integer
	 */
	public int $nCodVend;
	/**
	 * Código da Vertical
	 *
	 * @var integer
	 */
	public int $nCodVert;
	/**
	 * Código do Telemarketing
	 *
	 * @var integer
	 */
	public int $nCodTelemkt;
	/**
	 * Data de Registro
	 *
	 * @var string
	 */
	public string $dDtReg;
	/**
	 * Data de Validade da Reserva
	 *
	 * @var string
	 */
	public string $dDtValid;
	/**
	 * Observação
	 *
	 * @var string
	 */
	public string $cObs;
}
