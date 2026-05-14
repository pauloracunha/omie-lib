<?php

namespace OmieLib\Produtos\Dfedocs\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Dfedocs\DfeDocsJsonClient;
use OmieLib\Produtos\Dfedocs\Request\ObterCTeRequest;
use OmieLib\Produtos\Dfedocs\Request\ObterCupomRequest;
use OmieLib\Produtos\Dfedocs\Request\ObterDanfeSimpRequest;
use OmieLib\Produtos\Dfedocs\Request\ObterNFeRequest;
use OmieLib\Produtos\Dfedocs\Request\ObterPedVendaRequest;

/**
 * Retorna informações de um CTe.
 *
 * @pw_element string $cNumCTe Número do CTe.
 * @pw_element string $nChaveCTe Chave do CTe.
 * @pw_element string $dDataEmisCTe Data da emissão do CTe.
 * @pw_element string $cModeloCTe Modelo do CTe.
 * @pw_element string $cXmlCTe XML do CTe.
 * @pw_element string $cPdf Link do PDF do Danfe simplificado.
 * @pw_element string $cLinkPortal Link para acessar os documentos no portal Omie.
 * @pw_element string $cCodStatus Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
 * @pw_element string $cDesStatus Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
 * @pw_complex ObterCTeResponse
 */
class ObterCTeResponse{
	/**
	 * Número do CTe.
	 *
	 * @var string
	 */
	public string $cNumCTe;
	/**
	 * Chave do CTe.
	 *
	 * @var string
	 */
	public string $nChaveCTe;
	/**
	 * Data da emissão do CTe.
	 *
	 * @var string
	 */
	public string $dDataEmisCTe;
	/**
	 * Modelo do CTe.
	 *
	 * @var string
	 */
	public string $cModeloCTe;
	/**
	 * XML do CTe.
	 *
	 * @var string
	 */
	public string $cXmlCTe;
	/**
	 * Link do PDF do Danfe simplificado.
	 *
	 * @var string
	 */
	public string $cPdf;
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
