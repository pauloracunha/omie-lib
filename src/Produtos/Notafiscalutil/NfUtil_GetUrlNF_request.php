<?php

namespace OmieLib\Produtos\Notafiscalutil;

use OmieLib\Common\OmieFail;

/**
 * Request da URL da Nota Fiscal.
 *
 * @pw_element integer $nCodNF Código da Nota Fiscal
 * @pw_element string $cCodNFInt Código de Integração da Nota Fiscal
 * @pw_complex nfUtil_GetUrlNF_request
 */
class NfUtil_GetUrlNF_request{
	/**
	 * Código da Nota Fiscal
	 *
	 * @var integer
	 */
	public int $nCodNF;
	/**
	 * Código de Integração da Nota Fiscal
	 *
	 * @var string
	 */
	public string $cCodNFInt;
}
