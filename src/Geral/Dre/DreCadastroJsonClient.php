<?php

namespace OmieLib\Geral\Dre;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Dre\Request\DreCadastroListRequest;
use OmieLib\Geral\Dre\Response\DreCadastroListResponse;

/**
 * @service DreCadastroJsonClient
 * @author omie
 */
class DreCadastroJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/dre/';

	/**
	 * Lista as contas do DRE
	 *
	 * @param DreCadastroListRequest $dreCadastroListRequest Lista os DREs cadastrados.
	 * @return DreCadastroListResponse Retorna a lista de Contas do DRE.
	 */
	public function ListarCadastroDRE(DreCadastroListRequest $dreCadastroListRequest): ?DreCadastroListResponse {
		$res = $this->_Call('ListarCadastroDRE',Array(
			$dreCadastroListRequest
		));
		return $this->_Cast($res, DreCadastroListResponse::class);
	}
}
