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
 * Solicitação de Listagem dos Cupons Fiscais.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nRegPorPagina Número de registros retornados
 * @pw_element string $dDtEmissaoDe Data de emissão do Cupom Fiscal - De.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dDtEmissaoAte Data de emissão do Cupom Fiscal - Até.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dDtInclusaoDe Data de Inclusão do Cupom Fiscal - De.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dDtInclusaoAte Data de Inclusão do Cupom Fiscal - Até.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dDtAlteracaoDe Data da Alteração do Cupom Fiscal - De.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dDtAlteracaoAte Data da Alteração do Cupom Fiscal - Até.<BR>No formato dd/mm/aaaa.
 * @pw_complex cfcListarRequest
 */
class CfcListarRequest{
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
	 * Data de emissão do Cupom Fiscal - De.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtEmissaoDe;
	/**
	 * Data de emissão do Cupom Fiscal - Até.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtEmissaoAte;
	/**
	 * Data de Inclusão do Cupom Fiscal - De.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtInclusaoDe;
	/**
	 * Data de Inclusão do Cupom Fiscal - Até.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtInclusaoAte;
	/**
	 * Data da Alteração do Cupom Fiscal - De.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtAlteracaoDe;
	/**
	 * Data da Alteração do Cupom Fiscal - Até.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtAlteracaoAte;
}
