<?php

namespace OmieLib\Contador\Xml;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Contador\Xml\Request\XmlListarDocumentosRequest;
use OmieLib\Contador\Xml\Response\XmlListarDocumentosResponse;

/**
 * @service DocumentosFiscaisJsonClient
 * @author omie
 */
class DocumentosFiscaisJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='contador/xml/';

	/**
	 * Lista de XMLs de Documentos Fiscais.
	 *
	 * @param XmlListarDocumentosRequest $xmlListarDocumentosRequest Solicitação de listagem de XMLs de Documentos Fiscais.
	 * @return XmlListarDocumentosResponse Resposta da solicitação de listagem de XMLs de Documentos Fiscais.
	 */
	public function ListarDocumentos(XmlListarDocumentosRequest $xmlListarDocumentosRequest): ?XmlListarDocumentosResponse {
		$res = $this->_Call('ListarDocumentos',Array(
			$xmlListarDocumentosRequest
		));
		return $this->_Cast($res, XmlListarDocumentosResponse::class);
	}
}
