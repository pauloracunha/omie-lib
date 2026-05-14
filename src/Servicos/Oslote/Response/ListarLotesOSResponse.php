<?php

namespace OmieLib\Servicos\Oslote\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Oslote\Detalhes;
use OmieLib\Servicos\Oslote\Lotes;
use OmieLib\Servicos\Oslote\NfseLote;
use OmieLib\Servicos\Oslote\OrdemServicoLoteJsonClient;
use OmieLib\Servicos\Oslote\Request\FaturarLoteOSRequest;
use OmieLib\Servicos\Oslote\Request\ListarLoteNfseRequest;
use OmieLib\Servicos\Oslote\Request\ListarLotesOSRequest;
use OmieLib\Servicos\Oslote\Request\StatusLoteOsRequest;

/**
 * Response do método que lista Ordens de Serviços
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nTotPaginas Total de páginas encontradas.
 * @pw_element integer $nRegistros Número de registros retornados
 * @pw_element integer $nTotRegistros Total de registros encontrados.
 * @pw_element lotesArray $lotes Notas encontradas para data de faturamento enviadas
 * @pw_complex ListarLotesOSResponse
 */
class ListarLotesOSResponse{
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
	 * Notas encontradas para data de faturamento enviadas
	 *
	 * @var Lotes[]
	 */
	public array $lotes;
}
