<?php

namespace OmieLib\Geral\Motivodevolucao\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Motivodevolucao\ListaMotivo;
use OmieLib\Geral\Motivodevolucao\MotivoDevolucaoJsonClient;
use OmieLib\Geral\Motivodevolucao\Request\ListarMotivoDevolRequest;

/**
 * Resposta da solicitação da listagem de motivos de devolução.
 *
 * @pw_element integer $nPagina Número da página retornada
 * @pw_element integer $nTotPaginas Número total de páginas
 * @pw_element integer $nRegistros Número de registros retornados na página.
 * @pw_element integer $nTotRegistros total de registros encontrados
 * @pw_element listaMotivoArray $listaMotivo Lista os cadastros encontrados.
 * @pw_complex ListarMotivoDevolResponse
 */
class ListarMotivoDevolResponse{
	/**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número total de páginas
	 *
	 * @var integer
	 */
	public int $nTotPaginas;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $nRegistros;
	/**
	 * total de registros encontrados
	 *
	 * @var integer
	 */
	public int $nTotRegistros;
	/**
	 * Lista os cadastros encontrados.
	 *
	 * @var ListaMotivo[]
	 */
	public array $listaMotivo;
}
