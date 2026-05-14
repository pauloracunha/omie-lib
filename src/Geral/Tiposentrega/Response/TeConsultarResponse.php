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
 * Resposta da consulta de tipo de entrega
 *
 * @pw_element integer $nCodTransp Código da transportadora
 * @pw_element integer $nCodEntrega Código do tipo de entrega
 * @pw_element string $cCodIntEntrega Código de integração do tipo de entrega
 * @pw_element string $cDescricao Descrição do tipo de entrega
 * @pw_element string $cInativo Tipo de entrega inativo [S/N]
 * @pw_complex teConsultarResponse
 */
class TeConsultarResponse{
	/**
	 * Código da transportadora
	 *
	 * @var integer
	 */
	public int $nCodTransp;
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
