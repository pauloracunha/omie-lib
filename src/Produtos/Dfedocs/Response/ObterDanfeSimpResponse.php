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
 * Retorna informações da uma Nota Fiscal com Danfe simplificado.
 *
 * @pw_element string $cNumNfe Número da Nota Fiscal.
 * @pw_element string $nChaveNfe Chave da Nota Fiscal.
 * @pw_element string $cPdf Link do PDF do Danfe simplificado.
 * @pw_element string $cCodStatus Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
 * @pw_element string $cDesStatus Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
 * @pw_complex ObterDanfeSimpResponse
 */
class ObterDanfeSimpResponse{
	/**
	 * Número da Nota Fiscal.
	 *
	 * @var string
	 */
	public string $cNumNfe;
	/**
	 * Chave da Nota Fiscal.
	 *
	 * @var string
	 */
	public string $nChaveNfe;
	/**
	 * Link do PDF do Danfe simplificado.
	 *
	 * @var string
	 */
	public string $cPdf;
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
