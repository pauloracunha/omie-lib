<?php

namespace OmieLib\Servicos\Contratolote\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contratolote\ContratoLoteJsonClient;
use OmieLib\Servicos\Contratolote\Detalhes;
use OmieLib\Servicos\Contratolote\Lotes;
use OmieLib\Servicos\Contratolote\Request\FaturarLoteContratoRequest;
use OmieLib\Servicos\Contratolote\Request\ListarLotesContratoRequest;
use OmieLib\Servicos\Contratolote\Request\StatusLoteContratoRequest;

/**
 * Response do método que lista Contratos de Serviço.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nTotPaginas Total de páginas encontradas.
 * @pw_element integer $nRegistros Número de registros retornados
 * @pw_element integer $nTotRegistros Total de registros encontrados.
 * @pw_element lotesArray $lotes Contratos de Serviço encontrados para data de faturamento enviadas
 * @pw_complex ListarLotesContratoResponse
 */
class ListarLotesContratoResponse{
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
	 * Contratos de Serviço encontrados para data de faturamento enviadas
	 *
	 * @var Lotes[]
	 */
	public array $lotes;
}
