<?php

namespace OmieLib\Geral\Cenarios\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Cenarios\CenariosEncontrados;
use OmieLib\Geral\Cenarios\CenariosImpostosJsonClient;
use OmieLib\Geral\Cenarios\Impostos;
use OmieLib\Geral\Cenarios\Request\CenariosImpostosListarRequest;
use OmieLib\Geral\Cenarios\Request\CenariosListarRequest;

/**
 * Resposta da solicitação de listagem de Cenários de Impostos.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nTotPaginas Total de páginas encontradas.
 * @pw_element integer $nRegistros Número de registros retornados.
 * @pw_element integer $nTotRegistros Total de registros encontrados.
 * @pw_element cenariosEncontradosArray $cenariosEncontrados Lista de Cenários de Impostos encontrados.
 * @pw_complex cenariosListarResponse
 */
class CenariosListarResponse{
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
	public int $nTotPaginas;
	/**
	 * Número de registros retornados.
	 *
	 * @var integer
	 */
	public int $nRegistros;
	/**
	 * Total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $nTotRegistros;
	/**
	 * Lista de Cenários de Impostos encontrados.
	 *
	 * @var CenariosEncontrados[]
	 */
	public array $cenariosEncontrados;
}
