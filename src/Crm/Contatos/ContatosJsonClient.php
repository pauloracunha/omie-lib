<?php

namespace OmieLib\Crm\Contatos;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contatos\Request\ContatoListarRequest;
use OmieLib\Crm\Contatos\Request\ContatoVerificarRequest;
use OmieLib\Crm\Contatos\Response\ContatoListarResponse;
use OmieLib\Crm\Contatos\Response\ContatoVerificarResponse;

/**
 * @service contatosJsonClient
 * @author omie
 */
class ContatosJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='crm/contatos/';

	/**
	 * Inclui um novo Contato
	 *
	 * @param Cadastros $cadastros Lista os cadastros encontrados.
	 * @return CRM_CONTATOS_RESPOSTA Status da Comunicação
	 */
	public function IncluirContato(Cadastros $cadastros): CRM_CONTATOS_RESPOSTA{
		return $this->_Call('IncluirContato',Array(
			$cadastros
		));
	}

	/**
	 * @param Cadastros $cadastros Lista os cadastros encontrados.
	 * @return CRM_CONTATOS_RESPOSTA Status da Comunicação
	 */
	public function AlterarContato(Cadastros $cadastros): CRM_CONTATOS_RESPOSTA{
		return $this->_Call('AlterarContato',Array(
			$cadastros
		));
	}

	/**
	 * @param CRM_CONTATOS_PESQUISA $CRM_CONTATOS_PESQUISA Pesquisa do Contato
	 * @return CRM_CONTATOS_RESPOSTA Status da Comunicação
	 */
	public function ExcluirContato(CRM_CONTATOS_PESQUISA $CRM_CONTATOS_PESQUISA): CRM_CONTATOS_RESPOSTA{
		return $this->_Call('ExcluirContato',Array(
			$CRM_CONTATOS_PESQUISA
		));
	}

	/**
	 * Consulta o Contato
	 *
	 * @param CRM_CONTATOS_PESQUISA $CRM_CONTATOS_PESQUISA Pesquisa do Contato
	 * @return Cadastros Lista os cadastros encontrados.
	 */
	public function ConsultarContato(CRM_CONTATOS_PESQUISA $CRM_CONTATOS_PESQUISA): Cadastros{
		return $this->_Call('ConsultarContato',Array(
			$CRM_CONTATOS_PESQUISA
		));
	}

	/**
	 * Lista os contatos do CRM.
	 *
	 * @param ContatoListarRequest $contatoListarRequest Solicitação da listagem de contatos.
	 * @return ContatoListarResponse Resposta da solicitação da listagem de contatos.
	 */
	public function ListarContatos(ContatoListarRequest $contatoListarRequest): ContatoListarResponse{
		return $this->_Call('ListarContatos',Array(
			$contatoListarRequest
		));
	}

	/**
	 * Upsert do contato
	 *
	 * @param Cadastros $cadastros Lista os cadastros encontrados.
	 * @return CRM_CONTATOS_RESPOSTA Status da Comunicação
	 */
	public function UpsertContato(Cadastros $cadastros): CRM_CONTATOS_RESPOSTA{
		return $this->_Call('UpsertContato',Array(
			$cadastros
		));
	}

	/**
	 * Verifica se um contato já existe.
	 *
	 * @param ContatoVerificarRequest $contatoVerificarRequest Verifica se um contato existe a partir do nome e e-mail.
	 * @return ContatoVerificarResponse Resposta da verificação se um contato existe a partir do nome e e-mail.
	 */
	public function VerificarContato(ContatoVerificarRequest $contatoVerificarRequest): ContatoVerificarResponse{
		return $this->_Call('VerificarContato',Array(
			$contatoVerificarRequest
		));
	}
}
