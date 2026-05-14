<?php

namespace OmieLib\Produtos\Nfconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfconsultar\Request\NfListarRequest;
use OmieLib\Produtos\Nfconsultar\Response\NfListarResponse;

/**
 * Dados de Integração do Destinatário da Nota Fiscal
 *
 * @pw_element integer $nCodCli Código do cliente
 * @pw_element string $cCodCliInt Código de integração do cliente Fornecedor.
 * @pw_element string $cRazao Razão Social
 * @pw_element string $cnpj_cpf CNPJ / CPF<BR>Pode ser informado com ou sem formatação.
 * @pw_complex nfDestInt
 */
class NfDestInt{
	/**
	 * Código do cliente
	 *
	 * @var integer
	 */
	public int $nCodCli;
	/**
	 * Código de integração do cliente Fornecedor.
	 *
	 * @var string
	 */
	public string $cCodCliInt;
	/**
	 * Razão Social
	 *
	 * @var string
	 */
	public string $cRazao;
	/**
	 * CNPJ / CPF<BR>Pode ser informado com ou sem formatação.
	 *
	 * @var string
	 */
	public string $cnpj_cpf;
}
