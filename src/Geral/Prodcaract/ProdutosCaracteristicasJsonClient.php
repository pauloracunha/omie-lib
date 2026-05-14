<?php

namespace OmieLib\Geral\Prodcaract;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Prodcaract\Request\PrcAlterarCaractRequest;
use OmieLib\Geral\Prodcaract\Request\PrcConsultarCaractRequest;
use OmieLib\Geral\Prodcaract\Request\PrcExcluirCaractRequest;
use OmieLib\Geral\Prodcaract\Request\PrcIncluirCaractRequest;
use OmieLib\Geral\Prodcaract\Request\PrcListarCaractRequest;
use OmieLib\Geral\Prodcaract\Response\PrcAlterarCaractResponse;
use OmieLib\Geral\Prodcaract\Response\PrcConsultarCaractResponse;
use OmieLib\Geral\Prodcaract\Response\PrcExcluirCaractResponse;
use OmieLib\Geral\Prodcaract\Response\PrcIncluirCaractResponse;
use OmieLib\Geral\Prodcaract\Response\PrcListarCaractResponse;

/**
 * @service ProdutosCaracteristicasJsonClient
 * @author omie
 */
class ProdutosCaracteristicasJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/prodcaract/';

	/**
	 * Inclui uma característica a um produto.
	 *
	 * @param PrcIncluirCaractRequest $prcIncluirCaractRequest Inclui uma característica para um produto.
	 * @return PrcIncluirCaractResponse Resposta da solicitação de inclusão de uma característica para um produto.
	 */
	public function IncluirCaractProduto(PrcIncluirCaractRequest $prcIncluirCaractRequest): ?PrcIncluirCaractResponse {
		$res = $this->_Call('IncluirCaractProduto',Array(
			$prcIncluirCaractRequest
		));
		return $this->_Cast($res, PrcIncluirCaractResponse::class);
	}

	/**
	 * Altera a característica de um produto.
	 *
	 * @param PrcAlterarCaractRequest $prcAlterarCaractRequest Altera uma característica para um produto.
	 * @return PrcAlterarCaractResponse Resposta da solicitação de alteração de uma característica para um produto.
	 */
	public function AlterarCaractProduto(PrcAlterarCaractRequest $prcAlterarCaractRequest): ?PrcAlterarCaractResponse {
		$res = $this->_Call('AlterarCaractProduto',Array(
			$prcAlterarCaractRequest
		));
		return $this->_Cast($res, PrcAlterarCaractResponse::class);
	}

	/**
	 * Excluir um característica de um produto.
	 *
	 * @param PrcExcluirCaractRequest $prcExcluirCaractRequest Exclui uma característica de um produto.
	 * @return PrcExcluirCaractResponse Resposta da solicitação de exclusão da característica de um produto.
	 */
	public function ExcluirCaractProduto(PrcExcluirCaractRequest $prcExcluirCaractRequest): ?PrcExcluirCaractResponse {
		$res = $this->_Call('ExcluirCaractProduto',Array(
			$prcExcluirCaractRequest
		));
		return $this->_Cast($res, PrcExcluirCaractResponse::class);
	}

	/**
	 * Consultar uma característica de um produto.
	 *
	 * @param PrcConsultarCaractRequest $prcConsultarCaractRequest Consulta uma característica de um produto.
	 * @return PrcConsultarCaractResponse Resposta da solicitação de consulta da característica de um produto.
	 */
	public function ConsultarCaractProduto(PrcConsultarCaractRequest $prcConsultarCaractRequest): ?PrcConsultarCaractResponse {
		$res = $this->_Call('ConsultarCaractProduto',Array(
			$prcConsultarCaractRequest
		));
		return $this->_Cast($res, PrcConsultarCaractResponse::class);
	}

	/**
	 * Lista as características de um produto.
	 *
	 * @param PrcListarCaractRequest $prcListarCaractRequest Listagem de características de um produto.
	 * @return PrcListarCaractResponse Resposta da solicitação de listagem das características de um produto.
	 */
	public function ListarCaractProduto(PrcListarCaractRequest $prcListarCaractRequest): ?PrcListarCaractResponse {
		$res = $this->_Call('ListarCaractProduto',Array(
			$prcListarCaractRequest
		));
		return $this->_Cast($res, PrcListarCaractResponse::class);
	}
}
