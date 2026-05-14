<?php

namespace OmieLib\Financas\Contareceber;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceber\Request\LcrListarRequest;
use OmieLib\Financas\Contareceber\Response\LcrListarResponse;

/**
 * Detalhes do recebimento (baixa).
 *
 * @pw_element string $codigo_recebimento_integracao Código de integração do recebimento de contas a receber que será incluído
 * @pw_element integer $codigo_conta_corrente Código da Conta Corrente.
 * @pw_element decimal $valor Valor a ser baixado.
 * @pw_element decimal $desconto Valor do desconto.
 * @pw_element decimal $juros Valor do Juros.
 * @pw_element decimal $multa Valor da multa.
 * @pw_element string $data Data da Baixa
 * @pw_element string $observacao Observação da Baixa do Contas a Receber.
 * @pw_complex recebimento
 */
class Recebimento{
	/**
	 * Código de integração do recebimento de contas a receber que será incluído
	 *
	 * @var string
	 */
	public string $codigo_recebimento_integracao;
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
