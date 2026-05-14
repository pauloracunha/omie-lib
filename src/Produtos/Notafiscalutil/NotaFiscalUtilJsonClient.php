<?php

namespace OmieLib\Produtos\Notafiscalutil;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;

/**
 * @service NotaFiscalUtilJsonClient
 * @author omie
 */
class NotaFiscalUtilJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='produtos/notafiscalutil/';

	/**
	 * Retorna a URL da Nota Fiscal
	 *
	 * @param NfUtil_GetUrlNF_request $nfUtil_GetUrlNF_request Request da URL da Nota Fiscal.
	 * @return NfUtil_GetUrlNF_response Response da URL da Nota Fiscal
	 */
	public function GetUrlNotaFiscal(NfUtil_GetUrlNF_request $nfUtil_GetUrlNF_request): NfUtil_GetUrlNF_response{
		return $this->_Call('GetUrlNotaFiscal',Array(
			$nfUtil_GetUrlNF_request
		));
	}

	/**
	 * Retorna o DANFE emitido da Nota Fiscal eletrônica.
	 *
	 * @param NfUtil_GetUrlDanfe_request $nfUtil_GetUrlDanfe_request Request da URL do DANFE da NFe
	 * @return NfUtil_GetUrlDanfe_response Response da URL do DANFE da NF
	 */
	public function GetUrlDanfe(NfUtil_GetUrlDanfe_request $nfUtil_GetUrlDanfe_request): NfUtil_GetUrlDanfe_response{
		return $this->_Call('GetUrlDanfe',Array(
			$nfUtil_GetUrlDanfe_request
		));
	}

	/**
	 * Retorna a URL do Logotipo
	 *
	 * @param NfUtil_GetUrlLogo_request $nfUtil_GetUrlLogo_request Request para obter a URL do Logotipo
	 * @return NfUtil_GetUrlLogo_response RESPONSE para obter o Logotipo da Empresa
	 */
	public function GetUrlLogo(NfUtil_GetUrlLogo_request $nfUtil_GetUrlLogo_request): NfUtil_GetUrlLogo_response{
		return $this->_Call('GetUrlLogo',Array(
			$nfUtil_GetUrlLogo_request
		));
	}
}
