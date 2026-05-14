<?php

namespace OmieLib\Estoque\Local\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Local\LocaisEncontrados;
use OmieLib\Estoque\Local\LocalEstoqueJsonClient;
use OmieLib\Estoque\Local\Request\AlterarLocalRequest;
use OmieLib\Estoque\Local\Request\IncluirLocalRequest;
use OmieLib\Estoque\Local\Request\LocaisListarRequest;

/**
 * Resposta da solicitação de listagem de Locais de Estoque.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nTotPaginas Total de páginas encontradas.
 * @pw_element integer $nRegistros Número de registros retornados
 * @pw_element integer $nTotRegistros Total de registros encontrados.
 * @pw_element locaisEncontradosArray $locaisEncontrados Lista de Locais de Estoque encontrados.
 * @pw_complex locaisListarResponse
 */
class LocaisListarResponse{
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
	public int $nTotRegistros;
	/**
	 * Lista de Locais de Estoque encontrados.
	 *
	 * @var LocaisEncontrados[]
	 */
	public array $locaisEncontrados;
}
