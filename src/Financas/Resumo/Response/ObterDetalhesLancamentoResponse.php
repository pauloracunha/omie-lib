<?php

namespace OmieLib\Financas\Resumo\Response;

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
use OmieLib\Financas\Resumo\Request\ObterDetalhesLancamentoRequest;
use OmieLib\Financas\Resumo\Request\ObterListaEmAbertoRequest;
use OmieLib\Financas\Resumo\Request\ObterListaFinancasRequest;
use OmieLib\Financas\Resumo\Request\ObterResumoFinRequest;
use OmieLib\Financas\Resumo\ResumoFinancasJsonClient;

/**
 * Resposta da solicitação dos detalhes de um lançamento em aberto.
 *
 * @pw_element string $cTipoLanc Tipo do lançamento retornado.<BR><BR>P - Lançamento a Pagar<BR>R - Lançamento a Receber
 * @pw_element integer $nIdTitulo Código do lançamento.<BR><BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element integer $nIdCliente Código do cliente/Forncedor.<BR><BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cNomeCliente Nome do Cliente/Fornecedor.
 * @pw_element string $cCodCateg Código da Categoria
 * @pw_element string $cDescCateg Descrição da categoria.
 * @pw_element string $cDescCtaCorr Descrição da conta corrente.
 * @pw_element string $dEmissao Data de emissão.
 * @pw_element string $dVencimento Data de vencimento.
 * @pw_element string $dPrevisao Data de previsão do lançamento.
 * @pw_element decimal $nDiasAtraso Dias de atraso do lançamento.
 * @pw_element decimal $vDoc Valor do lançamento.
 * @pw_element string $cUrlLogoBanco URL da Imagem do Logo do Banco.
 * @pw_element string $cSituacao Situação do lançamento.<BR><BR>Ex: Atrasado desde 30/10 Qua
 * @pw_element string $cCor Hexadecimal da cor.
 * @pw_element string $cIcone Unicode do Ícone.
 * @pw_element integer $nQtdeAnexos Indica a quantidade de anexos.
 * @pw_element listaAnexosArray $listaAnexos Lista de anexos do lançamento.
 * @pw_element string $cBolGerado Indica se o boleto foi gerado.<BR><BR>Retornado apenas para contas a receber.
 * @pw_element string $cBolPodeGerar Indica se o boleto pode ser gerado. (S/N)<BR><BR>Retornado apenas para contas a receber.
 * @pw_element boletoInfo $boletoInfo Detalhes do boleto gerado.<BR><BR>Retornado apenas para contas a receber.
 * @pw_element string $cPixGerado Indica se o PIX foi gerado.<BR><BR>Retornado apenas para contas a receber.
 * @pw_element string $cPixPodeGerar Indica se o PIX pode ser gerado. (S/N)<BR><BR>Retornado apenas para contas a receber.
 * @pw_element pixInfo $pixInfo Detalhes do boleto gerado.<BR><BR>Retornado apenas para contas a receber.
 * @pw_complex ObterDetalhesLancamentoResponse
 */
class ObterDetalhesLancamentoResponse{
	/**
	 * Tipo do lançamento retornado.<BR><BR>P - Lançamento a Pagar<BR>R - Lançamento a Receber
	 *
	 * @var string
	 */
	public string $cTipoLanc;
	/**
	 * Código do lançamento.<BR><BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nIdTitulo;
	/**
	 * Código do cliente/Forncedor.<BR><BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nIdCliente;
	/**
	 * Nome do Cliente/Fornecedor.
	 *
	 * @var string
	 */
	public string $cNomeCliente;
	/**
	 * Código da Categoria
	 *
	 * @var string
	 */
	public string $cCodCateg;
	/**
	 * Descrição da categoria.
	 *
	 * @var string
	 */
	public string $cDescCateg;
	/**
	 * Descrição da conta corrente.
	 *
	 * @var string
	 */
	public string $cDescCtaCorr;
	/**
	 * Data de emissão.
	 *
	 * @var string
	 */
	public string $dEmissao;
	/**
	 * Data de vencimento.
	 *
	 * @var string
	 */
	public string $dVencimento;
	/**
	 * Data de previsão do lançamento.
	 *
	 * @var string
	 */
	public string $dPrevisao;
	/**
	 * Dias de atraso do lançamento.
	 *
	 * @var decimal
	 */
	public float $nDiasAtraso;
	/**
	 * Valor do lançamento.
	 *
	 * @var decimal
	 */
	public float $vDoc;
	/**
	 * URL da Imagem do Logo do Banco.
	 *
	 * @var string
	 */
	public string $cUrlLogoBanco;
	/**
	 * Situação do lançamento.<BR><BR>Ex: Atrasado desde 30/10 Qua
	 *
	 * @var string
	 */
	public string $cSituacao;
	/**
	 * Hexadecimal da cor.
	 *
	 * @var string
	 */
	public string $cCor;
	/**
	 * Unicode do Ícone.
	 *
	 * @var string
	 */
	public string $cIcone;
	/**
	 * Indica a quantidade de anexos.
	 *
	 * @var integer
	 */
	public int $nQtdeAnexos;
	/**
	 * Lista de anexos do lançamento.
	 *
	 * @var ListaAnexos[]
	 */
	public array $listaAnexos;
	/**
	 * Indica se o boleto foi gerado.<BR><BR>Retornado apenas para contas a receber.
	 *
	 * @var string
	 */
	public string $cBolGerado;
	/**
	 * Indica se o boleto pode ser gerado. (S/N)<BR><BR>Retornado apenas para contas a receber.
	 *
	 * @var string
	 */
	public string $cBolPodeGerar;
	/**
	 * Detalhes do boleto gerado.<BR><BR>Retornado apenas para contas a receber.
	 *
	 * @var BoletoInfo
	 */
	public BoletoInfo $boletoInfo;
	/**
	 * Indica se o PIX foi gerado.<BR><BR>Retornado apenas para contas a receber.
	 *
	 * @var string
	 */
	public string $cPixGerado;
	/**
	 * Indica se o PIX pode ser gerado. (S/N)<BR><BR>Retornado apenas para contas a receber.
	 *
	 * @var string
	 */
	public string $cPixPodeGerar;
	/**
	 * Detalhes do boleto gerado.<BR><BR>Retornado apenas para contas a receber.
	 *
	 * @var PixInfo
	 */
	public PixInfo $pixInfo;
}
