<?php

namespace OmieLib\Geral\Malha;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Malha\Request\MalhaAlterarRequest;
use OmieLib\Geral\Malha\Request\MalhaConsultarRequest;
use OmieLib\Geral\Malha\Request\MalhaExcluirRequest;
use OmieLib\Geral\Malha\Request\MalhaIncluirRequest;
use OmieLib\Geral\Malha\Request\MalhaPesquisarRequest;
use OmieLib\Geral\Malha\Response\MalhaAlterarResponse;
use OmieLib\Geral\Malha\Response\MalhaConsultarResponse;
use OmieLib\Geral\Malha\Response\MalhaExcluirResponse;
use OmieLib\Geral\Malha\Response\MalhaIncluirResponse;
use OmieLib\Geral\Malha\Response\MalhaPesquisarResponse;

/**
 * @service ProdutosEstruturaJsonClient
 * @author omie
 */
class ProdutosEstruturaJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/malha/';

	/**
	 * Inclusão da Estrutura do produto.
	 *
	 * @param MalhaIncluirRequest $malhaIncluirRequest Inclusão de item da estrutura do produto.
	 * @return MalhaIncluirResponse Inclusão de item da estrutura do produto.
	 */
	public function IncluirEstrutura(MalhaIncluirRequest $malhaIncluirRequest): MalhaIncluirResponse{
		return $this->_Call('IncluirEstrutura',Array(
			$malhaIncluirRequest
		));
	}

	/**
	 * Alterar a estrutura de um produto.
	 *
	 * @param MalhaAlterarRequest $malhaAlterarRequest Alteração de item da estrutura do produto.
	 * @return MalhaAlterarResponse Alteração de item da estrutura do produto.
	 */
	public function AlterarEstrutura(MalhaAlterarRequest $malhaAlterarRequest): MalhaAlterarResponse{
		return $this->_Call('AlterarEstrutura',Array(
			$malhaAlterarRequest
		));
	}

	/**
	 * Excluir item da estrutura de um produto.
	 *
	 * @param MalhaExcluirRequest $malhaExcluirRequest Exclusão de um item da estrutura de um produto.
	 * @return MalhaExcluirResponse Exclusão de um item da estrutura do produto.
	 */
	public function ExcluirEstrutura(MalhaExcluirRequest $malhaExcluirRequest): MalhaExcluirResponse{
		return $this->_Call('ExcluirEstrutura',Array(
			$malhaExcluirRequest
		));
	}

	/**
	 * Consulta a estrutura do produto.
	 *
	 * @param MalhaConsultarRequest $malhaConsultarRequest Consulta uma malha/estrutura de um produto.
	 * @return MalhaConsultarResponse Resposta da solicitação de consulta da malha/estrutura de um produto.
	 */
	public function ConsultarEstrutura(MalhaConsultarRequest $malhaConsultarRequest): MalhaConsultarResponse{
		return $this->_Call('ConsultarEstrutura',Array(
			$malhaConsultarRequest
		));
	}

	/**
	 * Lista as estruturas de produtos.
	 *
	 * @param MalhaPesquisarRequest $malhaPesquisarRequest Solicitação de Listagem de estruturas de produtos.
	 * @return MalhaPesquisarResponse Resultado da pesquisa de estrutura de produtos.
	 */
	public function ListarEstruturas(MalhaPesquisarRequest $malhaPesquisarRequest): MalhaPesquisarResponse{
		return $this->_Call('ListarEstruturas',Array(
			$malhaPesquisarRequest
		));
	}
}
