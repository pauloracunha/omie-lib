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
	public function IncluirCaracteristica(CaractIncluirRequest $caractIncluirRequest): CaractIncluirResponse{
		return $this->_Call('IncluirCaracteristica',Array(
			$caractIncluirRequest
		));
	}

	/**
	 * Altera uma característica de produto.
	 *
	 * @param CaractAlterarRequest $caractAlterarRequest Altera uma característica de produto.
	 * @return CaractAlterarResponse Resposta da solicitação de alteração de uma característica de produto.
	 */
	public function AlterarCaracteristica(CaractAlterarRequest $caractAlterarRequest): CaractAlterarResponse{
		return $this->_Call('AlterarCaracteristica',Array(
			$caractAlterarRequest
		));
	}

	/**
	 * Exclui uma característica de produto.
	 *
	 * @param CaractExcluirRequest $caractExcluirRequest Exclui uma característica de produto.
	 * @return CaractExcluirResponse Resposta da solicitação de exclusão de uma característica de produto.
	 */
	public function ExcluirCaracteristica(CaractExcluirRequest $caractExcluirRequest): CaractExcluirResponse{
		return $this->_Call('ExcluirCaracteristica',Array(
			$caractExcluirRequest
		));
	}

	/**
	 * Consulta uma característica de produto.
	 *
	 * @param CaractConsultarRequest $caractConsultarRequest Consulta uma característica de produto.
	 * @return CaractConsultarResponse Resposta da solicitação de consulta de uma característica de produto.
	 */
	public function ConsultarCaracteristica(CaractConsultarRequest $caractConsultarRequest): CaractConsultarResponse{
		return $this->_Call('ConsultarCaracteristica',Array(
			$caractConsultarRequest
		));
	}

	/**
	 * Listar as características de produto.
	 *
	 * @param CaractListarRequest $caractListarRequest Listagem de características de produtos.
	 * @return CaractListarResponse Resposta da solicitação de listagem das características de produto.
	 */
	public function ListarCaracteristicas(CaractListarRequest $caractListarRequest): CaractListarResponse{
		return $this->_Call('ListarCaracteristicas',Array(
			$caractListarRequest
		));
	}
}
