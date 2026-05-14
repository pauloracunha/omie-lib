<?php

namespace OmieLib\Geral\Clientetag;

use OmieLib\Common\AbstractOmieJsonClient;
use OmieLib\Common\OmieFail;
use OmieLib\Geral\Clientetag\Request\CTagExcluirRequest;
use OmieLib\Geral\Clientetag\Request\CTagExcluirTodasRequest;
use OmieLib\Geral\Clientetag\Request\CTagIncluirRequest;
use OmieLib\Geral\Clientetag\Request\CTagListarRequest;
use OmieLib\Geral\Clientetag\Response\CTagExcluirResponse;
use OmieLib\Geral\Clientetag\Response\CTagExcluirTodasResponse;
use OmieLib\Geral\Clientetag\Response\CTagIncluirResponse;
use OmieLib\Geral\Clientetag\Response\CTagListarResponse;

/**
 * @service ClientesTagsJsonClient
 * @author omie
 */
class ClientesTagsJsonClient extends AbstractOmieJsonClient {
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
	public static $_EndPoint='geral/clientetag/';

	/**
	 * Associa tags a um cliente.
	 *
	 * @param CTagIncluirRequest $cTagIncluirRequest Solicitação de inclusão de tags de um cliente.
	 * @return CTagIncluirResponse Resposta da solicitação de inclusão de tags de um cliente.
	 */
	public function IncluirTags(CTagIncluirRequest $cTagIncluirRequest): CTagIncluirResponse{
		return $this->_Call('IncluirTags',Array(
			$cTagIncluirRequest
		));
	}

	/**
	 * Remove tags associadas a um cliente.
	 *
	 * @param CTagExcluirRequest $cTagExcluirRequest Solicitação de exclusão de tags de um cliente.
	 * @return CTagExcluirResponse Resposta da solicitação de exclusão de tags de um cliente.
	 */
	public function ExcluirTags(CTagExcluirRequest $cTagExcluirRequest): CTagExcluirResponse{
		return $this->_Call('ExcluirTags',Array(
			$cTagExcluirRequest
		));
	}

	/**
	 * Remove todas as tags associadas a um cliente.
	 *
	 * @param CTagExcluirTodasRequest $cTagExcluirTodasRequest Solicitação de exclusão de todas as tags de um cliente.
	 * @return CTagExcluirTodasResponse Resposta da solicitação de exclusão de todas as  tags de um cliente.
	 */
	public function ExcluirTodas(CTagExcluirTodasRequest $cTagExcluirTodasRequest): CTagExcluirTodasResponse{
		return $this->_Call('ExcluirTodas',Array(
			$cTagExcluirTodasRequest
		));
	}

	/**
	 * Lista as tags de um determinado cliente.
	 *
	 * @param CTagListarRequest $cTagListarRequest Solicitação da listagem de tags de um cliente.
	 * @return CTagListarResponse Resposta da solicitação da listagem de tags de um cliente.
	 */
	public function ListarTags(CTagListarRequest $cTagListarRequest): CTagListarResponse{
		return $this->_Call('ListarTags',Array(
			$cTagListarRequest
		));
	}
}
