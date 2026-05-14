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
 * Requisição de listagem de tipos de entrega
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nRegistrosPorPagina Número de registros retornados
 * @pw_element string $dDtAltDe Filtra os registros a partir da data.
 * @pw_element string $dDtAltAte Filtrar lançamentos incluídos e/ou alterados até a data
 * @pw_element integer $nCodTransp Código da transportadora
 * @pw_complex teListarRequest
 */
class TeListarRequest{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $nRegistrosPorPagina;
	/**
	 * Filtra os registros a partir da data.
	 *
	 * @var string
	 */
	public string $dDtAltDe;
	/**
	 * Filtrar lançamentos incluídos e/ou alterados até a data
	 *
	 * @var string
	 */
	public string $dDtAltAte;
	/**
	 * Código da transportadora
	 *
	 * @var integer
	 */
	public int $nCodTransp;
}
