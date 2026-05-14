<?php

namespace OmieLib\Financas\Mf\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Mf\Categorias;
use OmieLib\Financas\Mf\Departamentos;
use OmieLib\Financas\Mf\Detalhes;
use OmieLib\Financas\Mf\Movimentos;
use OmieLib\Financas\Mf\MovimentosFinanceirosJsonClient;
use OmieLib\Financas\Mf\Request\MfListarRequest;
use OmieLib\Financas\Mf\Resumo;

/**
 * Resultado da solicitação de Listagem da movimentação financeira (Contas a Pagar, Contas a Receber e Lançamentos do Conta Corrente).
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nTotPaginas Total de páginas encontradas.
 * @pw_element integer $nRegistros Número de registros retornados
 * @pw_element integer $nTotRegistros Total de registros encontrados.
 * @pw_element movimentosArray $movimentos Listagem da movimentação financeira (Contas a Pagar, Contas a Receber e Lançamentos do Conta Corrente).
 * @pw_complex mfListarResponse
 */
class MfListarResponse{
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
	 * Listagem da movimentação financeira (Contas a Pagar, Contas a Receber e Lançamentos do Conta Corrente).
	 *
	 * @var Movimentos[]
	 */
	public array $movimentos;
}
