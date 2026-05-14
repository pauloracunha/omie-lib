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
 * Solicita as informações de um Cupom Fiscal.
 *
 * @pw_element integer $nIdCupom ID do Cupom Fiscal
 * @pw_complex ObterCupomRequest
 */
class ObterCupomRequest{
	/**
	 * ID do Cupom Fiscal
	 *
	 * @var integer
	 */
	public int $nIdCupom;
}
