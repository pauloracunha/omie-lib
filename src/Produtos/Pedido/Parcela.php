<?php

namespace OmieLib\Produtos\Pedido;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedido\Request\PvpAlterarPedFatRequest;
use OmieLib\Produtos\Pedido\Request\PvpConsultarRequest;
use OmieLib\Produtos\Pedido\Request\PvpDevolverRequest;
use OmieLib\Produtos\Pedido\Request\PvpExcluirRequest;
use OmieLib\Produtos\Pedido\Request\PvpListarRequest;
use OmieLib\Produtos\Pedido\Request\PvpSimularImpRequest;
use OmieLib\Produtos\Pedido\Request\PvpStatusRequest;
use OmieLib\Produtos\Pedido\Request\PvpTrocarEtapaRequest;
use OmieLib\Produtos\Pedido\Response\PvpAlterarPedFatResponse;
use OmieLib\Produtos\Pedido\Response\PvpConsultarResponse;
use OmieLib\Produtos\Pedido\Response\PvpDevolverResponse;
use OmieLib\Produtos\Pedido\Response\PvpExcluirResponse;
use OmieLib\Produtos\Pedido\Response\PvpListarResponse;
use OmieLib\Produtos\Pedido\Response\PvpSimularImpResponse;
use OmieLib\Produtos\Pedido\Response\PvpStatusResponse;
use OmieLib\Produtos\Pedido\Response\PvpTrocarEtapaResponse;

/**
 * Dados da parcela.
 *
 * @pw_element integer $numero_parcela Número da Parcela.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Parcelas" do Pedido de Venda.
 * @pw_element decimal $valor Valor do Documento.<BR><BR>Preenchimento Obrigatório.
 * @pw_element decimal $percentual Percentual da Parcela.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Parcelas" do Pedido de Venda.
 * @pw_element string $data_vencimento Data do documento.<BR><BR>Preenchimento Obrigatório.
 * @pw_element integer $quantidade_dias Quantidade de dias até o vencimento da parcela.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Parcelas" do Pedido de Venda.
 * @pw_element string $tipo_documento Tipo de Documento.<BR><BR>Preenchimento opcional.<BR><BR>Lista de tipos de documentos em:<BR>/api/v1/geral/tiposdoc
 * @pw_element string $meio_pagamento Meio de Pagamento - Utilizado apenas para emissão de NF-e (campo "tPag" do XML). <BR>Esse campo indica como a parcela da nota será paga.<BR> <BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Parcelas" do Pedido de Venda.<BR><BR>Caso informado na estrutura "informacoes_adicionais" grava o valor como padrão para todas as parcelas geradas na integração que não tiverem esse campo preenchido a partir da estrutura "parcela".<BR><BR>Pode ser:<BR>01  Dinheiro<BR>02  Cheque<BR>03  Cartão de Crédito<BR>04  Cartão de Débito<BR>05  Crédito Loja<BR>10  Vale Alimentação<BR>11  Vale Refeição<BR>12  Vale Presente<BR>13  Vale Combustível<BR>15  Boleto Bancário<BR>16  Depósito Bancário<BR>17  Pagamento Instantâneo (PIX)<BR>18  Transferência bancária, Carteira Digital<BR>19  Programa de fidelidade, Cashback, Crédito Virtual.<BR>90  Sem Pagamento<BR>99  Outros<BR><BR>Listagem completa disponível na API:<BR>/api/v1/geral/meiospagamento/
 * @pw_element string $descr_meio_pagamento Descrição do Meio de Pagamento - Utilizado apenas para emissão de NF-e (campo "xPag" do XML).<BR><BR>Esse campo precisa ser informado quando a tag "meio_pagamento" for igual a 99 (Outros).<BR><BR>Informação localizada na Aba "Parcelas" do Pedido de Venda.<BR><BR>Caso informado na estrutura "informacoes_adicionais" grava o valor como padrão para todas as parcelas geradas na integração que não tiverem esse campo preenchido a partir da estrutura "parcela".
 * @pw_element string $nsu Número Sequencial Único NSU - Para identificar vendas por cartões ou TransactionID TID - Para identificar vendas de comercio eletrônico.<BR><BR>Caso informado na estrutura "informacoes_adicionais" grava o valor como padrão para todas as parcelas geradas na integração que não tiverem esse campo preenchido a partir da estrutura "parcela".<BR><BR>Preenchimento opcional.
 * @pw_element string $nao_gerar_boleto Indica se o boleto não deve ser gerado para a(s) parcela(s) ao emitir a nota fiscal.<BR><BR>Informe "S" para não gerar o boleto. O padrão é "N".<BR><BR>Quando informado dentro do tag "cabecalho", aplica-se como valor padrão para todas as parcelas, caso não seja especificado individualmente em cada uma.<BR><BR>Quando informado dentro da tag "lista_parcelas", aplica-se individualmente para cada parcela (tem prioridade sobre o valor informado no cabeçalho).<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Parcelas" do Pedido de Venda.
 * @pw_element string $parcela_adiantamento Está é uma parcela de Adiantamento do Cliente.<BR><BR>Informe "S" para indicar que é uma parcela de adiantamento.<BR>O padrão é "N".<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Parcelas" do Pedido de Venda.<BR>
 * @pw_element string $categoria_adiantamento Código da Categoria para o Adiantamento.<BR>Será utilizada na conta a receber que representa o adiantamento desta parcela.<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Parcelas" do Pedido de Venda.
 * @pw_element integer $conta_corrente_adiantamento Conta Corrente de Adiantamento.<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Parcelas" do Pedido de Venda.
 * @pw_element string $bandeira Código da Bandeira da operadora de cartão.
 * @pw_element string $cnpj_fin Informar o CNPJ da instituição de pagamento, adquirente ou subadquirente.
 * @pw_complex parcela
 */
