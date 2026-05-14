<?php

namespace OmieLib\Geral\Bancos;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;

/**
 * @service BancosCadastroJsonClient
 * @author omie
 */
class BancosCadastroJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/bancos/';

	/**
	 * Consulta os dados de um banco específico.
	 *
	 * @param Fin_bancos_cadastro_chave $fin_bancos_cadastro_chave Chave para pesquisa do cadastro de Bancos / Instituíções Financeiras.
	 * @return Fin_banco_cadastro Cadastro de bancos / instituições financeiras.
	 */
	public function ConsultarBanco(Fin_bancos_cadastro_chave $fin_bancos_cadastro_chave): ?Fin_banco_cadastro {
		$res = $this->_Call('ConsultarBanco',Array(
			$fin_bancos_cadastro_chave
		));
		return $this->_Cast($res, Fin_banco_cadastro::class);
	}

	/**
	 * Exibe uma lista com os banco cadastrados.
	 *
	 * @param Fin_bancos_list_request $fin_bancos_list_request Lista os bancos / instituíções financeiras cadastrados.
	 * @return Fin_bancos_list_response Lista de produtos encontrados no omie.
	 */
	public function ListarBancos(Fin_bancos_list_request $fin_bancos_list_request): ?Fin_bancos_list_response {
		$res = $this->_Call('ListarBancos',Array(
			$fin_bancos_list_request
		));
		return $this->_Cast($res, Fin_bancos_list_response::class);
	}
}
