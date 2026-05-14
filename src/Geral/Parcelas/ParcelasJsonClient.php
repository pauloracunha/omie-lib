<?php

namespace OmieLib\Geral\Parcelas;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Parcelas\Request\ParcelaIncluirRequest;
use OmieLib\Geral\Parcelas\Request\ParcelaListarRequest;
use OmieLib\Geral\Parcelas\Response\ParcelaIncluirResponse;
use OmieLib\Geral\Parcelas\Response\ParcelaListarResponse;

/**
 * @service ParcelasJsonClient
 * @author omie
 */
class ParcelasJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/parcelas/';

	/**
	 * Lista de Parcelas cadastradas.
	 *
	 * @param ParcelaListarRequest $parcelaListarRequest Solicitação da listagem de parcelas disponíveis.
	 * @return ParcelaListarResponse Resposta da solicitação da listagem de Parcelas.
	 */
	public function ListarParcelas(ParcelaListarRequest $parcelaListarRequest): ParcelaListarResponse{
		return $this->_Call('ListarParcelas',Array(
			$parcelaListarRequest
		));
	}

	/**
	 * Método para a criação de uma parcela.
	 *
	 * @param ParcelaIncluirRequest $parcelaIncluirRequest Solicitação da inclusão de uma parcela.
	 * @return ParcelaIncluirResponse Resposta da solicitação da inclusão de parcela.
	 */
	public function IncluirParcela(ParcelaIncluirRequest $parcelaIncluirRequest): ParcelaIncluirResponse{
		return $this->_Call('IncluirParcela',Array(
			$parcelaIncluirRequest
		));
	}
}
