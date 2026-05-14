<?php

namespace OmieLib\Servicos\Oslote\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Oslote\Detalhes;
use OmieLib\Servicos\Oslote\Lotes;
use OmieLib\Servicos\Oslote\NfseLote;
use OmieLib\Servicos\Oslote\OrdemServicoLoteJsonClient;
use OmieLib\Servicos\Oslote\Response\FaturarLoteOSResponse;
use OmieLib\Servicos\Oslote\Response\ListarLoteNfseResponse;
use OmieLib\Servicos\Oslote\Response\ListarLotesOSResponse;
use OmieLib\Servicos\Oslote\Response\StatusLoteOsResponse;

/**
 * Listar status de faturamento das Ordens de serviço a partir das datas de processamento.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nRegistros Número de registros retornados
 * @pw_element integer $nIdLoteFat Id do Lote de Processamento
 * @pw_element string $cExibirDetalhes Exibe detalhamento do processamento por lote (S/N).<BR><BR>Default "N"
 * @pw_element string $dDtIncDe Data de Inclusão do processamento
 * @pw_element string $dDtIncAte Data de Inclusão até do processamento
 * @pw_complex ListarLotesOSRequest
 */
class ListarLotesOSRequest{
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
