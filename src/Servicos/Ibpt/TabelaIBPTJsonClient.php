<?php

namespace OmieLib\Servicos\Ibpt;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Ibpt\Request\IbptListarProdRequest;
use OmieLib\Servicos\Ibpt\Request\IbptListarServRequest;
use OmieLib\Servicos\Ibpt\Response\IbptListarProdResponse;
use OmieLib\Servicos\Ibpt\Response\IbptListarServResponse;

/**
 * @service TabelaIBPTJsonClient
 * @author omie
 */
class TabelaIBPTJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='servicos/ibpt/';

	/**
	 * Lista os Serviços da Tabela do IBPT.
	 *
	 * @param IbptListarServRequest $ibptListarServRequest Solicitação da Tabela IBPT da Empresa.
	 * @return IbptListarServResponse Resposta da solicitação da Tabela IBPT da Empresa.
	 */
	public function ListarServicosIBPT(IbptListarServRequest $ibptListarServRequest): IbptListarServResponse{
		return $this->_Call('ListarServicosIBPT',Array(
			$ibptListarServRequest
		));
	}

	/**
	 * Lista os produtos da Tabela do IBPT.
	 *
	 * @param IbptListarProdRequest $ibptListarProdRequest Solicitação da Tabela IBPT da Empresa.
	 * @return IbptListarProdResponse Resposta da solicitação da Tabela IBPT da Empresa.
	 */
	public function ListarProdutosIBPT(IbptListarProdRequest $ibptListarProdRequest): IbptListarProdResponse{
		return $this->_Call('ListarProdutosIBPT',Array(
			$ibptListarProdRequest
		));
	}
}
