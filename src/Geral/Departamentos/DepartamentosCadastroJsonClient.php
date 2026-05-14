<?php

namespace OmieLib\Geral\Departamentos;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;

/**
 * @service DepartamentosCadastroJsonClient
 * @author omie
 */
class DepartamentosCadastroJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/departamentos/';

	/**
	 * @param Departamento_incluir_request $departamento_incluir_request Inclui um departamento.
	 * @return Departamento_incluir_response Resposta da solicitação de inclusão de um departamento.
	 */
	public function IncluirDepartamento(Departamento_incluir_request $departamento_incluir_request): Departamento_incluir_response{
		return $this->_Call('IncluirDepartamento',Array(
			$departamento_incluir_request
		));
	}

	/**
	 * Consulta um código de departamento.
	 *
	 * @param Departamento_consultar $departamento_consultar Consulta um código de departamento.
	 * @return Departamentos Cadastro de Departamentos
	 */
	public function ConsultarDepartamento(Departamento_consultar $departamento_consultar): Departamentos{
		return $this->_Call('ConsultarDepartamento',Array(
			$departamento_consultar
		));
	}

	/**
	 * @param Departamento_alterar_request $departamento_alterar_request Altera um departamento.
	 * @return Departamento_alterar_response Resposta da solicitação de alteração de um departamento.
	 */
	public function AlterarDepartamento(Departamento_alterar_request $departamento_alterar_request): Departamento_alterar_response{
		return $this->_Call('AlterarDepartamento',Array(
			$departamento_alterar_request
		));
	}

	/**
	 * @param Departamento_listar_request $departamento_listar_request Filtro para pesquisa
	 * @return Departamento_listar_response
	 */
	public function ListarDepartamentos(Departamento_listar_request $departamento_listar_request): Departamento_listar_response{
		return $this->_Call('ListarDepartamentos',Array(
			$departamento_listar_request
		));
	}

	/**
	 * @param Departamento_excluir_request $departamento_excluir_request Exclui um departamento.
	 * @return Departamento_excluir_response Resposta da solicitação da exclusão do Deparrtamento.
	 */
	public function ExcluirDepartamento(Departamento_excluir_request $departamento_excluir_request): Departamento_excluir_response{
		return $this->_Call('ExcluirDepartamento',Array(
			$departamento_excluir_request
		));
	}

	/**
	 * DEPRECATED
	 *
	 * @param Departamento_listar_request $departamento_listar_request Filtro para pesquisa
	 * @return Departamento_listar_response
	 */
	public function ListarDepatartamentos(Departamento_listar_request $departamento_listar_request): Departamento_listar_response{
		return $this->_Call('ListarDepatartamentos',Array(
			$departamento_listar_request
		));
	}
}
