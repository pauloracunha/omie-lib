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
 * Listar Ordens de serviço faturadas a partir do status informado.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nRegistros Número de registros retornados
 * @pw_element string $dDtFat Data de Faturamento
 * @pw_element string $cStatusLote Código do status do lote enviado para a prefeitura.<BR><BR>Pode ser:<BR><BR>001 - Aguardando envio para a prefeitura.<BR>002 - Enviado para a prefeitura, aguardando processamento.<BR>003 - Processado com erro.<BR>004 - Processado com sucesso.<BR>005 - Cancelado com sucesso.
 * @pw_complex ListarLoteNfseRequest
 */
class ListarLoteNfseRequest{
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
	 * Data de Faturamento
	 *
	 * @var string
	 */
	public string $dDtFat;
	/**
	 * Código do status do lote enviado para a prefeitura.<BR><BR>Pode ser:<BR><BR>001 - Aguardando envio para a prefeitura.<BR>002 - Enviado para a prefeitura, aguardando processamento.<BR>003 - Processado com erro.<BR>004 - Processado com sucesso.<BR>005 - Cancelado com sucesso.
	 *
	 * @var string
	 */
	public string $cStatusLote;
}
