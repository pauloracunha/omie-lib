<?php

namespace OmieLib\Produtos\Notafiscalutil;

use OmieLib\Common\OmieFail;

/**
 * Response da URL da Nota Fiscal
 *
 * @pw_element string $cUrlNF URL da Nota Fiscal
 * @pw_element string $dtValUrl Data de validade da URL
 * @pw_complex nfUtil_GetUrlNF_response
 */
class NfUtil_GetUrlNF_response{
	/**
	 * URL da Nota Fiscal
	 *
	 * @var string
	 */
	public string $cUrlNF;
	/**
	 * Data de validade da URL
	 *
	 * @var string
	 */
	public string $dtValUrl;
}
