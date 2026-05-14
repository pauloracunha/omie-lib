<?php

namespace OmieLib\Geral\Caracteristicas\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Caracteristicas\CaracteristicasCadastroJsonClient;
use OmieLib\Geral\Caracteristicas\ConteudosPermitidos;
use OmieLib\Geral\Caracteristicas\Info;
use OmieLib\Geral\Caracteristicas\ListaCaracteristicas;
use OmieLib\Geral\Caracteristicas\Request\CaractAlterarRequest;
use OmieLib\Geral\Caracteristicas\Request\CaractConsultarRequest;
use OmieLib\Geral\Caracteristicas\Request\CaractExcluirRequest;
use OmieLib\Geral\Caracteristicas\Request\CaractIncluirRequest;
use OmieLib\Geral\Caracteristicas\Request\CaractListarRequest;

/**
 * Resposta da solicitação de listagem das características de produto.
 *
 * @pw_element integer $nPagina Número da página resgatada.
 * @pw_element integer $nTotPaginas Número total de páginas encontradas.
 * @pw_element integer $nRegistros Número de registros retornados na página.
 * @pw_element integer $nTotRegistros Número total de registros encontrados.
 * @pw_element listaCaracteristicasArray $listaCaracteristicas Lista de características de produto.
 * @pw_complex caractListarResponse
 */
class CaractListarResponse{
	/**
	 * Número da página resgatada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número total de páginas encontradas.
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
	 * Número total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $nTotRegistros;
	/**
	 * Lista de características de produto.
	 *
	 * @var ListaCaracteristicas[]
	 */
	public array $listaCaracteristicas;
}
