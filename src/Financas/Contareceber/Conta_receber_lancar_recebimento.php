<?php

namespace OmieLib\Financas\Contareceber;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contareceber\Request\LcrListarRequest;
use OmieLib\Financas\Contareceber\Response\LcrListarResponse;

/**
 * Informações para realizada a Baixa do Contas a Receber.
 *
 * @pw_element integer $codigo_lancamento Código do lançamento no contas a receber,
 * @pw_element string $codigo_lancamento_integracao Código do lançamento gerado pelo integrador.
 * @pw_element integer $codigo_baixa Código da Baixa
 * @pw_element string $codigo_baixa_integracao Código de Integração da Baixa
 * @pw_element integer $codigo_conta_corrente Código da Conta Corrente.
 * @pw_element string $codigo_conta_corrente_integracao Código da Conta Corrente do Integrador.
 * @pw_element decimal $valor Valor a ser baixado.
 * @pw_element decimal $juros Valor do Juros.
 * @pw_element decimal $desconto Valor do desconto.
 * @pw_element decimal $multa Valor da multa.
 * @pw_element string $data Data da Baixa
 * @pw_element string $observacao Observação da Baixa do Contas a Receber.
 * @pw_element string $bloqueado Bloquear lançamento (S/N)
 * @pw_element string $conciliar_documento Efetua a conciliação do documento automaticamente.
 * @pw_element string $nsu Número Sequencial Único - Comprovante de pagamento.
 * @pw_complex conta_receber_lancar_recebimento
 */
class Conta_receber_lancar_recebimento{
	/**
	 * Código do lançamento no contas a receber,
	 *
	 * @var integer
	 */
	public int $codigo_lancamento;
	/**
	 * Código do lançamento gerado pelo integrador.
	 *
	 * @var string
	 */
	public string $codigo_lancamento_integracao;
	/**
	 * Código da Baixa
	 *
	 * @var integer
	 */
	public int $codigo_baixa;
	/**
	 * Código de Integração da Baixa
	 *
	 * @var string
	 */
	public string $codigo_baixa_integracao;
	/**
	 * Código da Conta Corrente.
	 *
	 * @var integer
	 */
	public int $codigo_conta_corrente;
	/**
	 * Código da Conta Corrente do Integrador.
	 *
	 * @var string
	 */
	public string $codigo_conta_corrente_integracao;
	/**
	 * Valor a ser baixado.
	 *
	 * @var decimal
	 */
	public float $valor;
	/**
	 * Valor do Juros.
	 *
	 * @var decimal
	 */
	public float $juros;
	/**
	 * Valor do desconto.
	 *
	 * @var decimal
	 */
	public float $desconto;
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
	/**
	 * Bloquear lançamento (S/N)
	 *
	 * @var string
	 */
	public string $bloqueado;
	/**
	 * Efetua a conciliação do documento automaticamente.
	 *
	 * @var string
	 */
	public string $conciliar_documento;
	/**
	 * Número Sequencial Único - Comprovante de pagamento.
	 *
	 * @var string
	 */
	public string $nsu;
}
