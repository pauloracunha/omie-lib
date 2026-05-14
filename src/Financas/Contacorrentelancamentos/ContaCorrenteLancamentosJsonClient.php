<?php

namespace OmieLib\Financas\Contacorrentelancamentos;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccAlterarRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccConsultarRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccExcluirRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccIncluirRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccListarRequest;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccAlterarResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccConsultarResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccExcluirResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccIncluirResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccListarResponse;

/**
 * @service ContaCorrenteLancamentosJsonClient
 * @author omie
 */
class ContaCorrenteLancamentosJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='financas/contacorrentelancamentos/';

	/**
	 * Incluir lançamento de conta corrente
	 *
	 * @param LanccIncluirRequest $lanccIncluirRequest Solicitação de inclusão lançamento do conta corrente
	 * @return LanccIncluirResponse Resposta de inclusão lançamento do conta corrente
	 */
	public function IncluirLancCC(LanccIncluirRequest $lanccIncluirRequest): LanccIncluirResponse{
		return $this->_Call('IncluirLancCC',Array(
			$lanccIncluirRequest
		));
	}

	/**
	 * Alterar lançamento de conta corrente
	 *
	 * @param LanccAlterarRequest $lanccAlterarRequest Solicitação de alteração de um lançamento do conta corrente
	 * @return LanccAlterarResponse Resposta da alteração de um lançamento do conta corrente
	 */
	public function AlterarLancCC(LanccAlterarRequest $lanccAlterarRequest): LanccAlterarResponse{
		return $this->_Call('AlterarLancCC',Array(
			$lanccAlterarRequest
		));
	}

	/**
	 * Excluir o lançamento de conta corrente
	 *
	 * @param LanccExcluirRequest $lanccExcluirRequest Solicitação de exclusão de um lançamento do conta corrente
	 * @return LanccExcluirResponse Resposta da exclusão de um lançamento do conta corrente
	 */
	public function ExcluirLancCC(LanccExcluirRequest $lanccExcluirRequest): LanccExcluirResponse{
		return $this->_Call('ExcluirLancCC',Array(
			$lanccExcluirRequest
		));
	}

	/**
	 * Consulta o lançamento de conta corrente
	 *
	 * @param LanccConsultarRequest $lanccConsultarRequest Solicitação da consulta de um lançamento do conta corrente
	 * @return LanccConsultarResponse Resposta da consulta de um lançamento do conta corrente
	 */
	public function ConsultaLancCC(LanccConsultarRequest $lanccConsultarRequest): LanccConsultarResponse{
		return $this->_Call('ConsultaLancCC',Array(
			$lanccConsultarRequest
		));
	}

	/**
	 * Lista os lançamentos de conta corrente
	 *
	 * @param LanccListarRequest $lanccListarRequest Solicitação de listagem de lançamentos da conta corrente
	 * @return LanccListarResponse Resposta da listagem de lançamentos da conta corrente
	 */
	public function ListarLancCC(LanccListarRequest $lanccListarRequest): LanccListarResponse{
		return $this->_Call('ListarLancCC',Array(
			$lanccListarRequest
		));
	}
}
