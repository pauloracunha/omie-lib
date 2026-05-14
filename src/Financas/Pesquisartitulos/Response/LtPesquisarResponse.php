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
 * Resultado da pesquisa de títulos
 *
 * @pw_element integer $nPagina Número da página retornada
 * @pw_element integer $nTotPaginas Número total de páginas
 * @pw_element integer $nRegistros Número de registros retornados na página.
 * @pw_element integer $nTotRegistros total de registros encontrados
 * @pw_element titulosEncontradosArray $titulosEncontrados Resultado da pesquisa de títulos
 * @pw_complex ltPesquisarResponse
 */
class LtPesquisarResponse{
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
	 * Resultado da pesquisa de títulos
	 *
	 * @var TitulosEncontrados[]
	 */
	public array $titulosEncontrados;
}
