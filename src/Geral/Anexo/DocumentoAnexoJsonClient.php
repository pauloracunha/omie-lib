<?php

namespace OmieLib\Geral\Anexo;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Anexo\Request\DocConsultarAnexoRequest;
use OmieLib\Geral\Anexo\Request\DocExcluirAnexoRequest;
use OmieLib\Geral\Anexo\Request\DocIncluirAnexoRequest;
use OmieLib\Geral\Anexo\Request\DocListarAnexosRequest;
use OmieLib\Geral\Anexo\Request\DocObterAnexoRequest;
use OmieLib\Geral\Anexo\Response\DocConsultarAnexoResponse;
use OmieLib\Geral\Anexo\Response\DocExcluirAnexoResponse;
use OmieLib\Geral\Anexo\Response\DocIncluirAnexoResponse;
use OmieLib\Geral\Anexo\Response\DocListarAnexosResponse;
use OmieLib\Geral\Anexo\Response\DocObterAnexoResponse;

/**
 * @service DocumentoAnexoJsonClient
 * @author omie
 */
class DocumentoAnexoJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/anexo/';

	/**
	 * Inclui o anexo para um documento.
	 *
	 * @param DocIncluirAnexoRequest $docIncluirAnexoRequest Inclui um anexo de um Documento.
	 * @return DocIncluirAnexoResponse Resposta da solicitação de inclusão de um anexo de um Documento.
	 */
	public function IncluirAnexo(DocIncluirAnexoRequest $docIncluirAnexoRequest): ?DocIncluirAnexoResponse {
		$res = $this->_Call('IncluirAnexo',Array(
			$docIncluirAnexoRequest
		));
		return $this->_Cast($res, DocIncluirAnexoResponse::class);
	}

	/**
	 * @param DocConsultarAnexoRequest $docConsultarAnexoRequest Consulta o anexo de um documento.
	 * @return DocConsultarAnexoResponse Resposta da solicitação de consulta de um anexo referente a um documento.
	 */
	public function ConsultarAnexo(DocConsultarAnexoRequest $docConsultarAnexoRequest): ?DocConsultarAnexoResponse {
		$res = $this->_Call('ConsultarAnexo',Array(
			$docConsultarAnexoRequest
		));
		return $this->_Cast($res, DocConsultarAnexoResponse::class);
	}

	/**
	 * @param DocExcluirAnexoRequest $docExcluirAnexoRequest Exclui um anexo de um Documento.
	 * @return DocExcluirAnexoResponse Resposta da solicitação de exclusão de um anexo referente a um documento.
	 */
	public function ExcluirAnexo(DocExcluirAnexoRequest $docExcluirAnexoRequest): ?DocExcluirAnexoResponse {
		$res = $this->_Call('ExcluirAnexo',Array(
			$docExcluirAnexoRequest
		));
		return $this->_Cast($res, DocExcluirAnexoResponse::class);
	}

	/**
	 * @param DocListarAnexosRequest $docListarAnexosRequest Solicitação de listagem de anexos de um Documento.
	 * @return DocListarAnexosResponse Resposta da listagem de anexos de um título do Contas a Receber.
	 */
	public function ListarAnexo(DocListarAnexosRequest $docListarAnexosRequest): ?DocListarAnexosResponse {
		$res = $this->_Call('ListarAnexo',Array(
			$docListarAnexosRequest
		));
		return $this->_Cast($res, DocListarAnexosResponse::class);
	}

	/**
	 * @param DocObterAnexoRequest $docObterAnexoRequest Obtém um anexo de um documento.
	 * @return DocObterAnexoResponse Resposta da solicitação de consulta de um anexo referente a um documento.
	 */
	public function ObterAnexo(DocObterAnexoRequest $docObterAnexoRequest): ?DocObterAnexoResponse {
		$res = $this->_Call('ObterAnexo',Array(
			$docObterAnexoRequest
		));
		return $this->_Cast($res, DocObterAnexoResponse::class);
	}
}
