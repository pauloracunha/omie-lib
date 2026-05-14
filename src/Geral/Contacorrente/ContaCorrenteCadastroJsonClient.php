<?php

namespace OmieLib\Geral\Contacorrente;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;

/**
 * @service ContaCorrenteCadastroJsonClient
 * @author omie
 */
class ContaCorrenteCadastroJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/contacorrente/';

	/**
	 * Inclui uma conta corrente
	 *
	 * @param Fin_conta_corrente_cadastro $fin_conta_corrente_cadastro Cadastro de contas correntes
	 * @return Fin_conta_corrente_cadastro_response Response do cadastro do conta corrente.
	 */
	public function IncluirContaCorrente(Fin_conta_corrente_cadastro $fin_conta_corrente_cadastro): Fin_conta_corrente_cadastro_response{
		return $this->_Call('IncluirContaCorrente',Array(
			$fin_conta_corrente_cadastro
		));
	}

	/**
	 * Altera a Conta Corrente
	 *
	 * @param Fin_conta_corrente_cadastro $fin_conta_corrente_cadastro Cadastro de contas correntes
	 * @return Fin_conta_corrente_cadastro_response Response do cadastro do conta corrente.
	 */
	public function AlterarContaCorrente(Fin_conta_corrente_cadastro $fin_conta_corrente_cadastro): Fin_conta_corrente_cadastro_response{
		return $this->_Call('AlterarContaCorrente',Array(
			$fin_conta_corrente_cadastro
		));
	}

	/**
	 * Excluir a Conta Corrente
	 *
	 * @param Fin_conta_corrente_chave $fin_conta_corrente_chave Chave de pesquisa da Conta Corrente
	 * @return Fin_conta_corrente_cadastro_response Response do cadastro do conta corrente.
	 */
	public function ExcluirContaCorrente(Fin_conta_corrente_chave $fin_conta_corrente_chave): Fin_conta_corrente_cadastro_response{
		return $this->_Call('ExcluirContaCorrente',Array(
			$fin_conta_corrente_chave
		));
	}

	/**
	 * Realiza a consulta de uma conta corrente
	 *
	 * @param Fin_conta_corrente_chave $fin_conta_corrente_chave Chave de pesquisa da Conta Corrente
	 * @return Fin_conta_corrente_cadastro Cadastro de contas correntes
	 */
	public function ConsultarContaCorrente(Fin_conta_corrente_chave $fin_conta_corrente_chave): Fin_conta_corrente_cadastro{
		return $this->_Call('ConsultarContaCorrente',Array(
			$fin_conta_corrente_chave
		));
	}

	/**
	 * DEPRECATED
	 *
	 * @param Fin_conta_corrente_pesquisar $fin_conta_corrente_pesquisar DEPRECATED
	 * @return Fin_conta_corrente_pesquisar_resposta DEPRECATED
	 */
	public function PesquisarContaCorrente(Fin_conta_corrente_pesquisar $fin_conta_corrente_pesquisar): Fin_conta_corrente_pesquisar_resposta{
		return $this->_Call('PesquisarContaCorrente',Array(
			$fin_conta_corrente_pesquisar
		));
	}

	/**
	 * Upsert da Conta Corrente
	 *
	 * @param Fin_conta_corrente_cadastro $fin_conta_corrente_cadastro Cadastro de contas correntes
	 * @return Fin_conta_corrente_cadastro_response Response do cadastro do conta corrente.
	 */
	public function UpsertContaCorrente(Fin_conta_corrente_cadastro $fin_conta_corrente_cadastro): Fin_conta_corrente_cadastro_response{
		return $this->_Call('UpsertContaCorrente',Array(
			$fin_conta_corrente_cadastro
		));
	}

	/**
	 * Upsert por lote de Conta Corrente
	 *
	 * @param Fin_conta_corrente_lote_request $fin_conta_corrente_lote_request Request do Lote da Conta Corrente
	 * @return Fin_conta_corrente_lote_response Response do conta corrente
	 */
	public function UpsertContaCorrentePorLote(Fin_conta_corrente_lote_request $fin_conta_corrente_lote_request): Fin_conta_corrente_lote_response{
		return $this->_Call('UpsertContaCorrentePorLote',Array(
			$fin_conta_corrente_lote_request
		));
	}

	/**
	 * Listar Contas Correntes
	 *
	 * @param Fin_conta_corrente_listar_request $fin_conta_corrente_listar_request Retorno da solicitação da listagem de contas correntes cadastradas no Omie.
	 * @return Fin_conta_corrente_listar_response Solicitação da listagem de Contas Correntes encontradas.
	 */
	public function ListarContasCorrentes(Fin_conta_corrente_listar_request $fin_conta_corrente_listar_request): Fin_conta_corrente_listar_response{
		return $this->_Call('ListarContasCorrentes',Array(
			$fin_conta_corrente_listar_request
		));
	}

	/**
	 * Listar resumida de Contas correntes.
	 *
	 * @param Fin_conta_corrente_resumo_request $fin_conta_corrente_resumo_request Solicitação da listagem resumida de contas correntes.
	 * @return Fin_conta_corrente_resumo_response Resposta da solicitação de listagem resumida da conta corrente.
	 */
	public function ListarResumoContasCorrentes(Fin_conta_corrente_resumo_request $fin_conta_corrente_resumo_request): Fin_conta_corrente_resumo_response{
		return $this->_Call('ListarResumoContasCorrentes',Array(
			$fin_conta_corrente_resumo_request
		));
	}
}
