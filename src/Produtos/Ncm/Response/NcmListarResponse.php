<?php

namespace OmieLib\Produtos\Ncm\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Ncm\ListaNCM;
use OmieLib\Produtos\Ncm\NCMJsonClient;
use OmieLib\Produtos\Ncm\Request\NcmConsultarRequest;
use OmieLib\Produtos\Ncm\Request\NcmListarRequest;

/**
 * Resposta da solicitação de listagem de NCM.
 *
 * @pw_element integer $nPagina Número da página resgatada.
 * @pw_element integer $nTotPaginas Número total de páginas encontradas.
 * @pw_element integer $nRegistros Número de registros retornados na página.
 * @pw_element integer $nTotRegistros Número total de registros encontrados.
 * @pw_element listaNCMArray $listaNCM Lista de NCM.
 * @pw_complex ncmListarResponse
 */
class NcmListarResponse{
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
	 * Lista de NCM.
	 *
	 * @var ListaNCM[]
	 */
	public array $listaNCM;
}
