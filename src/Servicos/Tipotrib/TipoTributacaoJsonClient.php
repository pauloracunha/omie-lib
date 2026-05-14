<?php

namespace OmieLib\Servicos\Tipotrib;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Tipotrib\Request\TribListarRequest;
use OmieLib\Servicos\Tipotrib\Response\TribListarResponse;

/**
 * @service TipoTributacaoJsonClient
 * @author omie
 */
class TipoTributacaoJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='servicos/tipotrib/';

	/**
	 * Listar os tipos de tributação do serviço.
	 *
	 * @param TribListarRequest $tribListarRequest Solicitação da Lista de Tipos de Tributação no Município.
	 * @return TribListarResponse Resposta da solicitação da Lista de Tipos de Tributação no Município.
	 */
	public function ListarTiposTrib(TribListarRequest $tribListarRequest): ?TribListarResponse {
		$res = $this->_Call('ListarTiposTrib',Array(
			$tribListarRequest
		));
		return $this->_Cast($res, TribListarResponse::class);
	}
}
