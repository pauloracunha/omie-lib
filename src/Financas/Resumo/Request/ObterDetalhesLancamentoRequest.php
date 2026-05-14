<?php

namespace OmieLib\Financas\Resumo\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Resumo\BoletoInfo;
use OmieLib\Financas\Resumo\ContaCorrente;
use OmieLib\Financas\Resumo\ContaPagar;
use OmieLib\Financas\Resumo\ContaPagarAtraso;
use OmieLib\Financas\Resumo\ContaPagarCategoria;
use OmieLib\Financas\Resumo\ContaReceber;
use OmieLib\Financas\Resumo\ContaReceberAtraso;
use OmieLib\Financas\Resumo\ContaReceberCategoria;
use OmieLib\Financas\Resumo\FluxoCaixa;
use OmieLib\Financas\Resumo\ListaAnexos;
use OmieLib\Financas\Resumo\ListaDetalhesFinancas;
use OmieLib\Financas\Resumo\ListaEmEberto;
use OmieLib\Financas\Resumo\PixInfo;
use OmieLib\Financas\Resumo\Response\ObterDetalhesLancamentoResponse;
use OmieLib\Financas\Resumo\Response\ObterListaEmAbertoResponse;
use OmieLib\Financas\Resumo\Response\ObterListaFinancasResponse;
use OmieLib\Financas\Resumo\Response\ObterResumoFinResponse;
use OmieLib\Financas\Resumo\ResumoFinancasJsonClient;

/**
 * Solicitação dos detalhes de um lançamento em aberto.
 *
 * @pw_element integer $nIdTitulo Código do lançamento.<BR><BR>(Gerado internamente, não é visualizado na tela)
 * @pw_complex ObterDetalhesLancamentoRequest
 */
class ObterDetalhesLancamentoRequest{
	/**
	 * Código do lançamento.<BR><BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nIdTitulo;
}
