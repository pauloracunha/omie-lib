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
 * Informações de um Demonstrativo.
 *
 * @pw_element string $cNumOs Número da Ordem de Serviço.
 * @pw_element string $cPdfDemonst Link para obter o PDF do Demonstrativo.<BR>
 * @pw_element string $cLinkPortal Link para acessar os documentos no portal Omie.
 * @pw_element string $cCodStatus Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
 * @pw_element string $cDesStatus Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
 * @pw_complex ObterDemonstResponse
 */
class ObterDemonstResponse{
	/**
	 * Número da Ordem de Serviço.
	 *
	 * @var string
	 */
	public string $cNumOs;
	/**
	 * Link para obter o PDF do Demonstrativo.<BR>
	 *
	 * @var string
	 */
	public string $cPdfDemonst;
	/**
	 * Link para acessar os documentos no portal Omie.
	 *
	 * @var string
	 */
	public string $cLinkPortal;
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
