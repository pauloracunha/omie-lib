<?php

namespace OmieLib\Servicos\Oslote;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Oslote\Request\FaturarLoteOSRequest;
use OmieLib\Servicos\Oslote\Request\ListarLoteNfseRequest;
use OmieLib\Servicos\Oslote\Request\ListarLotesOSRequest;
use OmieLib\Servicos\Oslote\Request\StatusLoteOsRequest;
use OmieLib\Servicos\Oslote\Response\FaturarLoteOSResponse;
use OmieLib\Servicos\Oslote\Response\ListarLoteNfseResponse;
use OmieLib\Servicos\Oslote\Response\ListarLotesOSResponse;
use OmieLib\Servicos\Oslote\Response\StatusLoteOsResponse;

/**
 * @service OrdemServicoLoteJsonClient
 * @author omie
 */
class OrdemServicoLoteJsonClient extends AbstractOmieJsonClient {
	/**
	 * The WSDL URI
	 *
	 * @var string
	 */
	
	/**
	 * The PHP SoapClient object
	 *
	 * @var object
	 */
	public static $_Server=null;
	/**
	 * The endpoint URI
	 *
	 * @var string
	 */
	public static $_EndPoint='servicos/oslote/';

	/**
	 * Faturar Ordens de serviço em lote a partir da etapa informada.
	 *
	 * @param FaturarLoteOSRequest $FaturarLoteOSRequest Faturar Ordens de serviço em lote a partir da etapa informada.
	 * @return FaturarLoteOSResponse Response de notas de serviço faturadas em Lote
	 */
	public function FaturarLoteOS(FaturarLoteOSRequest $FaturarLoteOSRequest): ?FaturarLoteOSResponse {
		$res = $this->_Call('FaturarLoteOS',Array(
			$FaturarLoteOSRequest
		));
		return $this->_Cast($res, FaturarLoteOSResponse::class);
	}

	/**
	 * Listar Ordens de serviço faturadas a partir do status informado.
	 *
	 * @param ListarLoteNfseRequest $ListarLoteNfseRequest Listar Ordens de serviço faturadas a partir do status informado.
	 * @return ListarLoteNfseResponse Response do método que lista notas de Serviço
	 */
	public function ListarLoteNfse(ListarLoteNfseRequest $ListarLoteNfseRequest): ?ListarLoteNfseResponse {
		$res = $this->_Call('ListarLoteNfse',Array(
			$ListarLoteNfseRequest
		));
		return $this->_Cast($res, ListarLoteNfseResponse::class);
	}

	/**
	 * Status do lote faturado a partir do ID.
	 *
	 * @param StatusLoteOsRequest $StatusLoteOsRequest Obtém o status do Lote da Ordem de Serviço
	 * @return StatusLoteOsResponse Retorna informações do Lote da Ordem de Serviço
	 */
	public function StatusLoteOS(StatusLoteOsRequest $StatusLoteOsRequest): ?StatusLoteOsResponse {
		$res = $this->_Call('StatusLoteOS',Array(
			$StatusLoteOsRequest
		));
		return $this->_Cast($res, StatusLoteOsResponse::class);
	}

	/**
	 * Lista status das Ordens de serviço faturadas a partir da data de procesasmento do lote
	 *
	 * @param ListarLotesOSRequest $ListarLotesOSRequest Listar status de faturamento das Ordens de serviço a partir das datas de processamento.
	 * @return ListarLotesOSResponse Response do método que lista Ordens de Serviços
	 */
	public function ListarLotesOS(ListarLotesOSRequest $ListarLotesOSRequest): ?ListarLotesOSResponse {
		$res = $this->_Call('ListarLotesOS',Array(
			$ListarLotesOSRequest
		));
		return $this->_Cast($res, ListarLotesOSResponse::class);
	}
}
