<?php

namespace OmieLib\Financas\Contapagar;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contapagar\Request\LcpListarRequest;
use OmieLib\Financas\Contapagar\Response\LcpListarResponse;

/**
 * Dados do CNAB e Integração Bancária.
 *
 * @pw_element string $codigo_forma_pagamento Código da Forma de Pagamento.<BR><BR>Preenchimento Opcional.<BR><BR>Pode ser:<BR><BR>TRA - Transferência Bancária.<BR>BOL - Pagamento de Boleto.<BR>PIX - Transferência via PIX por QR Code.
 * @pw_element string $banco_transferencia Código do Banco para Transferência Bancária.<BR><BR>Preenchimento obrigatório quando informado "TRA" no Código da Forma de Pagamento.<BR>
 * @pw_element string $agencia_transferencia Número da Agência para Transferência Bancária.<BR><BR>Preenchimento obrigatório quando informado "TRA" no Código da Forma de Pagamento.<BR>
 * @pw_element string $conta_corrente_transferencia Número da Conta Corrente para Transferência Bancária.<BR><BR>Preenchimento obrigatório quando informado "TRA" no Código da Forma de Pagamento.<BR>
 * @pw_element string $finalidade_transferencia Finalidade da transferência.<BR><BR>Preenchimento obrigatório quando informado "TRA" no Código da Forma de Pagamento.<BR><BR>Verificar código da Finalidade de acordo com o banco vinculado ao cadastro da conta corrente informada na tag ["id_conta_corrente"]<BR><BR>Pode ser:<BR>00001 - Pagamento de Impostos, Tributos e Taxas<BR>00002 - Pagamento a Concessionárias de Serviço Público<BR>00003 - Pagamento de Dividendos<BR>00004 - Pagamento de Salários<BR>00005 - Pagamento de Fornecedores<BR>00006 - Pagamento de Honorários<BR>00007 - Pagamento de Aluguéis e Taxas e Condomínio<BR>00008 - Pagamento de Duplicatas e Títulos<BR>00009 - Pagamento de Honorários<BR>00010 - Crédito em Conta<BR>00011 - Pagamento a Corretoras<BR>00016 - Crédito em Conta Investimento<BR>00100 - Depósito Judicial<BR>00101 - Pensão Alimentícia<BR>00200 - Transferência Internacional de Reais<BR>00201 - Ajuste Posição Mercado Futuro<BR>00202 - Repasse de valores do BNDES<BR>00203 - Liquidação de compromisso com BNDES <BR>00204 - Compra/Venda de Ações - Bolsas de Valores e Mercado de Balcão<BR>00205 - Contrato referenciado em Ações/Índices de Ações - BV/BMF<BR>00300 - Restituição de Imposto de Renda<BR>00500 - Restitiuição de Prêmio de Seguros<BR>00501 - Pagamento de indenização de Sinistro de Seguro<BR>00502 - Pagamento de Prêmio de Co-seguro<BR>00503 - Restituição de prêmio de Co-seguro<BR>00504 - Pagamento de indenização de Co-seguro<BR>00505 - Pagamento de prêmio de Resseguro<BR>00506 - Restituição de prêmio de Resseguro<BR>00507 - Pagamento de Indenização de Sinistro de Resseguro<BR>00508 - Restituição de Indenização de Sinistro de Resseguro<BR>00509 - Pagamento de Despesas com Sinistros<BR>00510 - Pagamento de Inspeções/Vistorias Prévias<BR>00511 - Pagamento de Resgate de Título de Capitalização<BR>00512 - Pagamento de Sorteio de Título de Capitalização<BR>00513 - Pagamento de Devolução de Mensalidade de Título de Capitalização<BR>00514 - Restituição de Contribuição de Plano Previdenciário<BR>00515 - Pagamento de Benefício Previdenciário de Pecúlio<BR>00516 - Pagamento de Benefício Previdenciário de Pensão<BR>00517 - Pagamento de Benefício Previdenciário de Aposentadoria<BR>00518 - Pagamento de Resgate Previdenciário<BR>00519 - Pagamento de Comissão de Corretagem<BR>00520 - Pagamento de Transferências/Portabilidade de Reserva de Seguro/Previdência<BR>01 - Crédito em Conta<BR>01 - Crédito em Conta Corrente<BR>01.3 - Transferência por Chave PIX (Obrigatório informar a chave pix na tag "pix_qrcode")<BR>02 - Pagamento de Aluguel / Condomínio<BR>03 - Pagamento de Duplicatas e Títulos<BR>04 - Pagamento de Dividendos<BR>05 - Pagamento de Mensalidades Escolares<BR>07 - Pagamento a Fornecedor / Honorários<BR>08 - Pagamento de Câmbio / Fundos / Bolsas<BR>09 - Repasse de Arrecadação / Pagamento de Tributos<BR>11 - DOC / TED para Poupança<BR>12 - DOC / TED para Depósito Judicial<BR>13 - Pensão Alimentícia<BR>14 - Restituição de Imposto de Renda<BR>99 - Outros<BR>99999 - Outros
 * @pw_element string $cpf_cnpj_transferencia CNPJ ou CPF do Titular.<BR><BR>Preenchimento obrigatório quando informado "TRA" no Código da Forma de Pagamento.
 * @pw_element string $nome_transferencia Nome do Titular da Conta Corrente.<BR> <BR>Preenchimento obrigatório quando informado "TRA" no Código da Forma de Pagamento.
 * @pw_element string $codigo_barras_boleto Código de Barras (de Cobrança Bancária, de Concessionária ou de Impostos)<BR><BR>Preenchimento obrigatório quando informado "BOL" no Código da Forma de Pagamento.<BR>
 * @pw_element decimal $juros_boleto Percentual de Juros ao Mês do Boleto.<BR><BR>Preenchimento Opcional.
 * @pw_element decimal $multa_boleto Percentual de Multa por Atraso do Boleto.<BR><BR>Preenchimento Opcional.
 * @pw_element string $pix_qrcode QR Code do PIX.<BR><BR>Preenchimento obrigatório quando informado "PIX" no Código da Forma de Pagamento.<BR>Preenchimento obrigatório quando informado "TRA" no Código da Forma de Pagamento e a tag "finalidade_transferencia" for preenchida com "1.03".
 * @pw_complex cnab_integracao_bancaria
 */
