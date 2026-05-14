<?php

namespace OmieLib\Geral\Tpativ;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Tpativ\Request\TpAtivListarRequest;
use OmieLib\Geral\Tpativ\Response\TpAtivListarResponse;

/**
 * @service tpAtivCadastroJsonClient
 * @author omie
 */
class TpAtivCadastroJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/tpativ/';

	/**
	 * Listar Tipos de Atividade.
	 *
	 * @param TpAtivListarRequest $tpAtivListarRequest Solicitação de Listagem de Tipos de Atividade da Empresa.
	 * @return TpAtivListarResponse Resposta da listagem deTipos de Atividade da Empresa.
	 */
	public function ListarTipoAtiv(TpAtivListarRequest $tpAtivListarRequest): TpAtivListarResponse{
		return $this->_Call('ListarTipoAtiv',Array(
			$tpAtivListarRequest
		));
	}
}
