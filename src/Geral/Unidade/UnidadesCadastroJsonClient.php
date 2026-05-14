<?php

namespace OmieLib\Geral\Unidade;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;

/**
 * @service UnidadesCadastroJsonClient
 * @author omie
 */
class UnidadesCadastroJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/unidade/';

	/**
	 * Lista as unidades de medidas
	 *
	 * @param Unidade_pesquisar $unidade_pesquisar Tabela de Unidades de Medidas
	 * @return Unidade_cadastro_lista Lista de Cadastro de Unidades
	 */
	public function ListarUnidades(Unidade_pesquisar $unidade_pesquisar): Unidade_cadastro_lista{
		return $this->_Call('ListarUnidades',Array(
			$unidade_pesquisar
		));
	}
}
