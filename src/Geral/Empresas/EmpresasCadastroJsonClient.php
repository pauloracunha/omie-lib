<?php

namespace OmieLib\Geral\Empresas;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;

/**
 * @service EmpresasCadastroJsonClient
 * @author omie
 */
class EmpresasCadastroJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/empresas/';

	/**
	 * Realiza a consulta de um registro especifico
	 *
	 * @param Empresas_consultar $empresas_consultar Consulta um código no cadastro de Empresas
	 * @return Empresas_cadastro Cadastro de Empresas
	 */
	public function ConsultarEmpresa(Empresas_consultar $empresas_consultar): Empresas_cadastro{
		return $this->_Call('ConsultarEmpresa',Array(
			$empresas_consultar
		));
	}

	/**
	 * Lista as empresas cadastradas no Omie.
	 *
	 * @param Empresas_list_request $empresas_list_request Lista as empresas cadastradas
	 * @return Empresas_list_response Lista de empresas cadastradas no omie.
	 */
	public function ListarEmpresas(Empresas_list_request $empresas_list_request): Empresas_list_response{
		return $this->_Call('ListarEmpresas',Array(
			$empresas_list_request
		));
	}
}
