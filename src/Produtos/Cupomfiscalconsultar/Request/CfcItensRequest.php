<?php

namespace OmieLib\Produtos\Cupomfiscalconsultar\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscalconsultar\CabecalhoCupom;
use OmieLib\Produtos\Cupomfiscalconsultar\CupomFiscalConsultarJsonClient;
use OmieLib\Produtos\Cupomfiscalconsultar\Cupons;
use OmieLib\Produtos\Cupomfiscalconsultar\Empresa;
use OmieLib\Produtos\Cupomfiscalconsultar\Info;
use OmieLib\Produtos\Cupomfiscalconsultar\Itens;
use OmieLib\Produtos\Cupomfiscalconsultar\ItensCupom;
use OmieLib\Produtos\Cupomfiscalconsultar\Pagamentos;
use OmieLib\Produtos\Cupomfiscalconsultar\PagamentosCupom;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcItensResponse;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcListarResponse;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcPagamentosResponse;

/**
 * Solicitação de Listagem dos itens de cupom fiscal.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nRegPorPagina Número de registros retornados
 * @pw_element string $dDtEmisDe Filtrar os títulos pela data de emissão - até.
 * @pw_element string $dDtEmisAte Filtrar os títulos pela data de emissão - até.
 * @pw_element string $dDtIncDe Data de Inclusão do Documento.
 * @pw_element string $dDtIncAte Data de Inclusão do Documento.
 * @pw_element string $dDtAltDe Data de Alteração do Documento.
 * @pw_element string $dDtAltAte Data de Alteração do Documento.
 * @pw_element integer $nIdCupom ID do Cupom Fiscal.
 * @pw_complex cfcItensRequest
 */
class CfcItensRequest{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
	/**
	 * Filtrar os títulos pela data de emissão - até.
	 *
	 * @var string
	 */
	public string $dDtEmisDe;
	/**
	 * Filtrar os títulos pela data de emissão - até.
	 *
	 * @var string
	 */
	public string $dDtEmisAte;
	/**
	 * Data de Inclusão do Documento.
	 *
	 * @var string
	 */
	public string $dDtIncDe;
	/**
	 * Data de Inclusão do Documento.
	 *
	 * @var string
	 */
	public string $dDtIncAte;
	/**
	 * Data de Alteração do Documento.
	 *
	 * @var string
	 */
	public string $dDtAltDe;
	/**
	 * Data de Alteração do Documento.
	 *
	 * @var string
	 */
	public string $dDtAltAte;
	/**
	 * ID do Cupom Fiscal.
	 *
	 * @var integer
	 */
	public int $nIdCupom;
}
