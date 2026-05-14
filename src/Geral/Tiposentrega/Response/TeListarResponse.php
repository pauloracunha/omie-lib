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
 * Resposta da solicitação de listagem de tipos de entrega
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nTotalPaginas Total de páginas encontradas.
 * @pw_element integer $nRegistros Número de registros retornados
 * @pw_element integer $nTotalRegistros Total de registros encontrados.
 * @pw_element CadTiposEntregaArray $CadTiposEntrega Informações do tipo de entrega
 * @pw_complex teListarResponse
 */
class TeListarResponse{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Total de páginas encontradas.
	 *
	 * @var integer
	 */
	public int $nTotalPaginas;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $nRegistros;
	/**
	 * Total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $nTotalRegistros;
	/**
	 * Informações do tipo de entrega
	 *
	 * @var CadTiposEntrega[]
	 */
	public array $CadTiposEntrega;
}
