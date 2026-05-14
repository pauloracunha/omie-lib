<?php

namespace OmieLib\Financas\Contapagar;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contapagar\Request\LcpListarRequest;
use OmieLib\Financas\Contapagar\Response\LcpListarResponse;

/**
 * Informações para realizar a Baixa do Contas a Pagar.
 *
 * @pw_element integer $codigo_lancamento Código do lançamento no contas a pagar.
 * @pw_element string $codigo_lancamento_integracao Código de Integração do Lançamento de Contas a Pagar.<BR>Preenchimento Obrigatório na inclusão.<BR>Preenchimento Opcional na Alteração/Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código do lançamento do Contas a Pagar no aplicativo que você está integração com o Omie. <BR>A função dele é servir como uma mapa de relacionamento entre as aplicações. <BR>Ao realizar uma consulta/listagem de Contas a Pagar você conseguirá ver a relação entre o id do Contas a Pagar gerado no Omie e o código do Contas a Pagar existente em sua aplicação.<BR>
 * @pw_element integer $codigo_baixa Código para identificar a baixa do título no Contas a Pagar.
 * @pw_element string $codigo_baixa_integracao Código da baixa do integrador para identificar a baixa de um título do contas a pagar.
 * @pw_element integer $codigo_conta_corrente Código da Conta Corrente.
 * @pw_element string $codigo_conta_corrente_integracao DEPRECATED
 * @pw_element decimal $valor Valor a ser baixado.
 * @pw_element decimal $desconto Valor do desconto.
 * @pw_element decimal $juros Valor do Juros.
 * @pw_element decimal $multa Valor da multa.
 * @pw_element string $data Data da Baixa
 * @pw_element string $observacao Observação da Baixa do Contas a Receber.
 * @pw_element string $conciliar_documento Efetua a conciliação do documento automaticamente. Opcional.<BR><BR>Preencher com S/N.
 * @pw_complex conta_pagar_lancar_pagamento
 */
class Conta_pagar_lancar_pagamento{
	/**
	 * Código do lançamento no contas a pagar.
	 *
	 * @var integer
	 */
	public int $codigo_lancamento;
	/**
	 * Código de Integração do Lançamento de Contas a Pagar.<BR>Preenchimento Obrigatório na inclusão.<BR>Preenchimento Opcional na Alteração/Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código do lançamento do Contas a Pagar no aplicativo que você está integração com o Omie. <BR>A função dele é servir como uma mapa de relacionamento entre as aplicações. <BR>Ao realizar uma consulta/listagem de Contas a Pagar você conseguirá ver a relação entre o id do Contas a Pagar gerado no Omie e o código do Contas a Pagar existente em sua aplicação.<BR>
	 *
	 * @var string
	 */
	public string $codigo_lancamento_integracao;
	/**
	 * Código para identificar a baixa do título no Contas a Pagar.
	 *
	 * @var integer
	 */
	public int $codigo_baixa;
	/**
	 * Código da baixa do integrador para identificar a baixa de um título do contas a pagar.
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
	 * DEPRECATED
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
	/**
	 * Efetua a conciliação do documento automaticamente. Opcional.<BR><BR>Preencher com S/N.
	 *
	 * @var string
	 */
	public string $conciliar_documento;
}
