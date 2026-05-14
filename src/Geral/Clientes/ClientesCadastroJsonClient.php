<?php

namespace OmieLib\Geral\Clientes;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;

/**
 * @service ClientesCadastroJsonClient
 * @author omie
 */
class ClientesCadastroJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/clientes/';

	/**
	 * Inclui o cliente no Omie
	 *
	 * @param Clientes_cadastro $clientes_cadastro Cadastro reduzido de produtos
	 * @return Clientes_status Status de retorno do cadastro de clientes.
	 */
	public function IncluirCliente(Clientes_cadastro $clientes_cadastro): Clientes_status{
		return $this->_Call('IncluirCliente',Array(
			$clientes_cadastro
		));
	}

	/**
	 * Altera os dados do cliente
	 *
	 * @param Clientes_cadastro $clientes_cadastro Cadastro reduzido de produtos
	 * @return Clientes_status Status de retorno do cadastro de clientes.
	 */
	public function AlterarCliente(Clientes_cadastro $clientes_cadastro): Clientes_status{
		return $this->_Call('AlterarCliente',Array(
			$clientes_cadastro
		));
	}

	/**
	 * Exclui um cliente da base de dados.
	 *
	 * @param Clientes_cadastro_chave $clientes_cadastro_chave Chave para pesquisa do cadastro de clientes.
	 * @return Clientes_status Status de retorno do cadastro de clientes.
	 */
	public function ExcluirCliente(Clientes_cadastro_chave $clientes_cadastro_chave): Clientes_status{
		return $this->_Call('ExcluirCliente',Array(
			$clientes_cadastro_chave
		));
	}

	/**
	 * Consulta os dados de um cliente
	 *
	 * @param Clientes_cadastro_chave $clientes_cadastro_chave Chave para pesquisa do cadastro de clientes.
	 * @return Clientes_cadastro Cadastro reduzido de produtos
	 */
	public function ConsultarCliente(Clientes_cadastro_chave $clientes_cadastro_chave): Clientes_cadastro{
		return $this->_Call('ConsultarCliente',Array(
			$clientes_cadastro_chave
		));
	}

	/**
	 * Lista os clientes cadastrados
	 *
	 * @param Clientes_list_request $clientes_list_request Lista os clientes cadastrados
	 * @return Clientes_listfull_response Lista de clientes cadastrados no omie.
	 */
	public function ListarClientes(Clientes_list_request $clientes_list_request): Clientes_listfull_response{
		return $this->_Call('ListarClientes',Array(
			$clientes_list_request
		));
	}

	/**
	 * Realiza pesquisa dos clientes
	 *
	 * @param Clientes_list_request $clientes_list_request Lista os clientes cadastrados
	 * @return Clientes_list_response Lista de clientes cadastrados no omie.
	 */
	public function ListarClientesResumido(Clientes_list_request $clientes_list_request): Clientes_list_response{
		return $this->_Call('ListarClientesResumido',Array(
			$clientes_list_request
		));
	}

	/**
	 * DEPRECATED
	 *
	 * @param Clientes_lote_request $clientes_lote_request Lote de cadastros de clientes para inclusão, limitado a 50 ocorrências por requisição.
	 * @return Clientes_lote_response Resposta do processamento do lote de clientes cadastrados.
	 */
	public function IncluirClientesPorLote(Clientes_lote_request $clientes_lote_request): Clientes_lote_response{
		return $this->_Call('IncluirClientesPorLote',Array(
			$clientes_lote_request
		));
	}

	/**
	 * Realiza o UPSERT da tabela de clientes (INCLUSÃO/ALTERAÇÃO).
	 *
	 * @param Clientes_cadastro $clientes_cadastro Cadastro reduzido de produtos
	 * @return Clientes_status Status de retorno do cadastro de clientes.
	 */
	public function UpsertCliente(Clientes_cadastro $clientes_cadastro): Clientes_status{
		return $this->_Call('UpsertCliente',Array(
			$clientes_cadastro
		));
	}

	/**
	 * DEPRECATED
	 *
	 * @param Clientes_lote_request $clientes_lote_request Lote de cadastros de clientes para inclusão, limitado a 50 ocorrências por requisição.
	 * @return Clientes_lote_response Resposta do processamento do lote de clientes cadastrados.
	 */
	public function UpsertClientesPorLote(Clientes_lote_request $clientes_lote_request): Clientes_lote_response{
		return $this->_Call('UpsertClientesPorLote',Array(
			$clientes_lote_request
		));
	}

	/**
	 * Realiza o UPSERT da tabela de clientes (INCLUSÃO/ALTERAÇÃO) com base no CPF/CNPJ informado.
	 *
	 * @param Clientes_cadastro $clientes_cadastro Cadastro reduzido de produtos
	 * @return Clientes_status Status de retorno do cadastro de clientes.
	 */
	public function UpsertClienteCpfCnpj(Clientes_cadastro $clientes_cadastro): Clientes_status{
		return $this->_Call('UpsertClienteCpfCnpj',Array(
			$clientes_cadastro
		));
	}

	/**
	 * Associa um código de integração a um cliente cadastrado no Omie.
	 *
	 * @param Clientes_cadastro_chave $clientes_cadastro_chave Chave para pesquisa do cadastro de clientes.
	 * @return Clientes_status Status de retorno do cadastro de clientes.
	 */
	public function AssociarCodIntCliente(Clientes_cadastro_chave $clientes_cadastro_chave): Clientes_status{
		return $this->_Call('AssociarCodIntCliente',Array(
			$clientes_cadastro_chave
		));
	}
}