class Parcela{
	/**
	 * Número da Parcela.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Parcelas" do Pedido de Venda.
	 *
	 * @var integer
	 */
	public int $numero_parcela;
	/**
	 * Valor do Documento.<BR><BR>Preenchimento Obrigatório.
	 *
	 * @var decimal
	 */
	public float $valor;
	/**
	 * Percentual da Parcela.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Parcelas" do Pedido de Venda.
	 *
	 * @var decimal
	 */
	public float $percentual;
	/**
	 * Data do documento.<BR><BR>Preenchimento Obrigatório.
	 *
	 * @var string
	 */
	public string $data_vencimento;
	/**
	 * Quantidade de dias até o vencimento da parcela.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Parcelas" do Pedido de Venda.
	 *
	 * @var integer
	 */
	public int $quantidade_dias;
	/**
	 * Tipo de Documento.<BR><BR>Preenchimento opcional.<BR><BR>Lista de tipos de documentos em:<BR>/api/v1/geral/tiposdoc
	 *
	 * @var string
	 */
	public string $tipo_documento;
	/**
	 * Meio de Pagamento - Utilizado apenas para emissão de NF-e (campo "tPag" do XML). <BR>Esse campo indica como a parcela da nota será paga.<BR> <BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Parcelas" do Pedido de Venda.<BR><BR>Caso informado na estrutura "informacoes_adicionais" grava o valor como padrão para todas as parcelas geradas na integração que não tiverem esse campo preenchido a partir da estrutura "parcela".<BR><BR>Pode ser:<BR>01  Dinheiro<BR>02  Cheque<BR>03  Cartão de Crédito<BR>04  Cartão de Débito<BR>05  Crédito Loja<BR>10  Vale Alimentação<BR>11  Vale Refeição<BR>12  Vale Presente<BR>13  Vale Combustível<BR>15  Boleto Bancário<BR>16  Depósito Bancário<BR>17  Pagamento Instantâneo (PIX)<BR>18  Transferência bancária, Carteira Digital<BR>19  Programa de fidelidade, Cashback, Crédito Virtual.<BR>90  Sem Pagamento<BR>99  Outros<BR><BR>Listagem completa disponível na API:<BR>/api/v1/geral/meiospagamento/
	 *
	 * @var string
	 */
	public string $meio_pagamento;
	/**
	 * Descrição do Meio de Pagamento - Utilizado apenas para emissão de NF-e (campo "xPag" do XML).<BR><BR>Esse campo precisa ser informado quando a tag "meio_pagamento" for igual a 99 (Outros).<BR><BR>Informação localizada na Aba "Parcelas" do Pedido de Venda.<BR><BR>Caso informado na estrutura "informacoes_adicionais" grava o valor como padrão para todas as parcelas geradas na integração que não tiverem esse campo preenchido a partir da estrutura "parcela".
	 *
	 * @var string
	 */
	public string $descr_meio_pagamento;
	/**
	 * Número Sequencial Único NSU - Para identificar vendas por cartões ou TransactionID TID - Para identificar vendas de comercio eletrônico.<BR><BR>Caso informado na estrutura "informacoes_adicionais" grava o valor como padrão para todas as parcelas geradas na integração que não tiverem esse campo preenchido a partir da estrutura "parcela".<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $nsu;
	/**
	 * Indica se o boleto não deve ser gerado para a(s) parcela(s) ao emitir a nota fiscal.<BR><BR>Informe "S" para não gerar o boleto. O padrão é "N".<BR><BR>Quando informado dentro do tag "cabecalho", aplica-se como valor padrão para todas as parcelas, caso não seja especificado individualmente em cada uma.<BR><BR>Quando informado dentro da tag "lista_parcelas", aplica-se individualmente para cada parcela (tem prioridade sobre o valor informado no cabeçalho).<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Parcelas" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $nao_gerar_boleto;
	/**
	 * Está é uma parcela de Adiantamento do Cliente.<BR><BR>Informe "S" para indicar que é uma parcela de adiantamento.<BR>O padrão é "N".<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Parcelas" do Pedido de Venda.<BR>
	 *
	 * @var string
	 */
	public string $parcela_adiantamento;
	/**
	 * Código da Categoria para o Adiantamento.<BR>Será utilizada na conta a receber que representa o adiantamento desta parcela.<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Parcelas" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $categoria_adiantamento;
	/**
	 * Conta Corrente de Adiantamento.<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Parcelas" do Pedido de Venda.
	 *
	 * @var integer
	 */
	public int $conta_corrente_adiantamento;
	/**
	 * Código da Bandeira da operadora de cartão.
	 *
	 * @var string
	 */
	public string $bandeira;
	/**
	 * Informar o CNPJ da instituição de pagamento, adquirente ou subadquirente.
	 *
	 * @var string
	 */
	public string $cnpj_fin;
}
