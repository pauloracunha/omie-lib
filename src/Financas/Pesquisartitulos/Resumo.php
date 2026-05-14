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
 * Resumo dos pagamentos realizados para o título
 *
 * @pw_element string $cLiquidado Indica se o título está liquidado.<BR>Pode ser:<BR>S - Sim, indicado que o título está quitado.<BR>N - Não, indicando que o título ainda está em aberto.
 * @pw_element decimal $nValPago Valor total pago para o título.
 * @pw_element decimal $nValAberto Valor total em aberto para o título.
 * @pw_element decimal $nDesconto Valor do Desconto.
 * @pw_element decimal $nJuros Valor do Juros.
 * @pw_element decimal $nMulta Valor da Multa.
 * @pw_element decimal $nValLiquido Valor líquido<BR>(nValPago - nDesconto + Juros + nMulta)
 * @pw_complex resumo
 */
class Resumo{
	/**
	 * Indica se o título está liquidado.<BR>Pode ser:<BR>S - Sim, indicado que o título está quitado.<BR>N - Não, indicando que o título ainda está em aberto.
	 *
	 * @var string
	 */
	public string $cLiquidado;
	/**
	 * Valor total pago para o título.
	 *
	 * @var decimal
	 */
	public float $nValPago;
	/**
	 * Valor total em aberto para o título.
	 *
	 * @var decimal
	 */
	public float $nValAberto;
	/**
	 * Valor do Desconto.
	 *
	 * @var decimal
	 */
	public float $nDesconto;
	/**
	 * Valor do Juros.
	 *
	 * @var decimal
	 */
	public float $nJuros;
	/**
	 * Valor da Multa.
	 *
	 * @var decimal
	 */
	public float $nMulta;
	/**
	 * Valor líquido<BR>(nValPago - nDesconto + Juros + nMulta)
	 *
	 * @var decimal
	 */
	public float $nValLiquido;
}
