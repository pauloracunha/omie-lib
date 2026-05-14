<?php

namespace OmieLib\Produtos\Op;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Op\Request\CopAlterarRequest;
use OmieLib\Produtos\Op\Request\CopConcluirRequest;
use OmieLib\Produtos\Op\Request\CopConsultarRequest;
use OmieLib\Produtos\Op\Request\CopExcluirRequest;
use OmieLib\Produtos\Op\Request\CopIncluirRequest;
use OmieLib\Produtos\Op\Request\CopListarRequest;
use OmieLib\Produtos\Op\Request\CopReverterRequest;
use OmieLib\Produtos\Op\Request\CopUpsertRequest;
use OmieLib\Produtos\Op\Response\CopAlterarResponse;
use OmieLib\Produtos\Op\Response\CopConcluirResponse;
use OmieLib\Produtos\Op\Response\CopConsultarResponse;
use OmieLib\Produtos\Op\Response\CopExcluirResponse;
use OmieLib\Produtos\Op\Response\CopIncluirResponse;
use OmieLib\Produtos\Op\Response\CopListarResponse;
use OmieLib\Produtos\Op\Response\CopReverterResponse;
use OmieLib\Produtos\Op\Response\CopUpsertResponse;

/**
 * @service OrdemProducaoJsonClient
 * @author omie
 */
class OrdemProducaoJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/op/';

	/**
	 * Inclusão de Ordem de Produção.
	 *
	 * @param CopIncluirRequest $copIncluirRequest Solicitação de Inclusão da ordem de produção.
	 * @return CopIncluirResponse Resposta da solicitação da inclusão de ordem de produção.
	 */
	public function IncluirOrdemProducao(CopIncluirRequest $copIncluirRequest): ?CopIncluirResponse {
		$res = $this->_Call('IncluirOrdemProducao',Array(
			$copIncluirRequest
		));
		return $this->_Cast($res, CopIncluirResponse::class);
	}

	/**
	 * Alteração de Ordem de Produção.
	 *
	 * @param CopAlterarRequest $copAlterarRequest Solicitação de alteração da ordem de produção.
	 * @return CopAlterarResponse Resposta da solicitalção da alteração da ordem de produção.
	 */
	public function AlterarOrdemProducao(CopAlterarRequest $copAlterarRequest): ?CopAlterarResponse {
		$res = $this->_Call('AlterarOrdemProducao',Array(
			$copAlterarRequest
		));
		return $this->_Cast($res, CopAlterarResponse::class);
	}

	/**
	 * Upsert Ordem de Produção.
	 *
	 * @param CopUpsertRequest $copUpsertRequest Solicitação de upsert de ordem de produção.
	 * @return CopUpsertResponse Resposta da solicitação de upsert de ordem de produção.
	 */
	public function UpsertOrdemProducao(CopUpsertRequest $copUpsertRequest): ?CopUpsertResponse {
		$res = $this->_Call('UpsertOrdemProducao',Array(
			$copUpsertRequest
		));
		return $this->_Cast($res, CopUpsertResponse::class);
	}

	/**
	 * Exclusão da Ordem de Produção.
	 *
	 * @param CopExcluirRequest $copExcluirRequest Solicitação de exclusão da ordem de produção.
	 * @return CopExcluirResponse Resposta da solicitação de exclusão da ordem de produção.
	 */
	public function ExcluirOrdemProducao(CopExcluirRequest $copExcluirRequest): ?CopExcluirResponse {
		$res = $this->_Call('ExcluirOrdemProducao',Array(
			$copExcluirRequest
		));
		return $this->_Cast($res, CopExcluirResponse::class);
	}

	/**
	 * Consulta da ordem de produção.
	 *
	 * @param CopConsultarRequest $copConsultarRequest Solicitação da consulta da ordem de produção.
	 * @return CopConsultarResponse Resposta da solicitação de consulta de ordem de produção.
	 */
	public function ConsultarOrdemProducao(CopConsultarRequest $copConsultarRequest): ?CopConsultarResponse {
		$res = $this->_Call('ConsultarOrdemProducao',Array(
			$copConsultarRequest
		));
		return $this->_Cast($res, CopConsultarResponse::class);
	}

	/**
	 * Listagem de Ordem de Produção.
	 *
	 * @param CopListarRequest $copListarRequest Solicitação da listagem de ordens de produção.
	 * @return CopListarResponse Resposta da solicitação da listagem de ordens de produção.
	 */
	public function ListarOrdemProducao(CopListarRequest $copListarRequest): ?CopListarResponse {
		$res = $this->_Call('ListarOrdemProducao',Array(
			$copListarRequest
		));
		return $this->_Cast($res, CopListarResponse::class);
	}

	/**
	 * Conclui a Ordem de Produção.
	 *
	 * @param CopConcluirRequest $copConcluirRequest Solicitação de conclusão da ordem de produção.
	 * @return CopConcluirResponse Resposta da solicitação de conclusão da ordem de produção.
	 */
	public function ConcluirOrdemProducao(CopConcluirRequest $copConcluirRequest): ?CopConcluirResponse {
		$res = $this->_Call('ConcluirOrdemProducao',Array(
			$copConcluirRequest
		));
		return $this->_Cast($res, CopConcluirResponse::class);
	}

	/**
	 * Reversão da conclusão da ordem de produção.
	 *
	 * @param CopReverterRequest $copReverterRequest Solicitação de reversão da conclusão da ordem de produção.
	 * @return CopReverterResponse Resposta da solicitação de reversão da conclusão da ordem de produção.
	 */
	public function ReverterOrdemProducao(CopReverterRequest $copReverterRequest): ?CopReverterResponse {
		$res = $this->_Call('ReverterOrdemProducao',Array(
			$copReverterRequest
		));
		return $this->_Cast($res, CopReverterResponse::class);
	}
}
