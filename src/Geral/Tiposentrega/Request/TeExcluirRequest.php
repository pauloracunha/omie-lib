<?php

namespace OmieLib\Geral\Tiposentrega\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Tiposentrega\CadTiposEntrega;
use OmieLib\Geral\Tiposentrega\Response\TeAlterarResponse;
use OmieLib\Geral\Tiposentrega\Response\TeConsultarResponse;
use OmieLib\Geral\Tiposentrega\Response\TeExcluirResponse;
use OmieLib\Geral\Tiposentrega\Response\TeIncluirResponse;
use OmieLib\Geral\Tiposentrega\Response\TeListarResponse;
use OmieLib\Geral\Tiposentrega\TiposEntregaJsonClient;

/**
 * Requisição de exclusão de tipo de entrega
 *
 * @pw_element integer $nCodEntrega Código do tipo de entrega
 * @pw_element string $cCodIntEntrega Código de integração do tipo de entrega
 * @pw_complex teExcluirRequest
 */
class TeExcluirRequest{
	/**
	 * Código do tipo de entrega
	 *
	 * @var integer
	 */
	public int $nCodEntrega;
	/**
	 * Código de integração do tipo de entrega
	 *
	 * @var string
	 */
	public string $cCodIntEntrega;
}
