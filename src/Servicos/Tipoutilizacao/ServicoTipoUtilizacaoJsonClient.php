<?php

namespace OmieLib\Servicos\Tipoutilizacao;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Tipoutilizacao\Request\TipoUtilizacaoRequest;
use OmieLib\Servicos\Tipoutilizacao\Response\TipoUtilizacaoResponse;

/**
 * @service ServicoTipoUtilizacaoJsonClient
 * @author omie
 */
class ServicoTipoUtilizacaoJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='servicos/tipoutilizacao/';

	/**
	 * Lista os tipos de utilização do serviço
	 *
	 * @param TipoUtilizacaoRequest $tipoUtilizacaoRequest Solicitação da listagem de tipo de utilização do serviço (NF modelo 21 e 22).
	 * @return TipoUtilizacaoResponse Resposta da solicitação de tipo de utilização do serviço (NF modelo 21 e 22).
	 */
	public function ListarTipoUtilizacao(TipoUtilizacaoRequest $tipoUtilizacaoRequest): TipoUtilizacaoResponse{
		return $this->_Call('ListarTipoUtilizacao',Array(
			$tipoUtilizacaoRequest
		));
	}
}
