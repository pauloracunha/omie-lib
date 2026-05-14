<?php

namespace OmieLib\Geral\Produtos;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;

/**
 * @service ProdutosCadastroJsonClient
 * @author omie
 */
class ProdutosCadastroJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/produtos/';

	/**
	 * Incluir um produto.
	 *
	 * @param Produto_servico_cadastro $produto_servico_cadastro Cadastro completo de produtos
	 * @return Produto_servico_status Status de retorno do cadastro de produtos
	 */
	public function IncluirProduto(Produto_servico_cadastro $produto_servico_cadastro): ?Produto_servico_status {
		$res = $this->_Call('IncluirProduto',Array(
			$produto_servico_cadastro
		));
		return $this->_Cast($res, Produto_servico_status::class);
	}

	/**
	 * Altera um produto já cadastrado.
	 *
	 * @param Produto_servico_cadastro $produto_servico_cadastro Cadastro completo de produtos
	 * @return Produto_servico_status Status de retorno do cadastro de produtos
	 */
	public function AlterarProduto(Produto_servico_cadastro $produto_servico_cadastro): ?Produto_servico_status {
		$res = $this->_Call('AlterarProduto',Array(
			$produto_servico_cadastro
		));
		return $this->_Cast($res, Produto_servico_status::class);
	}

	/**
	 * Exclui um produto
	 *
	 * @param Produto_servico_cadastro_chave $produto_servico_cadastro_chave Pesquisa de produtos
	 * @return Produto_servico_status Status de retorno do cadastro de produtos
	 */
	public function ExcluirProduto(Produto_servico_cadastro_chave $produto_servico_cadastro_chave): ?Produto_servico_status {
		$res = $this->_Call('ExcluirProduto',Array(
			$produto_servico_cadastro_chave
		));
		return $this->_Cast($res, Produto_servico_status::class);
	}

	/**
	 * Consulta um produto.
	 *
	 * @param Produto_servico_cadastro_chave $produto_servico_cadastro_chave Pesquisa de produtos
	 * @return Produto_servico_cadastro Cadastro completo de produtos
	 */
	public function ConsultarProduto(Produto_servico_cadastro_chave $produto_servico_cadastro_chave): ?Produto_servico_cadastro {
		$res = $this->_Call('ConsultarProduto',Array(
			$produto_servico_cadastro_chave
		));
		return $this->_Cast($res, Produto_servico_cadastro::class);
	}

	/**
	 * DEPRECATED
	 *
	 * @param Produto_servico_lote_request $produto_servico_lote_request Importação em Lote de produtos
	 * @return Produto_servico_lote_response Resposta do processamento do lote de produto importados.
	 */
	public function IncluirProdutosPorLote(Produto_servico_lote_request $produto_servico_lote_request): ?Produto_servico_lote_response {
		$res = $this->_Call('IncluirProdutosPorLote',Array(
			$produto_servico_lote_request
		));
		return $this->_Cast($res, Produto_servico_lote_response::class);
	}

	/**
	 * Lista completa do cadastro de produtos
	 *
	 * @param Produto_servico_list_request $produto_servico_list_request Lista os produtos cadastrados
	 * @return Produto_servico_listfull_response Lista completa de produtos encontrados no omie.
	 */
	public function ListarProdutos(Produto_servico_list_request $produto_servico_list_request): ?Produto_servico_listfull_response {
		$res = $this->_Call('ListarProdutos',Array(
			$produto_servico_list_request
		));
		return $this->_Cast($res, Produto_servico_listfull_response::class);
	}

	/**
	 * Lista os produtos cadastrados
	 *
	 * @param Produto_servico_list_request $produto_servico_list_request Lista os produtos cadastrados
	 * @return Produto_servico_list_response Lista de produtos encontrados no omie.
	 */
	public function ListarProdutosResumido(Produto_servico_list_request $produto_servico_list_request): ?Produto_servico_list_response {
		$res = $this->_Call('ListarProdutosResumido',Array(
			$produto_servico_list_request
		));
		return $this->_Cast($res, Produto_servico_list_response::class);
	}

	/**
	 * Realiza a inclusão/alteração de produtos.
	 *
	 * @param Produto_servico_cadastro $produto_servico_cadastro Cadastro completo de produtos
	 * @return Produto_servico_status Status de retorno do cadastro de produtos
	 */
	public function UpsertProduto(Produto_servico_cadastro $produto_servico_cadastro): ?Produto_servico_status {
		$res = $this->_Call('UpsertProduto',Array(
			$produto_servico_cadastro
		));
		return $this->_Cast($res, Produto_servico_status::class);
	}

	/**
	 * DEPRECATED
	 *
	 * @param Produto_servico_lote_request $produto_servico_lote_request Importação em Lote de produtos
	 * @return Produto_servico_lote_response Resposta do processamento do lote de produto importados.
	 */
	public function UpsertProdutosPorLote(Produto_servico_lote_request $produto_servico_lote_request): ?Produto_servico_lote_response {
		$res = $this->_Call('UpsertProdutosPorLote',Array(
			$produto_servico_lote_request
		));
		return $this->_Cast($res, Produto_servico_lote_response::class);
	}

	/**
	 * Associa um código de integração do produto.
	 *
	 * @param Produto_servico_cadastro_chave $produto_servico_cadastro_chave Pesquisa de produtos
	 * @return Produto_servico_status Status de retorno do cadastro de produtos
	 */
	public function AssociarCodIntProduto(Produto_servico_cadastro_chave $produto_servico_cadastro_chave): ?Produto_servico_status {
		$res = $this->_Call('AssociarCodIntProduto',Array(
			$produto_servico_cadastro_chave
		));
		return $this->_Cast($res, Produto_servico_status::class);
	}
}
