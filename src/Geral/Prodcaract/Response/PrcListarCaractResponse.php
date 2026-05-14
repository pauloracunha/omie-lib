<?php

namespace OmieLib\Geral\Prodcaract\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Prodcaract\Info;
use OmieLib\Geral\Prodcaract\ListaCaracteristicas;
use OmieLib\Geral\Prodcaract\ProdutosCaracteristicasJsonClient;
use OmieLib\Geral\Prodcaract\Request\PrcAlterarCaractRequest;
use OmieLib\Geral\Prodcaract\Request\PrcConsultarCaractRequest;
use OmieLib\Geral\Prodcaract\Request\PrcExcluirCaractRequest;
use OmieLib\Geral\Prodcaract\Request\PrcIncluirCaractRequest;
use OmieLib\Geral\Prodcaract\Request\PrcListarCaractRequest;

/**
 * Resposta da solicitação de listagem das características de um produto.
 *
 * @pw_element integer $nPagina Número da página resgatada.
 * @pw_element integer $nTotPaginas Número total de páginas encontradas.
 * @pw_element integer $nRegistros Número de registros retornados na página.
 * @pw_element integer $nTotRegistros Número total de registros encontrados.
 * @pw_element listaCaracteristicasArray $listaCaracteristicas Lista de características de produto.
 * @pw_complex prcListarCaractResponse
 */
class PrcListarCaractResponse{
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
