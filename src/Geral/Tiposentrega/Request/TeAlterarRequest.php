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
 * Requisição de alteração de tipo de entrega
 *
 * @pw_element integer $nCodEntrega Código do tipo de entrega
 * @pw_element string $cCodIntEntrega Código de integração do tipo de entrega
 * @pw_element string $cDescricao Descrição do tipo de entrega
 * @pw_element string $cInativo Tipo de entrega inativo [S/N]
 * @pw_complex teAlterarRequest
 */
class TeAlterarRequest{
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
	 * Descrição do tipo de entrega
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Tipo de entrega inativo [S/N]
	 *
	 * @var string
	 */
	public string $cInativo;
}
