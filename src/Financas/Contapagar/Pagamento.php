<?php

namespace OmieLib\Financas\Contapagar;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contapagar\Request\LcpListarRequest;
use OmieLib\Financas\Contapagar\Response\LcpListarResponse;

/**
 * Detalhes do pagamento(baixa).
 *
 * @pw_element string $codigo_pagamento_integracao Código interno do lançamento da conta corrente.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar código do lançamento da conta corrente utilizado no seu aplicativo quando incluir um lançamento no Omie.
 * @pw_element integer $codigo_conta_corrente Código da Conta Corrente.
 * @pw_element decimal $valor Valor a ser baixado.
 * @pw_element decimal $desconto Valor do desconto.
 * @pw_element decimal $juros Valor do Juros.
 * @pw_element decimal $multa Valor da multa.
 * @pw_element string $data Data da Baixa
 * @pw_element string $observacao Observação da Baixa do Contas a Receber.
 * @pw_complex pagamento
 */
class Pagamento{
	/**
	 * Código interno do lançamento da conta corrente.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar código do lançamento da conta corrente utilizado no seu aplicativo quando incluir um lançamento no Omie.
	 *
	 * @var string
	 */
	public string $codigo_pagamento_integracao;
	/**
	 * Código da Conta Corrente.
	 *
	 * @var integer
	 */
	public int $codigo_conta_corrente;
	/**
	 * Valor a ser baixado.
	 *
	 * @var decimal
	 */
	public float $valor;
	/**
	 * Valor do desconto.
	 *
	 * @var decimal
	 */
	public float $desconto;
	/**
	 * Valor do Juros.
	 *
	 * @var decimal
	 */
	public float $juros;
	/**
	 * Valor da multa.
	 *
	 * @var decimal
	 */
	public float $multa;
	/**
	 * Data da Baixa
	 *
	 * @var string
	 */
	public string $data;
	/**
	 * Observação da Baixa do Contas a Receber.
	 *
	 * @var string
	 */
	public string $observacao;
}
