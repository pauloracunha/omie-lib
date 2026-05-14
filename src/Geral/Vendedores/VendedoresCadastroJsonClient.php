<?php

namespace OmieLib\Geral\Vendedores;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Vendedores\Request\VendAlterarRequest;
use OmieLib\Geral\Vendedores\Request\VendConsultarRequest;
use OmieLib\Geral\Vendedores\Request\VendExcluirRequest;
use OmieLib\Geral\Vendedores\Request\VendListarRequest;
use OmieLib\Geral\Vendedores\Request\VendUpsertRequest;
use OmieLib\Geral\Vendedores\Request\VendincluirRequest;
use OmieLib\Geral\Vendedores\Response\VendAlterarResponse;
use OmieLib\Geral\Vendedores\Response\VendConsultarResponse;
use OmieLib\Geral\Vendedores\Response\VendExcluirResponse;
use OmieLib\Geral\Vendedores\Response\VendIncluirResponse;
use OmieLib\Geral\Vendedores\Response\VendListarResponse;
use OmieLib\Geral\Vendedores\Response\VendUpsertResponse;

/**
 * @service VendedoresCadastroJsonClient
 * @author omie
 */
class VendedoresCadastroJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/vendedores/';

	/**
	 * Inclui um vendedor
	 *
	 * @param VendincluirRequest $vendincluirRequest Solicitação de Inclusão de um vendedor
	 * @return VendIncluirResponse Resposta da Solicitação de inclusão de um vendedor.
	 */
	public function IncluirVendedor(VendincluirRequest $vendincluirRequest): VendIncluirResponse{
		return $this->_Call('IncluirVendedor',Array(
			$vendincluirRequest
		));
	}

	/**
	 * Altera os dados de um vendedor
	 *
	 * @param VendAlterarRequest $vendAlterarRequest Solicitação de Alteração de um vendedor
	 * @return VendAlterarResponse Resposta da Solicitação de alteração de um vendedor.
	 */
	public function AlterarVendedor(VendAlterarRequest $vendAlterarRequest): VendAlterarResponse{
		return $this->_Call('AlterarVendedor',Array(
			$vendAlterarRequest
		));
	}

	/**
	 * Inclui / Altera um vendedor
	 *
	 * @param VendUpsertRequest $vendUpsertRequest Solicitação de Inclusão/Alteração de um vendedor
	 * @return VendUpsertResponse Resposta da Solicitação de inclusão/alteração de um vendedor.
	 */
	public function UpsertVendedor(VendUpsertRequest $vendUpsertRequest): VendUpsertResponse{
		return $this->_Call('UpsertVendedor',Array(
			$vendUpsertRequest
		));
	}

	/**
	 * Exclui um vendedor
	 *
	 * @param VendExcluirRequest $vendExcluirRequest Solicitação de Exclusão de um fornecedor.
	 * @return VendExcluirResponse Resposta da Solicitação de exclusão de um vendedor.
	 */
	public function ExcluirVendedor(VendExcluirRequest $vendExcluirRequest): VendExcluirResponse{
		return $this->_Call('ExcluirVendedor',Array(
			$vendExcluirRequest
		));
	}

	/**
	 * Consulta os dados de um vendedor
	 *
	 * @param VendConsultarRequest $vendConsultarRequest Solicitação de Consulta de um Vendedor
	 * @return VendConsultarResponse Reposta da consulta de Vendedores
	 */
	public function ConsultarVendedor(VendConsultarRequest $vendConsultarRequest): VendConsultarResponse{
		return $this->_Call('ConsultarVendedor',Array(
			$vendConsultarRequest
		));
	}

	/**
	 * Listagem de Vendedores
	 *
	 * @param VendListarRequest $vendListarRequest Solicitação de Listagem de Vendedores
	 * @return VendListarResponse Resposta da listagem de Vendedores
	 */
	public function ListarVendedores(VendListarRequest $vendListarRequest): VendListarResponse{
		return $this->_Call('ListarVendedores',Array(
			$vendListarRequest
		));
	}
}
