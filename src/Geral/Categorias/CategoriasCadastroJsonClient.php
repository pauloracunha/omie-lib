<?php

namespace OmieLib\Geral\Categorias;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;

/**
 * @service CategoriasCadastroJsonClient
 * @author omie
 */
class CategoriasCadastroJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/categorias/';

	/**
	 * Consulta uma categoria
	 *
	 * @param Categoria_consultar $categoria_consultar Consulta um código de categoria
	 * @return Categoria_cadastro Cadastro de Categorias
	 */
	public function ConsultarCategoria(Categoria_consultar $categoria_consultar): Categoria_cadastro{
		return $this->_Call('ConsultarCategoria',Array(
			$categoria_consultar
		));
	}

	/**
	 * Lista as categorias cadastradas
	 *
	 * @param Categoria_list_request $categoria_list_request Lista as categorias cadastradas.
	 * @return Categoria_listfull_response Retorna a lista de categorias existentes no Omie.
	 */
	public function ListarCategorias(Categoria_list_request $categoria_list_request): Categoria_listfull_response{
		return $this->_Call('ListarCategorias',Array(
			$categoria_list_request
		));
	}

	/**
	 * Inclusão de categoria
	 *
	 * @param Categoria_incluir $categoria_incluir Inclusão de uma categoria.
	 * @return Categoria_cadastro_response Status de retorno do cadastro da categoria.
	 */
	public function IncluirCategoria(Categoria_incluir $categoria_incluir): Categoria_cadastro_response{
		return $this->_Call('IncluirCategoria',Array(
			$categoria_incluir
		));
	}

	/**
	 * Alteração de categoria.
	 *
	 * @param Categoria_alterar $categoria_alterar Alteração de uma categoria.
	 * @return Categoria_cadastro_response Status de retorno do cadastro da categoria.
	 */
	public function AlterarCategoria(Categoria_alterar $categoria_alterar): Categoria_cadastro_response{
		return $this->_Call('AlterarCategoria',Array(
			$categoria_alterar
		));
	}

	/**
	 * Inclusão de um grupo totalizador de categoria
	 *
	 * @param Categoria_grupo_incluir $categoria_grupo_incluir Inclusão de um grupo totalizador de categoria.
	 * @return Categoria_cadastro_response Status de retorno do cadastro da categoria.
	 */
	public function IncluirGrupoCategoria(Categoria_grupo_incluir $categoria_grupo_incluir): Categoria_cadastro_response{
		return $this->_Call('IncluirGrupoCategoria',Array(
			$categoria_grupo_incluir
		));
	}

	/**
	 * Alteração de um grupo totalizador de categoria
	 *
	 * @param Categoria_grupo_alterar $categoria_grupo_alterar Alteração de um grupo totalizador de categoria.
	 * @return Categoria_cadastro_response Status de retorno do cadastro da categoria.
	 */
	public function AlterarGrupoCategoria(Categoria_grupo_alterar $categoria_grupo_alterar): Categoria_cadastro_response{
		return $this->_Call('AlterarGrupoCategoria',Array(
			$categoria_grupo_alterar
		));
	}
}
