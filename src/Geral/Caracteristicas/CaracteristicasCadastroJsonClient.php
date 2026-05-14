<?php

namespace OmieLib\Geral\Caracteristicas;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Caracteristicas\Request\CaractAlterarRequest;
use OmieLib\Geral\Caracteristicas\Request\CaractConsultarRequest;
use OmieLib\Geral\Caracteristicas\Request\CaractExcluirRequest;
use OmieLib\Geral\Caracteristicas\Request\CaractIncluirRequest;
use OmieLib\Geral\Caracteristicas\Request\CaractListarRequest;
use OmieLib\Geral\Caracteristicas\Response\CaractAlterarResponse;
use OmieLib\Geral\Caracteristicas\Response\CaractConsultarResponse;
use OmieLib\Geral\Caracteristicas\Response\CaractExcluirResponse;
use OmieLib\Geral\Caracteristicas\Response\CaractIncluirResponse;
use OmieLib\Geral\Caracteristicas\Response\CaractListarResponse;

/**
 * @service CaracteristicasCadastroJsonClient
 * @author omie
 */
class CaracteristicasCadastroJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/caracteristicas/';

	/**
	 * Inclui uma característica de produto.
	 *
	 * @param CaractIncluirRequest $caractIncluirRequest Inclui uma característica de produto.
	 * @return CaractIncluirResponse Resposta da solicitação de inclusão de uma característica de produto.
	 */
	public function IncluirCaracteristica(CaractIncluirRequest $caractIncluirRequest): ?CaractIncluirResponse {
		$res = $this->_Call('IncluirCaracteristica',Array(
			$caractIncluirRequest
		));
		return $this->_Cast($res, CaractIncluirResponse::class);
	}

	/**
	 * Altera uma característica de produto.
	 *
	 * @param CaractAlterarRequest $caractAlterarRequest Altera uma característica de produto.
	 * @return CaractAlterarResponse Resposta da solicitação de alteração de uma característica de produto.
	 */
	public function AlterarCaracteristica(CaractAlterarRequest $caractAlterarRequest): ?CaractAlterarResponse {
		$res = $this->_Call('AlterarCaracteristica',Array(
			$caractAlterarRequest
		));
		return $this->_Cast($res, CaractAlterarResponse::class);
	}

	/**
	 * Exclui uma característica de produto.
	 *
	 * @param CaractExcluirRequest $caractExcluirRequest Exclui uma característica de produto.
	 * @return CaractExcluirResponse Resposta da solicitação de exclusão de uma característica de produto.
	 */
	public function ExcluirCaracteristica(CaractExcluirRequest $caractExcluirRequest): ?CaractExcluirResponse {
		$res = $this->_Call('ExcluirCaracteristica',Array(
			$caractExcluirRequest
		));
		return $this->_Cast($res, CaractExcluirResponse::class);
	}

	/**
	 * Consulta uma característica de produto.
	 *
	 * @param CaractConsultarRequest $caractConsultarRequest Consulta uma característica de produto.
	 * @return CaractConsultarResponse Resposta da solicitação de consulta de uma característica de produto.
	 */
	public function ConsultarCaracteristica(CaractConsultarRequest $caractConsultarRequest): ?CaractConsultarResponse {
		$res = $this->_Call('ConsultarCaracteristica',Array(
			$caractConsultarRequest
		));
		return $this->_Cast($res, CaractConsultarResponse::class);
	}

	/**
	 * Listar as características de produto.
	 *
	 * @param CaractListarRequest $caractListarRequest Listagem de características de produtos.
	 * @return CaractListarResponse Resposta da solicitação de listagem das características de produto.
	 */
	public function ListarCaracteristicas(CaractListarRequest $caractListarRequest): ?CaractListarResponse {
		$res = $this->_Call('ListarCaracteristicas',Array(
			$caractListarRequest
		));
		return $this->_Cast($res, CaractListarResponse::class);
	}
}
