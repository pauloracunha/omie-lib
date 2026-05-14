<?php

namespace OmieLib\Produtos\Notafiscalutil;

use OmieLib\Common\OmieFail;

/**
 * RESPONSE para obter o Logotipo da Empresa
 *
 * @pw_element string $cUrlLogo URL do Logotipo da Empresa
 * @pw_element string $dtValUrl Data de validade da URL
 * @pw_complex nfUtil_GetUrlLogo_response
 */
class NfUtil_GetUrlLogo_response{
	/**
	 * URL do Logotipo da Empresa
	 *
	 * @var string
	 */
	public string $cUrlLogo;
	/**
	 * Data de validade da URL
	 *
	 * @var string
	 */
	public string $dtValUrl;
}
