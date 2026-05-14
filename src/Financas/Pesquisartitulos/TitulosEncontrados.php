<?php

namespace OmieLib\Financas\Pesquisartitulos;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Pesquisartitulos\Request\LtLinkBoletoRequest;
use OmieLib\Financas\Pesquisartitulos\Request\LtListarExcluidosRequest;
use OmieLib\Financas\Pesquisartitulos\Request\LtPesquisarRequest;
use OmieLib\Financas\Pesquisartitulos\Response\LtLinkBoletoResponse;
use OmieLib\Financas\Pesquisartitulos\Response\LtListarExcluidosResponse;
use OmieLib\Financas\Pesquisartitulos\Response\LtPesquisarResponse;

/**
 * Resultado da pesquisa de títulos
 *
 * @pw_element cabecTitulo $cabecTitulo Informações sobre o título encontrado
 * @pw_element lancamentosArray $lancamentos Lançamentos realizados para o título
 * @pw_element resumo $resumo Resumo dos pagamentos realizados para o título
 * @pw_complex titulosEncontrados
 */
class TitulosEncontrados{
	/**
	 * Informações sobre o título encontrado
	 *
	 * @var CabecTitulo
	 */
	public CabecTitulo $cabecTitulo;
	/**
	 * Lançamentos realizados para o título
	 *
	 * @var Lancamentos[]
	 */
	public array $lancamentos;
	/**
	 * Resumo dos pagamentos realizados para o título
	 *
	 * @var Resumo
	 */
	public Resumo $resumo;
}
