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
 * Solicita as informações de um Pedido de Venda.
 *
 * @pw_element integer $nIdPed Id único que identifica o pedido
 * @pw_complex ObterPedVendaRequest
 */
class ObterPedVendaRequest{
	/**
	 * Id único que identifica o pedido
	 *
	 * @var integer
	 */
	public int $nIdPed;
}
