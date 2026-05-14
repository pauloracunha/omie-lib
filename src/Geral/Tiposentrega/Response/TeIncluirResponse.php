<?php

namespace OmieLib\Geral\Tiposentrega\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Tiposentrega\CadTiposEntrega;
use OmieLib\Geral\Tiposentrega\Request\TeAlterarRequest;
use OmieLib\Geral\Tiposentrega\Request\TeConsultarRequest;
use OmieLib\Geral\Tiposentrega\Request\TeExcluirRequest;
use OmieLib\Geral\Tiposentrega\Request\TeIncluirRequest;
use OmieLib\Geral\Tiposentrega\Request\TeListarRequest;
use OmieLib\Geral\Tiposentrega\TiposEntregaJsonClient;

/**
 * Resposta da solicitação de inclusão de tipo de entrega
 *
 * @pw_element integer $nCodEntrega Código do tipo de entrega
 * @pw_element string $cCodIntEntrega Código de integração do tipo de entrega
 * @pw_element string $cCodStatus Código do status do tipo de entrega
 * @pw_element string $cDesStatus Descrição do status do tipo de entrega
 * @pw_complex teIncluirResponse
 */
class TeIncluirResponse{
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
	/**
	 * Código do status do tipo de entrega
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do status do tipo de entrega
	 *
	 * @var string
	 */
	public string $cDesStatus;
}
