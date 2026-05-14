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
 * Dados da Aba "Informações Adicionais" do Pedido de Venda.
 *
 * @pw_element string $codigo_categoria Código da categoria.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.<BR><BR>Utilize a tag "codigo" do método "ListarCategorias" da API<BR>http://app.omie.com.br/api/v1/geral/categorias/<BR>para obter essa informação.
 * @pw_element integer $codigo_conta_corrente Código da Conta Corrente.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.<BR><BR>Utilize a tag "codigo" do método "PesquisarContaCorrente" da API<BR>http://app.omie.com.br/api/v1/geral/contacorrente/<BR>para obter essa informação.
 * @pw_element string $numero_pedido_cliente Número do pedido do cliente.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
 * @pw_element string $numero_contrato Número do Contrato de Venda.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
 * @pw_element string $contato Contato.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
 * @pw_element string $dados_adicionais_nf Dados adicionais para a Nota Fiscal.<BR>Preenchimento Opcional.<BR><BR>Utilize o caracter pipe ( | ) como separador de linha.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
 * @pw_element string $consumidor_final Nota Fiscal para Consumo Final.<BR>Preenchimento Obrigatório.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
 * @pw_element string $utilizar_emails Utilizar os seguintes endereços de e-mail.<BR>Preenchimento Obrigatório.<BR><BR>Informar a lista de e-mail que receberão a Nota Fiscal.<BR>Utilize a virgula (,) como separador.<BR><BR>Informação localizada na Aba "E-mail para o Cliente" do Pedido de Venda.
 * @pw_element string $enviar_email Enviar e-mail com o boleto de cobrança gerado pelo faturamento (juntamente com o DANFE e o XML da NF-e).<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR>Default "N"<BR><BR>Informação localizada na Aba "E-mail para o Cliente" do Pedido de Venda.<BR><BR>É permitido somente o preenchimento de uma das tags "enviar_pix" ou "enviar_email
 * @pw_element string $enviar_pix Enviar e-mail com o PIX de cobrança gerado pelo faturamento (juntamente com o DANFE e o XML da NF-e).<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR>Default "N"<BR><BR>Informação localizada na Aba "E-mail para o Cliente" do Pedido de Venda.<BR><BR>É permitido somente o preenchimento de uma das tags "enviar_pix" ou "enviar_email
 * @pw_element integer $codVend Código do Vendedor.<BR>Preenchimento Opcional.<BR><BR>Informação localizada no cabeçalho do Pedido de Venda.<BR><BR>Utilize a tag "codigo" do método "ListarVendedores" da API<BR>http://app.omie.com.br/api/v1/geral/vendedores/<BR>para obter essa informação.
 * @pw_element integer $codProj Código do Projeto.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.<BR><BR>Utilize a tag "codigo" do método "ListarProjetos" da API<BR>http://app.omie.com.br/api/v1/geral/projetos/<BR>para obter essa informação.
 * @pw_element outros_detalhes $outros_detalhes Outros detalhes da NF-e.<BR>Preenchimento Opcional.
 * @pw_element string $impostos_embutidos DEPRECATED
 * @pw_element string $meio_pagamento Meio de Pagamento - Utilizado apenas para emissão de NF-e (campo "tPag" do XML). <BR>Esse campo indica como a parcela da nota será paga.<BR> <BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Parcelas" do Pedido de Venda.<BR><BR>Caso informado na estrutura "informacoes_adicionais" grava o valor como padrão para todas as parcelas geradas na integração que não tiverem esse campo preenchido a partir da estrutura "parcela".<BR><BR>Pode ser:<BR>01  Dinheiro<BR>02  Cheque<BR>03  Cartão de Crédito<BR>04  Cartão de Débito<BR>05  Crédito Loja<BR>10  Vale Alimentação<BR>11  Vale Refeição<BR>12  Vale Presente<BR>13  Vale Combustível<BR>15  Boleto Bancário<BR>16  Depósito Bancário<BR>17  Pagamento Instantâneo (PIX)<BR>18  Transferência bancária, Carteira Digital<BR>19  Programa de fidelidade, Cashback, Crédito Virtual.<BR>90  Sem Pagamento<BR>99  Outros<BR><BR>Listagem completa disponível na API:<BR>/api/v1/geral/meiospagamento/
 * @pw_element string $descr_meio_pagamento Descrição do Meio de Pagamento - Utilizado apenas para emissão de NF-e (campo "xPag" do XML).<BR><BR>Esse campo precisa ser informado quando a tag "meio_pagamento" for igual a 99 (Outros).<BR><BR>Informação localizada na Aba "Parcelas" do Pedido de Venda.<BR><BR>Caso informado na estrutura "informacoes_adicionais" grava o valor como padrão para todas as parcelas geradas na integração que não tiverem esse campo preenchido a partir da estrutura "parcela".
 * @pw_element string $tipo_documento Tipo de Documento.<BR><BR>Preenchimento opcional.<BR><BR>Lista de tipos de documentos em:<BR>/api/v1/geral/tiposdoc
 * @pw_element nfRelacionada $nfRelacionada Detalhes da NF referenciada
 * @pw_element string $nsu Número Sequencial Único NSU - Para identificar vendas por cartões ou TransactionID TID - Para identificar vendas de comercio eletrônico.<BR><BR>Caso informado na estrutura "informacoes_adicionais" grava o valor como padrão para todas as parcelas geradas na integração que não tiverem esse campo preenchido a partir da estrutura "parcela".<BR><BR>Preenchimento opcional.
 * @pw_complex informacoes_adicionais
 */
