<?php

namespace OmieLib\Geral\Tiposdoc;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;

/**
 * @service TiposDocumentoCadastroJsonClient
 * @author omie
 */
class TiposDocumentoCadastroJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/tiposdoc/';

	/**
	 * Consulta um tipo de documento por código
	 *
	 * @param Tipo_documento_consultar $tipo_documento_consultar Pesquisa um tipo de documento por código
	 * @return Tipo_documento_cadastro Cadastro de tipos de documentos
	 */
	public function ConsultarTipoDocumento(Tipo_documento_consultar $tipo_documento_consultar): Tipo_documento_cadastro{
		return $this->_Call('ConsultarTipoDocumento',Array(
			$tipo_documento_consultar
		));
	}

	/**
	 * Pesquisa o tipo de documento
	 *
	 * @param Tipo_documento_pesquisa_request $tipo_documento_pesquisa_request Pesquisa do tipo de documento
	 * @return Tipo_documento_pesquisa_response Resposta da pesquisa,
	 */
	public function PesquisarTipoDocumento(Tipo_documento_pesquisa_request $tipo_documento_pesquisa_request): Tipo_documento_pesquisa_response{
		return $this->_Call('PesquisarTipoDocumento',Array(
			$tipo_documento_pesquisa_request
		));
	}
}
