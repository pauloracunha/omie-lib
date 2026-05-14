<?php

namespace OmieLib\Financas\Pesquisartitulos\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Pesquisartitulos\ACodCateg;
use OmieLib\Financas\Pesquisartitulos\CabecTitulo;
use OmieLib\Financas\Pesquisartitulos\Departamentos;
use OmieLib\Financas\Pesquisartitulos\Info;
use OmieLib\Financas\Pesquisartitulos\Lancamentos;
use OmieLib\Financas\Pesquisartitulos\PesquisarTitulosJsonClient;
use OmieLib\Financas\Pesquisartitulos\Response\LtLinkBoletoResponse;
use OmieLib\Financas\Pesquisartitulos\Response\LtListarExcluidosResponse;
use OmieLib\Financas\Pesquisartitulos\Response\LtPesquisarResponse;
use OmieLib\Financas\Pesquisartitulos\Resumo;
use OmieLib\Financas\Pesquisartitulos\TitulosEncontrados;
use OmieLib\Financas\Pesquisartitulos\TitulosExcluidos;

/**
 * Solicitação da listagem de contas a pagar e receber excluídas.
 *
 * @pw_element integer $nPagina Número da página retornada
 * @pw_element integer $nRegPorPagina Número de registros retornados na página.
 * @pw_element string $dDtInicial Data inicial do período.
 * @pw_element string $dDtFinal Data final do período.
 * @pw_complex ltListarExcluidosRequest
 */
class LtListarExcluidosRequest{
	/**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
	/**
	 * Data inicial do período.
	 *
	 * @var string
	 */
	public string $dDtInicial;
	/**
	 * Data final do período.
	 *
	 * @var string
	 */
	public string $dDtFinal;
}
