<?php

namespace OmieLib\Produtos\Notafiscalutil;

use OmieLib\Common\OmieFail;

/**
 * Request da URL do DANFE da NFe
 *
 * @pw_element integer $nCodNF Código da Nota Fiscal
 * @pw_element string $cCodNFInt Código de Integração da Nota Fiscal
 * @pw_complex nfUtil_GetUrlDanfe_request
 */
class NfUtil_GetUrlDanfe_request{
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
