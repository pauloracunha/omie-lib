<?php

namespace OmieLib\Produtos\Icmsorigem;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Icmsorigem\Request\OrigMercListarRequest;
use OmieLib\Produtos\Icmsorigem\Response\OrigMercListarResponse;

/**
 * Lista as Origem da Mercadoria do ICMS.
 *
 * @pw_element string $nCodigo Código da Origem da Mercadoria do ICMS.
 * @pw_element string $cDescricao Descrição da Origem da Mercadoria do ICMS.
 * @pw_complex cadastros
 */
class Cadastros{
	/**
	 * Código da Origem da Mercadoria do ICMS.
	 *
	 * @var string
	 */
	public string $nCodigo;
	/**
	 * Descrição da Origem da Mercadoria do ICMS.
	 *
	 * @var string
	 */
	public string $cDescricao;
}
