<?php

namespace OmieLib\Crm\Oportunidades;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Crm\Oportunidades\Request\OpAlterarRequest;
use OmieLib\Crm\Oportunidades\Request\OpConsultarRequest;
use OmieLib\Crm\Oportunidades\Request\OpExcluirRequest;
use OmieLib\Crm\Oportunidades\Request\OpIncluirRequest;
use OmieLib\Crm\Oportunidades\Request\OpListarRequest;
use OmieLib\Crm\Oportunidades\Request\OpUpsertRequest;
use OmieLib\Crm\Oportunidades\Response\OpAlterarResponse;
use OmieLib\Crm\Oportunidades\Response\OpConsultarResponse;
use OmieLib\Crm\Oportunidades\Response\OpExcluirResponse;
use OmieLib\Crm\Oportunidades\Response\OpIncluirResponse;
use OmieLib\Crm\Oportunidades\Response\OpListarResponse;
use OmieLib\Crm\Oportunidades\Response\OpUpsertResponse;

/**
 * @service oportunidadesJsonClient
 * @author omie
 */
class OportunidadesJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='crm/oportunidades/';

	/**
	 * Incluir uma oportunidade.
	 *
	 * @param OpIncluirRequest $opIncluirRequest Solicitação de Inclusão de oportunidades
	 * @return OpIncluirResponse Resposta da inclusão de oportunidades.
	 */
	public function IncluirOportunidade(OpIncluirRequest $opIncluirRequest): ?OpIncluirResponse {
		$res = $this->_Call('IncluirOportunidade',Array(
			$opIncluirRequest
		));
		return $this->_Cast($res, OpIncluirResponse::class);
	}

	/**
	 * Alteração de oportunidade.
	 *
	 * @param OpAlterarRequest $opAlterarRequest Solicitação de alteração de oportunidades
	 * @return OpAlterarResponse Resposta da alteração de oportunidades.
	 */
	public function AlterarOportunidade(OpAlterarRequest $opAlterarRequest): ?OpAlterarResponse {
		$res = $this->_Call('AlterarOportunidade',Array(
			$opAlterarRequest
		));
		return $this->_Cast($res, OpAlterarResponse::class);
	}

	/**
	 * Upsert de oportunidade.
	 *
	 * @param OpUpsertRequest $opUpsertRequest Solicitação de Upsert de oportunidades
	 * @return OpUpsertResponse Resposta da upsert de oportunidades.
	 */
	public function UpsertOportunidade(OpUpsertRequest $opUpsertRequest): ?OpUpsertResponse {
		$res = $this->_Call('UpsertOportunidade',Array(
			$opUpsertRequest
		));
		return $this->_Cast($res, OpUpsertResponse::class);
	}

	/**
	 * Exclusão de oportunidade.
	 *
	 * @param OpExcluirRequest $opExcluirRequest Solicitação de exclusão de oportunidades.
	 * @return OpExcluirResponse Resposta da exclusão de oportunidades.
	 */
	public function ExcluirOportunidade(OpExcluirRequest $opExcluirRequest): ?OpExcluirResponse {
		$res = $this->_Call('ExcluirOportunidade',Array(
			$opExcluirRequest
		));
		return $this->_Cast($res, OpExcluirResponse::class);
	}

	/**
	 * Consulta de oportunidade.
	 *
	 * @param OpConsultarRequest $opConsultarRequest Solicitação de consulta de oportunidades.
	 * @return OpConsultarResponse Resposta da consulta de oportunidades.
	 */
	public function ConsultarOportunidade(OpConsultarRequest $opConsultarRequest): ?OpConsultarResponse {
		$res = $this->_Call('ConsultarOportunidade',Array(
			$opConsultarRequest
		));
		return $this->_Cast($res, OpConsultarResponse::class);
	}

	/**
	 * Lista de oportunidades.
	 *
	 * @param OpListarRequest $opListarRequest Solicitação da listagem de oportunidades.
	 * @return OpListarResponse Resposta da solicitação da listagem de oportunidades.
	 */
	public function ListarOportunidades(OpListarRequest $opListarRequest): ?OpListarResponse {
		$res = $this->_Call('ListarOportunidades',Array(
			$opListarRequest
		));
		return $this->_Cast($res, OpListarResponse::class);
	}
}
