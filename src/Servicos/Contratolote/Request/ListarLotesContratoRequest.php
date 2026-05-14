<?php

namespace OmieLib\Servicos\Contratolote\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contratolote\ContratoLoteJsonClient;
use OmieLib\Servicos\Contratolote\Detalhes;
use OmieLib\Servicos\Contratolote\Lotes;
use OmieLib\Servicos\Contratolote\Response\FaturarLoteContratoResponse;
use OmieLib\Servicos\Contratolote\Response\ListarLotesContratoResponse;
use OmieLib\Servicos\Contratolote\Response\StatusLoteContratoResponse;

/**
 * Listar status de faturamento dos Contratos de Serviço a partir das datas de processamento.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nRegistros Número de registros retornados
 * @pw_element integer $nIdLoteFat Id do Lote de Processamento
 * @pw_element string $cExibirDetalhes Exibe detalhamento do processamento por lote (S/N).<BR><BR>Default "N"
 * @pw_element string $dDtIncDe Data de Inclusão do processamento
 * @pw_element string $dDtIncAte Data de Inclusão até do processamento
 * @pw_complex ListarLotesContratoRequest
 */
class ListarLotesContratoRequest{
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
	public int $nRegistros;
	/**
	 * Id do Lote de Processamento
	 *
	 * @var integer
	 */
	public int $nIdLoteFat;
	/**
	 * Exibe detalhamento do processamento por lote (S/N).<BR><BR>Default "N"
	 *
	 * @var string
	 */
	public string $cExibirDetalhes;
	/**
	 * Data de Inclusão do processamento
	 *
	 * @var string
	 */
	public string $dDtIncDe;
	/**
	 * Data de Inclusão até do processamento
	 *
	 * @var string
	 */
	public string $dDtIncAte;
}
