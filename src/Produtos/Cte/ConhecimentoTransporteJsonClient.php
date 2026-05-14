<?php

namespace OmieLib\Produtos\Cte;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cte\Request\CteAverbacaoRequest;
use OmieLib\Produtos\Cte\Request\CteCCRequest;
use OmieLib\Produtos\Cte\Request\CteCancelarRequest;
use OmieLib\Produtos\Cte\Request\CteExcluirFatRequest;
use OmieLib\Produtos\Cte\Request\CteExcluirRequest;
use OmieLib\Produtos\Cte\Request\CteFaturarLoteRequest;
use OmieLib\Produtos\Cte\Request\CteFaturarRequest;
use OmieLib\Produtos\Cte\Request\CteImportarRequest;
use OmieLib\Produtos\Cte\Request\CteListarNFeRequest;
use OmieLib\Produtos\Cte\Request\CteStatusFaturaRequest;
use OmieLib\Produtos\Cte\Response\CteAverbacaoResponse;
use OmieLib\Produtos\Cte\Response\CteCCResponse;
use OmieLib\Produtos\Cte\Response\CteCancelarResponse;
use OmieLib\Produtos\Cte\Response\CteExcluirFatResponse;
use OmieLib\Produtos\Cte\Response\CteExcluirResponse;
use OmieLib\Produtos\Cte\Response\CteFaturarLoteResponse;
use OmieLib\Produtos\Cte\Response\CteFaturarResponse;
use OmieLib\Produtos\Cte\Response\CteImportarResponse;
use OmieLib\Produtos\Cte\Response\CteListarNFeResponse;
use OmieLib\Produtos\Cte\Response\CteStatusFaturaResponse;

/**
 * @service ConhecimentoTransporteJsonClient
 * @author omie
 */
class ConhecimentoTransporteJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/cte/';

	/**
	 * Importar o XML de um CT-e.
	 *
	 * @param CteImportarRequest $cteImportarRequest Solicitação do Importação de CT-e.
	 * @return CteImportarResponse Resposta da solicitação da Importação de CT-e.
	 */
	public function ImportarCTe(CteImportarRequest $cteImportarRequest): ?CteImportarResponse {
		$res = $this->_Call('ImportarCTe',Array(
			$cteImportarRequest
		));
		return $this->_Cast($res, CteImportarResponse::class);
	}

	/**
	 * Cancela um CT-e.
	 *
	 * @param CteCancelarRequest $cteCancelarRequest Solicitação de Cancelamento de CT-e.
	 * @return CteCancelarResponse Resposta da solicitação de cancelamento do CT-e.
	 */
	public function CancelarCTe(CteCancelarRequest $cteCancelarRequest): ?CteCancelarResponse {
		$res = $this->_Call('CancelarCTe',Array(
			$cteCancelarRequest
		));
		return $this->_Cast($res, CteCancelarResponse::class);
	}

	/**
	 * Carta de Correção da CT-e
	 *
	 * @param CteCCRequest $cteCCRequest Solicitação de Carta de Correção do CT-e.
	 * @return CteCCResponse Resposta da solicitação da Carta de Correção do CT-e.
	 */
	public function CartaCorrecaoCTe(CteCCRequest $cteCCRequest): ?CteCCResponse {
		$res = $this->_Call('CartaCorrecaoCTe',Array(
			$cteCCRequest
		));
		return $this->_Cast($res, CteCCResponse::class);
	}

	/**
	 * Listar as NFes na qual a empresa é mencionada como Transportadora.
	 *
	 * @param CteListarNFeRequest $cteListarNFeRequest Solicitação de listagem de NF-es cuja empresa é mencionada como transportadora no XML da NF-e.
	 * @return CteListarNFeResponse Resposta da solicitação de listagem de NF-es cuja empresa é mencionada como transportadora no XML da NF-e.
	 */
	public function ListarNFeTransp(CteListarNFeRequest $cteListarNFeRequest): ?CteListarNFeResponse {
		$res = $this->_Call('ListarNFeTransp',Array(
			$cteListarNFeRequest
		));
		return $this->_Cast($res, CteListarNFeResponse::class);
	}

	/**
	 * Recebe o XML de averbação do XML.
	 *
	 * @param CteAverbacaoRequest $cteAverbacaoRequest Solicitação de Averbação do CT-e.
	 * @return CteAverbacaoResponse Resposta da solicitação da Averbação do CT-e.
	 */
	public function AverbacaoCTe(CteAverbacaoRequest $cteAverbacaoRequest): ?CteAverbacaoResponse {
		$res = $this->_Call('AverbacaoCTe',Array(
			$cteAverbacaoRequest
		));
		return $this->_Cast($res, CteAverbacaoResponse::class);
	}

	/**
	 * Gera uma fatura para um grupo de CT-es.
	 *
	 * @param CteFaturarRequest $cteFaturarRequest Solicitação do faturamento de um grupo de CT-es.
	 * @return CteFaturarResponse Resposta da solicitação da faturamento de um grupos de CT-es.
	 */
	public function FaturarCTe(CteFaturarRequest $cteFaturarRequest): ?CteFaturarResponse {
		$res = $this->_Call('FaturarCTe',Array(
			$cteFaturarRequest
		));
		return $this->_Cast($res, CteFaturarResponse::class);
	}

	/**
	 * Gera uma fatura por lote para um grupo de CT-es.
	 *
	 * @param CteFaturarLoteRequest $cteFaturarLoteRequest Solicitação do faturamento em lote de um grupo de CT-es.
	 * @return CteFaturarLoteResponse Resposta da solicitação da faturamento por lote de um grupos de CT-es.
	 */
	public function FaturarLoteCTe(CteFaturarLoteRequest $cteFaturarLoteRequest): ?CteFaturarLoteResponse {
		$res = $this->_Call('FaturarLoteCTe',Array(
			$cteFaturarLoteRequest
		));
		return $this->_Cast($res, CteFaturarLoteResponse::class);
	}

	/**
	 * Exclui uma fatura de um grupo de CT-es.
	 *
	 * @param CteExcluirFatRequest $cteExcluirFatRequest Solicitação da exclusão do faturamento de um grupo de CT-es.
	 * @return CteExcluirFatResponse Resposta da solicitação da exclusão do faturamento de um grupos de CT-es.
	 */
	public function ExcluirFaturaCTe(CteExcluirFatRequest $cteExcluirFatRequest): ?CteExcluirFatResponse {
		$res = $this->_Call('ExcluirFaturaCTe',Array(
			$cteExcluirFatRequest
		));
		return $this->_Cast($res, CteExcluirFatResponse::class);
	}

	/**
	 * Retorna o Status da Fatura inclusa.
	 *
	 * @param CteStatusFaturaRequest $cteStatusFaturaRequest Solicitação de Status da Fatura importada
	 * @return CteStatusFaturaResponse Response do Status da Fatura importada.
	 */
	public function StatusFatura(CteStatusFaturaRequest $cteStatusFaturaRequest): ?CteStatusFaturaResponse {
		$res = $this->_Call('StatusFatura',Array(
			$cteStatusFaturaRequest
		));
		return $this->_Cast($res, CteStatusFaturaResponse::class);
	}

	/**
	 * Método de exclusão do Conhecimento de Transporte.
	 *
	 * @param CteExcluirRequest $cteExcluirRequest Estrutura para excluir o CT-e.
	 * @return CteExcluirResponse Estrutura para retornar a exclusão do CT-e.
	 */
	public function ExcluirCTe(CteExcluirRequest $cteExcluirRequest): ?CteExcluirResponse {
		$res = $this->_Call('ExcluirCTe',Array(
			$cteExcluirRequest
		));
		return $this->_Cast($res, CteExcluirResponse::class);
	}
}