class Cnab_integracao_bancaria{
	/**
	 * Código da Forma de Pagamento.<BR><BR>Preenchimento Opcional.<BR><BR>Pode ser:<BR><BR>TRA - Transferência Bancária.<BR>BOL - Pagamento de Boleto.<BR>PIX - Transferência via PIX por QR Code.
	 *
	 * @var string
	 */
	public string $codigo_forma_pagamento;
	/**
	 * Código do Banco para Transferência Bancária.<BR><BR>Preenchimento obrigatório quando informado "TRA" no Código da Forma de Pagamento.<BR>
	 *
	 * @var string
	 */
	public string $banco_transferencia;
	/**
	 * Número da Agência para Transferência Bancária.<BR><BR>Preenchimento obrigatório quando informado "TRA" no Código da Forma de Pagamento.<BR>
	 *
	 * @var string
	 */
	public string $agencia_transferencia;
	/**
	 * Número da Conta Corrente para Transferência Bancária.<BR><BR>Preenchimento obrigatório quando informado "TRA" no Código da Forma de Pagamento.<BR>
	 *
	 * @var string
	 */
	public string $conta_corrente_transferencia;
	/**
	 * Finalidade da transferência.<BR><BR>Preenchimento obrigatório quando informado "TRA" no Código da Forma de Pagamento.<BR><BR>Verificar código da Finalidade de acordo com o banco vinculado ao cadastro da conta corrente informada na tag ["id_conta_corrente"]<BR><BR>Pode ser:<BR>00001 - Pagamento de Impostos, Tributos e Taxas<BR>00002 - Pagamento a Concessionárias de Serviço Público<BR>00003 - Pagamento de Dividendos<BR>00004 - Pagamento de Salários<BR>00005 - Pagamento de Fornecedores<BR>00006 - Pagamento de Honorários<BR>00007 - Pagamento de Aluguéis e Taxas e Condomínio<BR>00008 - Pagamento de Duplicatas e Títulos<BR>00009 - Pagamento de Honorários<BR>00010 - Crédito em Conta<BR>00011 - Pagamento a Corretoras<BR>00016 - Crédito em Conta Investimento<BR>00100 - Depósito Judicial<BR>00101 - Pensão Alimentícia<BR>00200 - Transferência Internacional de Reais<BR>00201 - Ajuste Posição Mercado Futuro<BR>00202 - Repasse de valores do BNDES<BR>00203 - Liquidação de compromisso com BNDES <BR>00204 - Compra/Venda de Ações - Bolsas de Valores e Mercado de Balcão<BR>00205 - Contrato referenciado em Ações/Índices de Ações - BV/BMF<BR>00300 - Restituição de Imposto de Renda<BR>00500 - Restitiuição de Prêmio de Seguros<BR>00501 - Pagamento de indenização de Sinistro de Seguro<BR>00502 - Pagamento de Prêmio de Co-seguro<BR>00503 - Restituição de prêmio de Co-seguro<BR>00504 - Pagamento de indenização de Co-seguro<BR>00505 - Pagamento de prêmio de Resseguro<BR>00506 - Restituição de prêmio de Resseguro<BR>00507 - Pagamento de Indenização de Sinistro de Resseguro<BR>00508 - Restituição de Indenização de Sinistro de Resseguro<BR>00509 - Pagamento de Despesas com Sinistros<BR>00510 - Pagamento de Inspeções/Vistorias Prévias<BR>00511 - Pagamento de Resgate de Título de Capitalização<BR>00512 - Pagamento de Sorteio de Título de Capitalização<BR>00513 - Pagamento de Devolução de Mensalidade de Título de Capitalização<BR>00514 - Restituição de Contribuição de Plano Previdenciário<BR>00515 - Pagamento de Benefício Previdenciário de Pecúlio<BR>00516 - Pagamento de Benefício Previdenciário de Pensão<BR>00517 - Pagamento de Benefício Previdenciário de Aposentadoria<BR>00518 - Pagamento de Resgate Previdenciário<BR>00519 - Pagamento de Comissão de Corretagem<BR>00520 - Pagamento de Transferências/Portabilidade de Reserva de Seguro/Previdência<BR>01 - Crédito em Conta<BR>01 - Crédito em Conta Corrente<BR>01.3 - Transferência por Chave PIX (Obrigatório informar a chave pix na tag "pix_qrcode")<BR>02 - Pagamento de Aluguel / Condomínio<BR>03 - Pagamento de Duplicatas e Títulos<BR>04 - Pagamento de Dividendos<BR>05 - Pagamento de Mensalidades Escolares<BR>07 - Pagamento a Fornecedor / Honorários<BR>08 - Pagamento de Câmbio / Fundos / Bolsas<BR>09 - Repasse de Arrecadação / Pagamento de Tributos<BR>11 - DOC / TED para Poupança<BR>12 - DOC / TED para Depósito Judicial<BR>13 - Pensão Alimentícia<BR>14 - Restituição de Imposto de Renda<BR>99 - Outros<BR>99999 - Outros
	 *
	 * @var string
	 */
	public string $finalidade_transferencia;
	/**
	 * CNPJ ou CPF do Titular.<BR><BR>Preenchimento obrigatório quando informado "TRA" no Código da Forma de Pagamento.
	 *
	 * @var string
	 */
	public string $cpf_cnpj_transferencia;
	/**
	 * Nome do Titular da Conta Corrente.<BR> <BR>Preenchimento obrigatório quando informado "TRA" no Código da Forma de Pagamento.
	 *
	 * @var string
	 */
	public string $nome_transferencia;
	/**
	 * Código de Barras (de Cobrança Bancária, de Concessionária ou de Impostos)<BR><BR>Preenchimento obrigatório quando informado "BOL" no Código da Forma de Pagamento.<BR>
	 *
	 * @var string
	 */
	public string $codigo_barras_boleto;
	/**
	 * Percentual de Juros ao Mês do Boleto.<BR><BR>Preenchimento Opcional.
	 *
	 * @var decimal
	 */
	public float $juros_boleto;
	/**
	 * Percentual de Multa por Atraso do Boleto.<BR><BR>Preenchimento Opcional.
	 *
	 * @var decimal
	 */
	public float $multa_boleto;
	/**
	 * QR Code do PIX.<BR><BR>Preenchimento obrigatório quando informado "PIX" no Código da Forma de Pagamento.<BR>Preenchimento obrigatório quando informado "TRA" no Código da Forma de Pagamento e a tag "finalidade_transferencia" for preenchida com "1.03".
	 *
	 * @var string
	 */
	public string $pix_qrcode;
}
