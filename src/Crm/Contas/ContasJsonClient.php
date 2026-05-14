<?php

namespace OmieLib\Crm\Contas;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contas\Request\ContaListarRequest;
use OmieLib\Crm\Contas\Request\ContaVerificarRequest;
use OmieLib\Crm\Contas\Response\ContaListarResponse;
use OmieLib\Crm\Contas\Response\ContaVerificarResponse;

/**
 * @service contasJsonClient
 * @author omie
 */
class ContasJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='crm/contas/';

	/**
	 * @param Cadastros $cadastros Lista os cadastros encontrados.
	 * @return CRM_CONTAS_RESPOSTA Status da Comunicação
	 */
	public function IncluirConta(Cadastros $cadastros): ?CRM_CONTAS_RESPOSTA {
		$res = $this->_Call('IncluirConta',Array(
			$cadastros
		));
		return $this->_Cast($res, CRM_CONTAS_RESPOSTA::class);
	}

	/**
	 * @param Cadastros $cadastros Lista os cadastros encontrados.
	 * @return CRM_CONTAS_RESPOSTA Status da Comunicação
	 */
	public function AlterarConta(Cadastros $cadastros): ?CRM_CONTAS_RESPOSTA {
		$res = $this->_Call('AlterarConta',Array(
			$cadastros
		));
		return $this->_Cast($res, CRM_CONTAS_RESPOSTA::class);
	}

	/**
	 * @param CRM_CONTAS_PESQUISA $CRM_CONTAS_PESQUISA Pesquisa da conta
	 * @return CRM_CONTAS_RESPOSTA Status da Comunicação
	 */
	public function ExcluirConta(CRM_CONTAS_PESQUISA $CRM_CONTAS_PESQUISA): ?CRM_CONTAS_RESPOSTA {
		$res = $this->_Call('ExcluirConta',Array(
			$CRM_CONTAS_PESQUISA
		));
		return $this->_Cast($res, CRM_CONTAS_RESPOSTA::class);
	}

	/**
	 * @param CRM_CONTAS_PESQUISA $CRM_CONTAS_PESQUISA Pesquisa da conta
	 * @return Cadastros Lista os cadastros encontrados.
	 */
	public function ConsultarConta(CRM_CONTAS_PESQUISA $CRM_CONTAS_PESQUISA): ?Cadastros {
		$res = $this->_Call('ConsultarConta',Array(
			$CRM_CONTAS_PESQUISA
		));
		return $this->_Cast($res, Cadastros::class);
	}

	/**
	 * Lista as contas do CRM.
	 *
	 * @param ContaListarRequest $contaListarRequest Solicitação da listagem de Contas.
	 * @return ContaListarResponse Resposta da solicitação da listagem de Contas.
	 */
	public function ListarContas(ContaListarRequest $contaListarRequest): ?ContaListarResponse {
		$res = $this->_Call('ListarContas',Array(
			$contaListarRequest
		));
		return $this->_Cast($res, ContaListarResponse::class);
	}

	/**
	 * @param Cadastros $cadastros Lista os cadastros encontrados.
	 * @return CRM_CONTAS_RESPOSTA Status da Comunicação
	 */
	public function UpsertConta(Cadastros $cadastros): ?CRM_CONTAS_RESPOSTA {
		$res = $this->_Call('UpsertConta',Array(
			$cadastros
		));
		return $this->_Cast($res, CRM_CONTAS_RESPOSTA::class);
	}

	/**
	 * Verifica se uma conta foi criada a partir do nome e e-mail.
	 *
	 * @param ContaVerificarRequest $contaVerificarRequest Verifica se uma conta existe a partir do nome e e-mail.
	 * @return ContaVerificarResponse Resposta da verificação se uma conta existe a partir do nome e e-mail.
	 */
	public function VerificarConta(ContaVerificarRequest $contaVerificarRequest): ?ContaVerificarResponse {
		$res = $this->_Call('VerificarConta',Array(
			$contaVerificarRequest
		));
		return $this->_Cast($res, ContaVerificarResponse::class);
	}
}
