<?php

namespace OmieLib\Servicos\Contratolote;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Contratolote\Request\FaturarLoteContratoRequest;
use OmieLib\Servicos\Contratolote\Request\ListarLotesContratoRequest;
use OmieLib\Servicos\Contratolote\Request\StatusLoteContratoRequest;
use OmieLib\Servicos\Contratolote\Response\FaturarLoteContratoResponse;
use OmieLib\Servicos\Contratolote\Response\ListarLotesContratoResponse;
use OmieLib\Servicos\Contratolote\Response\StatusLoteContratoResponse;

/**
 * @service ContratoLoteJsonClient
 * @author omie
 */
class ContratoLoteJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='servicos/contratolote/';

	/**
	 * Faturar Contrato de Serviços em lote a partir da etapa informada.
	 *
	 * @param FaturarLoteContratoRequest $FaturarLoteContratoRequest Faturar Contrato de Serviço em lote
	 * @return FaturarLoteContratoResponse Response de notas de serviço faturadas em Lote
	 */
	public function FaturarLoteContrato(FaturarLoteContratoRequest $FaturarLoteContratoRequest): ?FaturarLoteContratoResponse {
		$res = $this->_Call('FaturarLoteContrato',Array(
			$FaturarLoteContratoRequest
		));
		return $this->_Cast($res, FaturarLoteContratoResponse::class);
	}

	/**
	 * Lista status dos Contratos de Serviços faturadas a partir da data de procesasmento do lote
	 *
	 * @param ListarLotesContratoRequest $ListarLotesContratoRequest Listar status de faturamento dos Contratos de Serviço a partir das datas de processamento.
	 * @return ListarLotesContratoResponse Response do método que lista Contratos de Serviço.
	 */
	public function ListarLotesContrato(ListarLotesContratoRequest $ListarLotesContratoRequest): ?ListarLotesContratoResponse {
		$res = $this->_Call('ListarLotesContrato',Array(
			$ListarLotesContratoRequest
		));
		return $this->_Cast($res, ListarLotesContratoResponse::class);
	}

	/**
	 * Status do lote faturado a partir do ID.
	 *
	 * @param StatusLoteContratoRequest $StatusLoteContratoRequest Obtém o status do Lote do Contrato de Serviço
	 * @return StatusLoteContratoResponse Retorna informações do Lote do Contrato de Serviço
	 */
	public function StatusLoteContrato(StatusLoteContratoRequest $StatusLoteContratoRequest): ?StatusLoteContratoResponse {
		$res = $this->_Call('StatusLoteContrato',Array(
			$StatusLoteContratoRequest
		));
		return $this->_Cast($res, StatusLoteContratoResponse::class);
	}
}
