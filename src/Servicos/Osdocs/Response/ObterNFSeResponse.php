<?php

namespace OmieLib\Servicos\Osdocs\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Servicos\Osdocs\OsDocsJsonClient;
use OmieLib\Servicos\Osdocs\Request\ObterDemonstRequest;
use OmieLib\Servicos\Osdocs\Request\ObterNFSeRequest;
use OmieLib\Servicos\Osdocs\Request\ObterOsRequest;
use OmieLib\Servicos\Osdocs\Request\ObterRPSRequest;
use OmieLib\Servicos\Osdocs\Request\ObterReciboRequest;
use OmieLib\Servicos\Osdocs\Request\ObterViaUnicaRequest;
use OmieLib\Servicos\Osdocs\Request\OsObterRequest;

/**
 * Informações da NFS-e faturada.
 *
 * @pw_element string $cNumOs Número da Ordem de Serviço.
 * @pw_element string $cNumNFSe Número da NFS-e.
 * @pw_element string $cSerieNFSe Série da NFS-e.
 * @pw_element string $cLinkPortal Link para acessar os documentos no portal Omie.
 * @pw_element string $cCodVerif Código de Verificação da NFS-e.
 * @pw_element string $cUrlNFSe Link para obter a NFS-e na prefeitura.
 * @pw_element string $cPdfNFSe Link para obter o PDF da NFS-e
 * @pw_element string $cXmlNFSe XML da NFS-e.
 * @pw_element string $cCodStatus Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
 * @pw_element string $cDesStatus Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
 * @pw_complex ObterNFSeResponse
 */
class ObterNFSeResponse{
	/**
	 * Número da Ordem de Serviço.
	 *
	 * @var string
	 */
	public string $cNumOs;
	/**
	 * Número da NFS-e.
	 *
	 * @var string
	 */
	public string $cNumNFSe;
	/**
	 * Série da NFS-e.
	 *
	 * @var string
	 */
	public string $cSerieNFSe;
	/**
	 * Link para acessar os documentos no portal Omie.
	 *
	 * @var string
	 */
	public string $cLinkPortal;
	/**
	 * Código de Verificação da NFS-e.
	 *
	 * @var string
	 */
	public string $cCodVerif;
	/**
	 * Link para obter a NFS-e na prefeitura.
	 *
	 * @var string
	 */
	public string $cUrlNFSe;
	/**
	 * Link para obter o PDF da NFS-e
	 *
	 * @var string
	 */
	public string $cPdfNFSe;
	/**
	 * XML da NFS-e.
	 *
	 * @var string
	 */
	public string $cXmlNFSe;
	/**
	 * Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
	 *
	 * @var string
	 */
	public string $cDesStatus;
}
