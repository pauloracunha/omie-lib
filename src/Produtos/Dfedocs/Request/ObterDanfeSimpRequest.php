<?php

namespace OmieLib\Produtos\Dfedocs\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Dfedocs\DfeDocsJsonClient;
use OmieLib\Produtos\Dfedocs\Response\ObterCTeResponse;
use OmieLib\Produtos\Dfedocs\Response\ObterCupomResponse;
use OmieLib\Produtos\Dfedocs\Response\ObterDanfeSimpResponse;
use OmieLib\Produtos\Dfedocs\Response\ObterNFeResponse;
use OmieLib\Produtos\Dfedocs\Response\ObterPedVendaResponse;

/**
 * Solicita as informações de uma nota fiscal.
 *
 * @pw_element integer $nIdNfe ID da Nota Fiscal
 * @pw_complex ObterDanfeSimpRequest
 */
class ObterDanfeSimpRequest{
	/**
	 * ID da Nota Fiscal
	 *
	 * @var integer
	 */
	public int $nIdNfe;
}
