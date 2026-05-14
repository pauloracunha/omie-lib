<?php

namespace OmieLib\Geral\Familias;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Familias\Request\FamConsultarRequest;
use OmieLib\Geral\Familias\Request\FamListarRequest;
use OmieLib\Geral\Familias\Response\FamConsultarResponse;
use OmieLib\Geral\Familias\Response\FamListarResponse;

/**
 * @service FamiliasCadastroJsonClient
 * @author omie
 */
class FamiliasCadastroJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/familias/';

	/**
	 * Inclui uma familia de produto
	 *
	 * @param FamCadastro $famCadastro Cadastro de Familias de Produtos
	 * @return FamStatus Status da Familia de Produtos
	 */
	public function IncluirFamilia(FamCadastro $famCadastro): ?FamStatus {
		$res = $this->_Call('IncluirFamilia',Array(
			$famCadastro
		));
		return $this->_Cast($res, FamStatus::class);
	}

	/**
	 * Altera uma familia de produto
	 *
	 * @param FamCadastro $famCadastro Cadastro de Familias de Produtos
	 * @return FamStatus Status da Familia de Produtos
	 */
	public function AlterarFamilia(FamCadastro $famCadastro): ?FamStatus {
		$res = $this->_Call('AlterarFamilia',Array(
			$famCadastro
		));
		return $this->_Cast($res, FamStatus::class);
	}

	/**
	 * Inclui / Altera uma familia de produto
	 *
	 * @param FamCadastro $famCadastro Cadastro de Familias de Produtos
	 * @return FamStatus Status da Familia de Produtos
	 */
	public function UpsertFamilia(FamCadastro $famCadastro): ?FamStatus {
		$res = $this->_Call('UpsertFamilia',Array(
			$famCadastro
		));
		return $this->_Cast($res, FamStatus::class);
	}

	/**
	 * Exclui uma familia de produto
	 *
	 * @param FamChave $famChave chave de pesquisa do Cadastro de Familias de produtos
	 * @return FamStatus Status da Familia de Produtos
	 */
	public function ExcluirFamilia(FamChave $famChave): ?FamStatus {
		$res = $this->_Call('ExcluirFamilia',Array(
			$famChave
		));
		return $this->_Cast($res, FamStatus::class);
	}

	/**
	 * Consulta uma familia de produto
	 *
	 * @param FamConsultarRequest $famConsultarRequest Solicitação de Consulta de uma Familia de Produtos
	 * @return FamConsultarResponse Resposta do consulta de Familias de Produtos
	 */
	public function ConsultarFamilia(FamConsultarRequest $famConsultarRequest): ?FamConsultarResponse {
		$res = $this->_Call('ConsultarFamilia',Array(
			$famConsultarRequest
		));
		return $this->_Cast($res, FamConsultarResponse::class);
	}

	/**
	 * Listagem de familias cadastradas
	 *
	 * @param FamListarRequest $famListarRequest Solicitação de Listagem de Familias de Produtos
	 * @return FamListarResponse Resposta da listagem de Familias de Produtos
	 */
	public function PesquisarFamilias(FamListarRequest $famListarRequest): ?FamListarResponse {
		$res = $this->_Call('PesquisarFamilias',Array(
			$famListarRequest
		));
		return $this->_Cast($res, FamListarResponse::class);
	}
}
