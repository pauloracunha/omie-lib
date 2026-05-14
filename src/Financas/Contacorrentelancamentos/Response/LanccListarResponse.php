<?php

namespace OmieLib\Financas\Contacorrentelancamentos\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contacorrentelancamentos\ACodCateg;
use OmieLib\Financas\Contacorrentelancamentos\Cabecalho;
use OmieLib\Financas\Contacorrentelancamentos\ContaCorrenteLancamentosJsonClient;
use OmieLib\Financas\Contacorrentelancamentos\Departamentos;
use OmieLib\Financas\Contacorrentelancamentos\Detalhes;
use OmieLib\Financas\Contacorrentelancamentos\Diversos;
use OmieLib\Financas\Contacorrentelancamentos\Info;
use OmieLib\Financas\Contacorrentelancamentos\ListaLancamentos;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccAlterarRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccConsultarRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccExcluirRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccIncluirRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccListarRequest;
use OmieLib\Financas\Contacorrentelancamentos\Transferencia;

/**
 * Resposta da listagem de lançamentos da conta corrente
 *
 * @pw_element integer $nPagina Número da página resgatada.
 * @pw_element integer $nTotPaginas Número total de páginas encontradas.
 * @pw_element integer $nRegistros Número de registros retornados na página.
 * @pw_element integer $nTotRegistros Número total de registros encontrados.
 * @pw_element listaLancamentosArray $listaLancamentos Lista de lançamentos de conta corrente.
 * @pw_complex lanccListarResponse
 */
class LanccListarResponse{
	/**
	 * Número da página resgatada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número total de páginas encontradas.
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
	 * Número total de registros encontrados.
	 *
	 * @var integer
	 */
	public int $nTotRegistros;
	/**
	 * Lista de lançamentos de conta corrente.
	 *
	 * @var ListaLancamentos[]
	 */
	public array $listaLancamentos;
}
