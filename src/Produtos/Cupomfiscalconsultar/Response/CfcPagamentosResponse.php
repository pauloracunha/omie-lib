<?php

namespace OmieLib\Produtos\Cupomfiscalconsultar\Response;

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
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcItensRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcListarRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcPagamentosRequest;

/**
 * Resultado da solicitação de Listagem de pagamentos de cupom fiscal.
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nTotPaginas Total de páginas encontradas.
 * @pw_element integer $nRegistros Número de registros retornados
 * @pw_element integer $nTotRegistros Total de registros encontrados.
 * @pw_element empresa $empresa Informações do estabelecimento.
 * @pw_element pagamentosArray $pagamentos Dados de Pagamentos do Cupom Fiscal.
 * @pw_complex cfcPagamentosResponse
 */
class CfcPagamentosResponse{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Total de páginas encontradas.
	 *
	 * @var integer
	 */
	public int $nTotPaginas;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $nRegistros;
	/**
	 * Total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $nTotRegistros;
	/**
	 * Informações do estabelecimento.
	 *
	 * @var Empresa
	 */
	public Empresa $empresa;
	/**
	 * Dados de Pagamentos do Cupom Fiscal.
	 *
	 * @var Pagamentos[]
	 */
	public array $pagamentos;
}
