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
 * Lançamentos realizados para o título
 *
 * @pw_element integer $nCodLanc Código do lançamento
 * @pw_element string $cCodIntLanc Código de Integração do Lançamento
 * @pw_element integer $nIdLancCC Código do Lançamento na Conta Corrente
 * @pw_element string $dDtLanc Data do Lançamento
 * @pw_element decimal $nValLanc Valor do Lançamento
 * @pw_element decimal $nMulta Valor da Multa.
 * @pw_element decimal $nJuros Valor do Juros.
 * @pw_element decimal $nDesconto Valor do Desconto.
 * @pw_element integer $nCodCC Código da Conta Corrente
 * @pw_element string $cNatureza Natureza do Lançamento.<BR>Pode ser:<BR>P - Contas a Pagar<BR>R - Contas a Receber
 * @pw_element string $cObsLanc Observação para o lançamento
 * @pw_complex lancamentos
 */
class Lancamentos{
	/**
	 * Código do lançamento
	 *
	 * @var integer
	 */
	public int $nCodLanc;
	/**
	 * Código de Integração do Lançamento
	 *
	 * @var string
	 */
	public string $cCodIntLanc;
	/**
	 * Código do Lançamento na Conta Corrente
	 *
	 * @var integer
	 */
	public int $nIdLancCC;
	/**
	 * Data do Lançamento
	 *
	 * @var string
	 */
	public string $dDtLanc;
	/**
	 * Valor do Lançamento
	 *
	 * @var decimal
	 */
	public float $nValLanc;
	/**
	 * Valor da Multa.
	 *
	 * @var decimal
	 */
	public float $nMulta;
	/**
	 * Valor do Juros.
	 *
	 * @var decimal
	 */
	public float $nJuros;
	/**
	 * Valor do Desconto.
	 *
	 * @var decimal
	 */
	public float $nDesconto;
	/**
	 * Código da Conta Corrente
	 *
	 * @var integer
	 */
	public int $nCodCC;
	/**
	 * Natureza do Lançamento.<BR>Pode ser:<BR>P - Contas a Pagar<BR>R - Contas a Receber
	 *
	 * @var string
	 */
	public string $cNatureza;
	/**
	 * Observação para o lançamento
	 *
	 * @var string
	 */
	public string $cObsLanc;
}
