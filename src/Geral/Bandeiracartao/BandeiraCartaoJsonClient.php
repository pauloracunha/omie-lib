<?php

namespace OmieLib\Geral\Bandeiracartao;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Bandeiracartao\Request\ListarBandeirasRequest;
use OmieLib\Geral\Bandeiracartao\Response\ListarBandeirasResponse;

/**
 * @service BandeiraCartaoJsonClient
 * @author omie
 */
class BandeiraCartaoJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/bandeiracartao/';

	/**
	 * Executa a listagem de bandeiras dos cartões.
	 *
	 * @param ListarBandeirasRequest $ListarBandeirasRequest Solicita a listagem das bandeiras de cartões.
	 * @return ListarBandeirasResponse Retorno da solicitação da listagem das bandeiras de cartões.
	 */
	public function ListarBandeiras(ListarBandeirasRequest $ListarBandeirasRequest): ListarBandeirasResponse{
		return $this->_Call('ListarBandeiras',Array(
			$ListarBandeirasRequest
		));
	}
}
