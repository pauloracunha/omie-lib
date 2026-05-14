<?php

namespace OmieLib\Financas\Pesquisartitulos;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Financas\Pesquisartitulos\Request\LtLinkBoletoRequest;
use OmieLib\Financas\Pesquisartitulos\Request\LtListarExcluidosRequest;
use OmieLib\Financas\Pesquisartitulos\Request\LtPesquisarRequest;
use OmieLib\Financas\Pesquisartitulos\Response\LtLinkBoletoResponse;
use OmieLib\Financas\Pesquisartitulos\Response\LtListarExcluidosResponse;
use OmieLib\Financas\Pesquisartitulos\Response\LtPesquisarResponse;

/**
 * @service PesquisarTitulosJsonClient
 * @author omie
 */
class PesquisarTitulosJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='financas/pesquisartitulos/';

	/**
	 * Pesquisa os lancamentos de títulos de Contas a Pagar e Receber
	 *
	 * @param LtPesquisarRequest $ltPesquisarRequest Solicitação de Listagem de Contas a Receber
	 * @return LtPesquisarResponse Resultado da pesquisa de títulos
	 */
	public function PesquisarLancamentos(LtPesquisarRequest $ltPesquisarRequest): LtPesquisarResponse{
		return $this->_Call('PesquisarLancamentos',Array(
			$ltPesquisarRequest
		));
	}

	/**
	 * DEPRECATED
	 *
	 * @param LtListarExcluidosRequest $ltListarExcluidosRequest Solicitação da listagem de contas a pagar e receber excluídas.&nbsp;
	 * @return LtListarExcluidosResponse Resposta da solicitação da listagem de contas a pagar/receber excluídos.
	 */
	public function PesquisarExcluidos(LtListarExcluidosRequest $ltListarExcluidosRequest): LtListarExcluidosResponse{
		return $this->_Call('PesquisarExcluidos',Array(
			$ltListarExcluidosRequest
		));
	}

	/**
	 * DEPRECATED
	 *
	 * @param LtLinkBoletoRequest $ltLinkBoletoRequest Solicitação do link do boleto de um título.
	 * @return LtLinkBoletoResponse Resposta da solicitação do link do boleto de um título.
	 */
	public function ObterURLBoleto(LtLinkBoletoRequest $ltLinkBoletoRequest): LtLinkBoletoResponse{
		return $this->_Call('ObterURLBoleto',Array(
			$ltLinkBoletoRequest
		));
	}
}
