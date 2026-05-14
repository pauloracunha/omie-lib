<?php

namespace OmieLib\Produtos\Notafiscalutil;

use OmieLib\Common\OmieFail;

/**
 * Request para obter a URL do Logotipo
 *
 * @pw_element integer $nCodEmpr Código da Empresa
 * @pw_element string $cCodEmprInt Código de Integração da Empresa
 * @pw_complex nfUtil_GetUrlLogo_request
 */
class NfUtil_GetUrlLogo_request{
	/**
	 * Código da Empresa
	 *
	 * @var integer
	 */
	public int $nCodEmpr;
	/**
	 * Código de Integração da Empresa
	 *
	 * @var string
	 */
	public string $cCodEmprInt;
}
