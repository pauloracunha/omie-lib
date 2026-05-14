<?php

namespace OmieLib\Geral\Produtoskit;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Produtoskit\Request\AlterarCompKitRequest;
use OmieLib\Geral\Produtoskit\Response\AlterarCompKitResponse;

/**
 * @service ProdutosKitJsonClient
 * @author omie
 */
class ProdutosKitJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/produtoskit/';

	/**
	 * Inclui/Altera/Exclui os componentes do KIT.
	 *
	 * @param AlterarCompKitRequest $AlterarCompKitRequest Inclui/Altera/Exclui os componentes do KIT.
	 * @return AlterarCompKitResponse Resposta da solicitação de alteração dos componentes do KIT.
	 */
	public function AlterarComponentesKit(AlterarCompKitRequest $AlterarCompKitRequest): ?AlterarCompKitResponse {
		$res = $this->_Call('AlterarComponentesKit',Array(
			$AlterarCompKitRequest
		));
		return $this->_Cast($res, AlterarCompKitResponse::class);
	}
}
