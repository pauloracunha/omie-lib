<?php

namespace OmieLib\Produtos\Notafiscalutil;

use OmieLib\Common\OmieFail;

/**
 * Response da URL do DANFE da NF
 *
 * @pw_element string $cUrlDanfe URL do DANFE da Nota Fiscal
 * @pw_element string $dtValUrl Data de validade da URL
 * @pw_complex nfUtil_GetUrlDanfe_response
 */
class NfUtil_GetUrlDanfe_response{
	/**
	 * URL do DANFE da Nota Fiscal
	 *
	 * @var string
	 */
	public string $cUrlDanfe;
	/**
	 * Data de validade da URL
	 *
	 * @var string
	 */
	public string $dtValUrl;
}
