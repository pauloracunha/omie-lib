<?php

namespace OmieLib\Financas\Pesquisartitulos\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Pesquisartitulos\ACodCateg;
use OmieLib\Financas\Pesquisartitulos\CabecTitulo;
use OmieLib\Financas\Pesquisartitulos\Departamentos;
use OmieLib\Financas\Pesquisartitulos\Info;
use OmieLib\Financas\Pesquisartitulos\Lancamentos;
use OmieLib\Financas\Pesquisartitulos\PesquisarTitulosJsonClient;
use OmieLib\Financas\Pesquisartitulos\Request\LtLinkBoletoRequest;
use OmieLib\Financas\Pesquisartitulos\Request\LtListarExcluidosRequest;
use OmieLib\Financas\Pesquisartitulos\Request\LtPesquisarRequest;
use OmieLib\Financas\Pesquisartitulos\Resumo;
use OmieLib\Financas\Pesquisartitulos\TitulosEncontrados;
use OmieLib\Financas\Pesquisartitulos\TitulosExcluidos;

/**
 * Resposta da solicitação da listagem de contas a pagar/receber excluídos.
 *
 * @pw_element integer $nPagina Número da página retornada
 * @pw_element integer $nTotPaginas Número total de páginas
 * @pw_element integer $nRegistros Número de registros retornados na página.
 * @pw_element integer $nTotRegistros total de registros encontrados
 * @pw_element titulosExcluidosArray $titulosExcluidos Lista os lançamentos excluídos em um determinado período.
 * @pw_complex ltListarExcluidosResponse
 */
class LtListarExcluidosResponse{
	/**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número total de páginas
	 *
	 * @var integer
	 */
	public int $nTotPaginas;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $nRegistros;
	/**
	 * total de registros encontrados
	 *
	 * @var integer
	 */
	public int $nTotRegistros;
	/**
	 * Lista os lançamentos excluídos em um determinado período.
	 *
	 * @var TitulosExcluidos[]
	 */
	public array $titulosExcluidos;
}
