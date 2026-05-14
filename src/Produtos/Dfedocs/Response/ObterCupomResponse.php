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
 * Retorna as informações do Cupom Fiscal.
 *
 * @pw_element integer $cNumCupom Número do Cupom Fiscal.
 * @pw_element integer $nChaveCupom Chave do Cupom Fiscal.
 * @pw_element string $dDataEmisCupom Data da emissão do Cupom Fiscal.
 * @pw_element string $cXmlCupom XML do Cupom Fiscal.
 * @pw_element string $cModeloCupom Modelo do Cupom Fiscal (NFCe = 60\SAT = 59).
 * @pw_element string $cPdf Link do PDF do Danfe simplificado.
 * @pw_element string $cLinkPortal Link para acessar os documentos no portal Omie.
 * @pw_element string $cCodStatus Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
 * @pw_element string $cDesStatus Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
 * @pw_complex ObterCupomResponse
 */
class ObterCupomResponse{
	/**
	 * Número do Cupom Fiscal.
	 *
	 * @var integer
	 */
	public int $cNumCupom;
	/**
	 * Chave do Cupom Fiscal.
	 *
	 * @var integer
	 */
	public int $nChaveCupom;
	/**
	 * Data da emissão do Cupom Fiscal.
	 *
	 * @var string
	 */
	public string $dDataEmisCupom;
	/**
	 * XML do Cupom Fiscal.
	 *
	 * @var string
	 */
	public string $cXmlCupom;
	/**
	 * Modelo do Cupom Fiscal (NFCe = 60\SAT = 59).
	 *
	 * @var string
	 */
	public string $cModeloCupom;
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
