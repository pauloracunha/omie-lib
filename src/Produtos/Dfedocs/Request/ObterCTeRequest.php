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
 * Solicita as informações de um CTe.
 *
 * @pw_element integer $nIdCTe ID do Conhecimento de Transporte
 * @pw_complex ObterCTeRequest
 */
class ObterCTeRequest{
	/**
	 * ID do Conhecimento de Transporte
	 *
	 * @var integer
	 */
	public int $nIdCTe;
}
