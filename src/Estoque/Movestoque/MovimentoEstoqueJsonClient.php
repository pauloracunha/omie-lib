<?php

namespace OmieLib\Estoque\Movestoque;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Movestoque\Request\EpListarRequest;
use OmieLib\Estoque\Movestoque\Request\EpPrevisaoRequest;
use OmieLib\Estoque\Movestoque\Response\EpListarResponse;
use OmieLib\Estoque\Movestoque\Response\EpPrevisaoResponse;

/**
 * @service MovimentoEstoqueJsonClient
 * @author omie
 */
class MovimentoEstoqueJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='estoque/movestoque/';

	/**
	 * Lista os movimentos de entrada/saida de um período.
	 *
	 * @param EpListarRequest $epListarRequest Solicitação da listagem movimentos de estoque de entrada/saida de um período.
	 * @return EpListarResponse Resposta da solicitação da listagem movimentos de estoque de entrada/saida de um período.
	 */
	public function ListarMovimentos(EpListarRequest $epListarRequest): ?EpListarResponse {
		$res = $this->_Call('ListarMovimentos',Array(
			$epListarRequest
		));
		return $this->_Cast($res, EpListarResponse::class);
	}

	/**
	 * Consulta a previsão de venda em estoque de um produto.
	 *
	 * @param EpPrevisaoRequest $epPrevisaoRequest Previsão de estoque do produto.
	 * @return EpPrevisaoResponse Previsão de estoque do produto.
	 */
	public function ConsultarPrevisao(EpPrevisaoRequest $epPrevisaoRequest): ?EpPrevisaoResponse {
		$res = $this->_Call('ConsultarPrevisao',Array(
			$epPrevisaoRequest
		));
		return $this->_Cast($res, EpPrevisaoResponse::class);
	}
}
