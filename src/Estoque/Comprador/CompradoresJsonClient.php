<?php

namespace OmieLib\Estoque\Comprador;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Comprador\Request\CompradorListarRequest;
use OmieLib\Estoque\Comprador\Response\CompradorListarResponse;

/**
 * @service CompradoresJsonClient
 * @author omie
 */
class CompradoresJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='estoque/comprador/';

	/**
	 * Lista os compradores cadastrados.
	 *
	 * @param CompradorListarRequest $CompradorListarRequest Solicitação da listagem de compradores.
	 * @return CompradorListarResponse Resposta da solicitação da listagem de compradores.
	 */
	public function ListarCompradores(CompradorListarRequest $CompradorListarRequest): CompradorListarResponse{
		return $this->_Call('ListarCompradores',Array(
			$CompradorListarRequest
		));
	}
}
