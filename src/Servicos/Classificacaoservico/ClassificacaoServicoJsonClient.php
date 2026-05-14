<?php

namespace OmieLib\Servicos\Classificacaoservico;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Classificacaoservico\Request\ClassificaServicoRequest;
use OmieLib\Servicos\Classificacaoservico\Response\ClassificaServicoResponse;

/**
 * @service ClassificacaoServicoJsonClient
 * @author omie
 */
class ClassificacaoServicoJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='servicos/classificacaoservico/';

	/**
	 * Lista as classificações do serviço
	 *
	 * @param ClassificaServicoRequest $classificaServicoRequest Solicitação da listagem de classificações do serviço (NF modelo 21 e 22).
	 * @return ClassificaServicoResponse Resposta da solicitação de classificações do serviço (NF modelo 21 e 22).
	 */
	public function ListarClassificacaoServico(ClassificaServicoRequest $classificaServicoRequest): ?ClassificaServicoResponse {
		$res = $this->_Call('ListarClassificacaoServico',Array(
			$classificaServicoRequest
		));
		return $this->_Cast($res, ClassificaServicoResponse::class);
	}
}
