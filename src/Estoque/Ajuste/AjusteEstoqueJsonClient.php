<?php

namespace OmieLib\Estoque\Ajuste;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;

/**
 * @service AjusteEstoqueJsonClient
 * @author omie
 */
class AjusteEstoqueJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='estoque/ajuste/';

	/**
	 * Incluir um Ajuste de Estoque
	 *
	 * @param Estoque_mov_ajuste_cadastro $estoque_mov_ajuste_cadastro Registro do Movimento de Ajuste de Estoque
	 * @return Estoque_mov_ajuste_cadastro_resposta Status de Resposta para o Ajuste de Estoque
	 */
	public function IncluirAjusteEstoque(Estoque_mov_ajuste_cadastro $estoque_mov_ajuste_cadastro): ?Estoque_mov_ajuste_cadastro_resposta {
		$res = $this->_Call('IncluirAjusteEstoque',Array(
			$estoque_mov_ajuste_cadastro
		));
		return $this->_Cast($res, Estoque_mov_ajuste_cadastro_resposta::class);
	}

	/**
	 * Excluir um Movimento de Ajuste de Estoque
	 *
	 * @param Estoque_mov_ajuste_cadastro_id_ajuste $estoque_mov_ajuste_cadastro_id_ajuste ID do Registro do Ajuste de Estoque
	 * @return Estoque_mov_ajuste_cadastro_resposta Status de Resposta para o Ajuste de Estoque
	 */
	public function ExcluirAjusteEstoque(Estoque_mov_ajuste_cadastro_id_ajuste $estoque_mov_ajuste_cadastro_id_ajuste): ?Estoque_mov_ajuste_cadastro_resposta {
		$res = $this->_Call('ExcluirAjusteEstoque',Array(
			$estoque_mov_ajuste_cadastro_id_ajuste
		));
		return $this->_Cast($res, Estoque_mov_ajuste_cadastro_resposta::class);
	}

	/**
	 * Alterar quantidade mínima em um local de estoque
	 *
	 * @param Estoque_mov_ajuste_estoque_minimo $estoque_mov_ajuste_estoque_minimo Registro do movimento de ajuste de estoque mínimo
	 * @return Estoque_mov_ajuste_estoque_minimo_resposta Status de resposta para o ajuste de estoque mínimo
	 */
	public function AlterarEstoqueMinimo(Estoque_mov_ajuste_estoque_minimo $estoque_mov_ajuste_estoque_minimo): ?Estoque_mov_ajuste_estoque_minimo_resposta {
		$res = $this->_Call('AlterarEstoqueMinimo',Array(
			$estoque_mov_ajuste_estoque_minimo
		));
		return $this->_Cast($res, Estoque_mov_ajuste_estoque_minimo_resposta::class);
	}

	/**
	 * Listar os ajuste de estoque.
	 *
	 * @param Estoque_mov_listar_request $estoque_mov_listar_request Solicitação de listagem de ajuste de estoque.
	 * @return Estoque_mov_listar_response Resposta da solicitação de listagem de ajuste de estoque.
	 */
	public function ListarAjusteEstoque(Estoque_mov_listar_request $estoque_mov_listar_request): ?Estoque_mov_listar_response {
		$res = $this->_Call('ListarAjusteEstoque',Array(
			$estoque_mov_listar_request
		));
		return $this->_Cast($res, Estoque_mov_listar_response::class);
	}
}
