<?php

namespace OmieLib\Geral\Bandeiracartao\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Bandeiracartao\BandeiraCartaoJsonClient;
use OmieLib\Geral\Bandeiracartao\ListaBandeira;
use OmieLib\Geral\Bandeiracartao\Request\ListarBandeirasRequest;

/**
 * Retorno da solicitação da listagem das bandeiras de cartões.
 *
 * @pw_element integer $nRegistros Número de registros.
 * @pw_element integer $nPagina Número da página.
 * @pw_element integer $nTotPaginas Número total de páginas.
 * @pw_element integer $nTotRegistros Número total de registros.
 * @pw_element listaBandeiraArray $listaBandeira Código e descrição.
 * @pw_complex ListarBandeirasResponse
 */
class ListarBandeirasResponse{
	/**
	 * Número de registros.
	 *
	 * @var integer
	 */
	public int $nRegistros;
	/**
	 * Número da página.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número total de páginas.
	 *
	 * @var integer
	 */
	public int $nTotPaginas;
	/**
	 * Número total de registros.
	 *
	 * @var integer
	 */
	public int $nTotRegistros;
	/**
	 * Código e descrição.
	 *
	 * @var ListaBandeira[]
	 */
	public array $listaBandeira;
}
