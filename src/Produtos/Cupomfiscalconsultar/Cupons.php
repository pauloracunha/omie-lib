<?php

namespace OmieLib\Produtos\Cupomfiscalconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcItensRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcListarRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcPagamentosRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcItensResponse;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcListarResponse;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcPagamentosResponse;

/**
 * Lista de Cupons Fiscais.
 *
 * @pw_element cabecalhoCupom $cabecalhoCupom Informações do cabeçalho do Cupom Fiscal.
 * @pw_element itensCupomArray $itensCupom Informações dos Itens do Cupom Fiscal.
 * @pw_element pagamentosCupomArray $pagamentosCupom Informações dos Pagamentos do Cupom Fiscal.
 * @pw_complex cupons
 */
class Cupons{
	/**
	 * Informações do cabeçalho do Cupom Fiscal.
	 *
	 * @var CabecalhoCupom
	 */
	public CabecalhoCupom $cabecalhoCupom;
	/**
	 * Informações dos Itens do Cupom Fiscal.
	 *
	 * @var ItensCupom[]
	 */
	public array $itensCupom;
	/**
	 * Informações dos Pagamentos do Cupom Fiscal.
	 *
	 * @var PagamentosCupom[]
	 */
	public array $pagamentosCupom;
}
