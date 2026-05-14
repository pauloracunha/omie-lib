<?php

namespace OmieLib\Produtos\Nfconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfconsultar\Request\NfListarRequest;
use OmieLib\Produtos\Nfconsultar\Response\NfListarResponse;

/**
 * Dados da Integração do Emitente
 *
 * @pw_element integer $nCodEmp Código da Empresa
 * @pw_element string $cCodEmpInt Código de integração da empresa.
 * @pw_complex nfEmitInt
 */
class NfEmitInt{
	/**
	 * Código da Empresa
	 *
	 * @var integer
	 */
	public int $nCodEmp;
	/**
	 * Código de integração da empresa.
	 *
	 * @var string
	 */
	public string $cCodEmpInt;
}