class Informacoes_adicionais{
	/**
	 * Código da categoria.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.<BR><BR>Utilize a tag "codigo" do método "ListarCategorias" da API<BR>http://app.omie.com.br/api/v1/geral/categorias/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public string $codigo_categoria;
	/**
	 * Código da Conta Corrente.<BR>Preenchimento Obrigatório.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.<BR><BR>Utilize a tag "codigo" do método "PesquisarContaCorrente" da API<BR>http://app.omie.com.br/api/v1/geral/contacorrente/<BR>para obter essa informação.
	 *
	 * @var integer
	 */
	public int $codigo_conta_corrente;
	/**
	 * Número do pedido do cliente.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $numero_pedido_cliente;
	/**
	 * Número do Contrato de Venda.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $numero_contrato;
	/**
	 * Contato.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $contato;
	/**
	 * Dados adicionais para a Nota Fiscal.<BR>Preenchimento Opcional.<BR><BR>Utilize o caracter pipe ( | ) como separador de linha.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $dados_adicionais_nf;
	/**
	 * Nota Fiscal para Consumo Final.<BR>Preenchimento Obrigatório.<BR><BR>Informar "S" ou "N".<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $consumidor_final;
	/**
	 * Utilizar os seguintes endereços de e-mail.<BR>Preenchimento Obrigatório.<BR><BR>Informar a lista de e-mail que receberão a Nota Fiscal.<BR>Utilize a virgula (,) como separador.<BR><BR>Informação localizada na Aba "E-mail para o Cliente" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $utilizar_emails;
	/**
	 * Enviar e-mail com o boleto de cobrança gerado pelo faturamento (juntamente com o DANFE e o XML da NF-e).<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR>Default "N"<BR><BR>Informação localizada na Aba "E-mail para o Cliente" do Pedido de Venda.<BR><BR>É permitido somente o preenchimento de uma das tags "enviar_pix" ou "enviar_email
	 *
	 * @var string
	 */
	public string $enviar_email;
	/**
	 * Enviar e-mail com o PIX de cobrança gerado pelo faturamento (juntamente com o DANFE e o XML da NF-e).<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR>Default "N"<BR><BR>Informação localizada na Aba "E-mail para o Cliente" do Pedido de Venda.<BR><BR>É permitido somente o preenchimento de uma das tags "enviar_pix" ou "enviar_email
	 *
	 * @var string
	 */
	public string $enviar_pix;
	/**
	 * Código do Vendedor.<BR>Preenchimento Opcional.<BR><BR>Informação localizada no cabeçalho do Pedido de Venda.<BR><BR>Utilize a tag "codigo" do método "ListarVendedores" da API<BR>http://app.omie.com.br/api/v1/geral/vendedores/<BR>para obter essa informação.
	 *
	 * @var integer
	 */
	public int $codVend;
	/**
	 * Código do Projeto.<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Informações Adicionais" do Pedido de Venda.<BR><BR>Utilize a tag "codigo" do método "ListarProjetos" da API<BR>http://app.omie.com.br/api/v1/geral/projetos/<BR>para obter essa informação.
	 *
	 * @var integer
	 */
	public int $codProj;
	/**
	 * Outros detalhes da NF-e.<BR>Preenchimento Opcional.
	 *
	 * @var Outros_detalhes
	 */
	public Outros_detalhes $outros_detalhes;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $impostos_embutidos;
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
	 * Tipo de Documento.<BR><BR>Preenchimento opcional.<BR><BR>Lista de tipos de documentos em:<BR>/api/v1/geral/tiposdoc
	 *
	 * @var string
	 */
	public string $tipo_documento;
	/**
	 * Detalhes da NF referenciada
	 *
	 * @var NfRelacionada
	 */
	public NfRelacionada $nfRelacionada;
	/**
	 * Número Sequencial Único NSU - Para identificar vendas por cartões ou TransactionID TID - Para identificar vendas de comercio eletrônico.<BR><BR>Caso informado na estrutura "informacoes_adicionais" grava o valor como padrão para todas as parcelas geradas na integração que não tiverem esse campo preenchido a partir da estrutura "parcela".<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $nsu;
}
