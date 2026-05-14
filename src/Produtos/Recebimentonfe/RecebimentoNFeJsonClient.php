<?php

namespace OmieLib\Produtos\Recebimentonfe;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarEtapaRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcAlterarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoConsultarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoExcluirRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoListarRequest;
use OmieLib\Produtos\Recebimentonfe\Request\RcbtoReverterRequest;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarEtapaResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcAlterarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoConsultarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoExcluirResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoListarResponse;
use OmieLib\Produtos\Recebimentonfe\Response\RcbtoReverterResponse;

/**
 * @service RecebimentoNFeJsonClient
 * @author omie
 */
class RecebimentoNFeJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/recebimentonfe/';

	/**
	 * Concluir recebimento de NFe
	 *
	 * @param RcbtoConcluirRequest $rcbtoConcluirRequest Solicitação de conclusão de recebimento de NFe
	 * @return RcbtoConcluirResponse Resposta da conclusão do recebimento da NFe
	 */
	public function ConcluirRecebimento(RcbtoConcluirRequest $rcbtoConcluirRequest): ?RcbtoConcluirResponse {
		$res = $this->_Call('ConcluirRecebimento',Array(
			$rcbtoConcluirRequest
		));
		return $this->_Cast($res, RcbtoConcluirResponse::class);
	}

	/**
	 * Alterar etapa recebimento NFe
	 *
	 * @param RcbtoAlterarEtapaRequest $rcbtoAlterarEtapaRequest Solicitação da alteração de etapa do recebimento da NFe
	 * @return RcbtoAlterarEtapaResponse Resposta da alteração de etapa do recebimento da NFe
	 */
	public function AlterarEtapaRecebimento(RcbtoAlterarEtapaRequest $rcbtoAlterarEtapaRequest): ?RcbtoAlterarEtapaResponse {
		$res = $this->_Call('AlterarEtapaRecebimento',Array(
			$rcbtoAlterarEtapaRequest
		));
		return $this->_Cast($res, RcbtoAlterarEtapaResponse::class);
	}

	/**
	 * Consultar recebimento de NFe
	 *
	 * @param RcbtoConsultarRequest $rcbtoConsultarRequest Solicitação de consulta de recebimento de NFe
	 * @return RcbtoConsultarResponse Resposta de consulta de recebimento de NFe
	 */
	public function ConsultarRecebimento(RcbtoConsultarRequest $rcbtoConsultarRequest): ?RcbtoConsultarResponse {
		$res = $this->_Call('ConsultarRecebimento',Array(
			$rcbtoConsultarRequest
		));
		return $this->_Cast($res, RcbtoConsultarResponse::class);
	}

	/**
	 * Listar recebimento de NFe
	 *
	 * @param RcbtoListarRequest $rcbtoListarRequest Solicitação de listagem da nota de recebimento
	 * @return RcbtoListarResponse Resposta da solicitação de listagem de nota de recebimento
	 */
	public function ListarRecebimentos(RcbtoListarRequest $rcbtoListarRequest): ?RcbtoListarResponse {
		$res = $this->_Call('ListarRecebimentos',Array(
			$rcbtoListarRequest
		));
		return $this->_Cast($res, RcbtoListarResponse::class);
	}

	/**
	 * Reverter recebimento NFe
	 *
	 * @param RcbtoReverterRequest $rcbtoReverterRequest Solicitação de reversão de recebimento de NFe
	 * @return RcbtoReverterResponse Resposta da reversão do recebimento da NFe
	 */
	public function ReverterRecebimento(RcbtoReverterRequest $rcbtoReverterRequest): ?RcbtoReverterResponse {
		$res = $this->_Call('ReverterRecebimento',Array(
			$rcbtoReverterRequest
		));
		return $this->_Cast($res, RcbtoReverterResponse::class);
	}

	/**
	 * Alterar recebimento de NFe
	 *
	 * @param RcbtoAlterarRequest $rcbtoAlterarRequest Solicitação da alteração do recebimento da NFe
	 * @return RcbtoAlterarResponse Resposta da alteração do recebimento da NFe
	 */
	public function AlterarRecebimento(RcbtoAlterarRequest $rcbtoAlterarRequest): ?RcbtoAlterarResponse {
		$res = $this->_Call('AlterarRecebimento',Array(
			$rcbtoAlterarRequest
		));
		return $this->_Cast($res, RcbtoAlterarResponse::class);
	}

	/**
	 * Excluir recebimento NFe.
	 *
	 * @param RcbtoExcluirRequest $rcbtoExcluirRequest Solicitação da exclusão do recebimento da NFe
	 * @return RcbtoExcluirResponse Resposta da exclusão do recebimento da NFe.
	 */
	public function ExcluirRecebimento(RcbtoExcluirRequest $rcbtoExcluirRequest): ?RcbtoExcluirResponse {
		$res = $this->_Call('ExcluirRecebimento',Array(
			$rcbtoExcluirRequest
		));
		return $this->_Cast($res, RcbtoExcluirResponse::class);
	}

	/**
	 * Alterar recebimento de NFe concluídos.
	 *
	 * @param RcbtoConcAlterarRequest $rcbtoConcAlterarRequest Solicitação da alteração do recebimento da NFe
	 * @return RcbtoConcAlterarResponse Resposta da alteração do recebimento da NFe
	 */
	public function AlterarRecebimentoConcluido(RcbtoConcAlterarRequest $rcbtoConcAlterarRequest): ?RcbtoConcAlterarResponse {
		$res = $this->_Call('AlterarRecebimentoConcluido',Array(
			$rcbtoConcAlterarRequest
		));
		return $this->_Cast($res, RcbtoConcAlterarResponse::class);
	}
}
