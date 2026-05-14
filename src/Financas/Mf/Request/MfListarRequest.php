<?php

namespace OmieLib\Financas\Mf\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Mf\Categorias;
use OmieLib\Financas\Mf\Departamentos;
use OmieLib\Financas\Mf\Detalhes;
use OmieLib\Financas\Mf\Movimentos;
use OmieLib\Financas\Mf\MovimentosFinanceirosJsonClient;
use OmieLib\Financas\Mf\Response\MfListarResponse;
use OmieLib\Financas\Mf\Resumo;

/**
 * Solicitação de Listagem da movimentação financeira (Contas a Pagar, Contas a Receber e Lançamentos do Conta Corrente).
 *
 * @pw_element integer $nPagina Número da página que será listada.
 * @pw_element integer $nRegPorPagina Número de registros retornados
 * @pw_element string $cOrdenarPor Ordem de exibição do dados.<BR>Pode ser:<BR>CODIGO<BR>CODIGO_INTEGRACAO
 * @pw_element string $cOrdemDecrescente DEPRECATED
 * @pw_element boolean $lDadosCad Exibir dados cadastrais como Data de Inclusão, Alteração do Título e Observações (S/N)?<BR><BR>
 * @pw_element integer $nCodTitulo Código do titulo.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodIntTitulo Código de integração do título.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
 * @pw_element string $cNumTitulo Número do título.<BR>(Informado pelo usuário / visualizado na tela)
 * @pw_element string $dDtEmisDe Filtrar os títulos pela data de emissão - a partir de.
 * @pw_element string $dDtEmisAte Filtrar os títulos pela data de emissão - até.
 * @pw_element string $dDtVencDe Data de vencimento do título.
 * @pw_element string $dDtVencAte Data de vencimento do título.
 * @pw_element string $dDtPagtoDe Filtrar os títulos pela data de pagamento - a partir de.
 * @pw_element string $dDtPagtoAte Filtrar os títulos pela data de pagamento - até.
 * @pw_element string $dDtPrevDe Data de previsão de Pagamento/Recebimento.
 * @pw_element string $dDtPrevAte Data de previsão de Pagamento/Recebimento.
 * @pw_element string $dDtRegDe Data de registro da NF.
 * @pw_element string $dDtRegAte Data de registro da NF.
 * @pw_element integer $nCodCliente Código de Cliente / Fornecedor.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCPFCNPJCliente Filtrar os títulos por CPF/CNPJ do cliente.
 * @pw_element integer $nCodCtr Código do contrato associado ao título.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cNumCtr Número do contrato associado ao título.<BR>(Informado pelo usuário / visualizado na tela)
 * @pw_element integer $nCodOS Código do Pedido de Venda / Ordem de Serviço.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cNumOS Número do pedido de venda / Ordem de Serviço.<BR>(visualizado na tela)
 * @pw_element integer $nCodCC Código da conta corrente.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cStatus Status do título.<BR>Pode ser:<BR>CANCELADO<BR>RECEBIDO<BR>LIQUIDADO<BR>EMABERTO<BR>PAGTO_PARCIAL<BR>VENCEHOJE<BR>AVENCER<BR>ATRASADO
 * @pw_element string $cNatureza Natureza do título.<BR>Pode ser:<BR>P - Contas a Pagar<BR>R - Contas a Receber<BR>
 * @pw_element string $cTipo Tipo de documento.<BR>Pode ser:<BR>ADI - Adiantamento                                      <BR>BOL - Boleto                                            <BR>CRT - Cartão                                            <BR>CHQ - Cheque                                            <BR>CON - Convênios                                         <BR>CRE - Crediário                                         <BR>DRF - DARF                                              <BR>DAS - DAS                                               <BR>DEB - Débito em conta                                   <BR>DIN - Dinheiro                                          <BR>DOC - DOC                                               <BR>GUIA - Guia de Recolhimento                              <BR>PROT - Protesto                                          <BR>REC - Recibo                                            <BR>RPA - RPA                                               <BR>TED - TED                                               <BR>TRA - Transferência                                    <BR>99999 - Outros      <BR><BR>Utilize a tag 'codigo' do método 'PesquisarTipoDocumento' da API:<BR>https://app.omie.com.br/api/v1/geral/tiposdoc/<BR>para obter essa informação.                                      <BR>
 * @pw_element string $cOperacao Operação do título.<BR>Pode ser:<BR>01 - Venda de Serviço<BR>11 - Venda de Produto<BR>12 - Venda de Produto pelo PDV<BR>13 - Devolução de Venda <BR>14 - Remessa de Produto            <BR>16 - Transferência<BR>21 - Compra de Produto<BR>23 - Devolução ao Fornecedor       &nbsp;<BR>24 - Retorno de Remessa            &nbsp;<BR>26 - Nota Complementar de Entrada  &nbsp;<BR>22 - Compra de Produto (Importação)&nbsp;<BR>28 - Ordem de Produção
 * @pw_element string $cNumDocFiscal Número do documento fiscal (NF-e, NFC-e, NFS-e, etc)<BR>(Informado pelo usuário / visualizado na tela)
 * @pw_element string $cCodigoBarras Código de Barras do título.
 * @pw_element integer $nCodProjeto Código do projeto.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element integer $nCodVendedor Código do vendedor.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element integer $nCodComprador Código do comprador.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodCateg Código da Categoria.
 * @pw_element string $dDtIncDe Data de inclusão
 * @pw_element string $dDtIncAte Data de inclusão
 * @pw_element string $dDtAltDe Data de alteração
 * @pw_element string $dDtAltAte Data de alteração
 * @pw_element string $cTpLancamento Tipo de registro que será exibido. <BR>Pode ser:<BR>CP - Lançamentos de Contas a Pagar.<BR>CR - Lançamentos de Contas a Receber.<BR>CPCR - Lançamentos de Contas a Pagar e Receber.<BR>BX - Baixas de lançamentos de Contas a Pagar e Receber.<BR>BXCP - Baixas de lançamentos de Contas a Pagar.<BR>BXCR - Baixas de lançamentos de Contas a Receber.<BR>CC - Lançamentos (todos) no Conta Corrente.<BR>CCE - Lançamentos de entrada no Conta Corrente.<BR>CCS - Lançamentos de saída no Conta Corrente.<BR>CCT - Lançamentos de transferência no Conta Corrente.<BR>PV - Previsão de Contratos de Serviço.<BR>POS - Previsão de Ordens de Serviço.<BR>PPV - Previsão de Pedidos de Venda.
 * @pw_element string $cExibirDepartamentos Exibir distribuição por departamentos (S/N).
 * @pw_element integer $nCodMovCC Código do movimento de Conta Corrente.
 * @pw_complex mfListarRequest
 */
class MfListarRequest{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
	/**
	 * Ordem de exibição do dados.<BR>Pode ser:<BR>CODIGO<BR>CODIGO_INTEGRACAO
	 *
	 * @var string
	 */
	public string $cOrdenarPor;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $cOrdemDecrescente;
	/**
	 * Exibir dados cadastrais como Data de Inclusão, Alteração do Título e Observações (S/N)?<BR><BR>
	 *
	 * @var boolean
	 */
	public bool $lDadosCad;
	/**
	 * Código do titulo.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodTitulo;
	/**
	 * Código de integração do título.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
	 *
	 * @var string
	 */
	public string $cCodIntTitulo;
	/**
	 * Número do título.<BR>(Informado pelo usuário / visualizado na tela)
	 *
	 * @var string
	 */
	public string $cNumTitulo;
	/**
	 * Filtrar os títulos pela data de emissão - a partir de.
	 *
	 * @var string
	 */
	public string $dDtEmisDe;
	/**
	 * Filtrar os títulos pela data de emissão - até.
	 *
	 * @var string
	 */
	public string $dDtEmisAte;
	/**
	 * Data de vencimento do título.
	 *
	 * @var string
	 */
	public string $dDtVencDe;
	/**
	 * Data de vencimento do título.
	 *
	 * @var string
	 */
	public string $dDtVencAte;
	/**
	 * Filtrar os títulos pela data de pagamento - a partir de.
	 *
	 * @var string
	 */
	public string $dDtPagtoDe;
	/**
	 * Filtrar os títulos pela data de pagamento - até.
	 *
	 * @var string
	 */
	public string $dDtPagtoAte;
	/**
	 * Data de previsão de Pagamento/Recebimento.
	 *
	 * @var string
	 */
	public string $dDtPrevDe;
	/**
	 * Data de previsão de Pagamento/Recebimento.
	 *
	 * @var string
	 */
	public string $dDtPrevAte;
	/**
	 * Data de registro da NF.
	 *
	 * @var string
	 */
	public string $dDtRegDe;
	/**
	 * Data de registro da NF.
	 *
	 * @var string
	 */
	public string $dDtRegAte;
	/**
	 * Código de Cliente / Fornecedor.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodCliente;
	/**
	 * Filtrar os títulos por CPF/CNPJ do cliente.
	 *
	 * @var string
	 */
	public string $cCPFCNPJCliente;
	/**
	 * Código do contrato associado ao título.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodCtr;
	/**
	 * Número do contrato associado ao título.<BR>(Informado pelo usuário / visualizado na tela)
	 *
	 * @var string
	 */
	public string $cNumCtr;
	/**
	 * Código do Pedido de Venda / Ordem de Serviço.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodOS;
	/**
	 * Número do pedido de venda / Ordem de Serviço.<BR>(visualizado na tela)
	 *
	 * @var string
	 */
	public string $cNumOS;
	/**
	 * Código da conta corrente.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodCC;
	/**
	 * Status do título.<BR>Pode ser:<BR>CANCELADO<BR>RECEBIDO<BR>LIQUIDADO<BR>EMABERTO<BR>PAGTO_PARCIAL<BR>VENCEHOJE<BR>AVENCER<BR>ATRASADO
	 *
	 * @var string
	 */
	public string $cStatus;
	/**
	 * Natureza do título.<BR>Pode ser:<BR>P - Contas a Pagar<BR>R - Contas a Receber<BR>
	 *
	 * @var string
	 */
	public string $cNatureza;
	/**
	 * Tipo de documento.<BR>Pode ser:<BR>ADI - Adiantamento                                      <BR>BOL - Boleto                                            <BR>CRT - Cartão                                            <BR>CHQ - Cheque                                            <BR>CON - Convênios                                         <BR>CRE - Crediário                                         <BR>DRF - DARF                                              <BR>DAS - DAS                                               <BR>DEB - Débito em conta                                   <BR>DIN - Dinheiro                                          <BR>DOC - DOC                                               <BR>GUIA - Guia de Recolhimento                              <BR>PROT - Protesto                                          <BR>REC - Recibo                                            <BR>RPA - RPA                                               <BR>TED - TED                                               <BR>TRA - Transferência                                    <BR>99999 - Outros      <BR><BR>Utilize a tag 'codigo' do método 'PesquisarTipoDocumento' da API:<BR>https://app.omie.com.br/api/v1/geral/tiposdoc/<BR>para obter essa informação.                                      <BR>
	 *
	 * @var string
	 */
	public string $cTipo;
	/**
	 * Operação do título.<BR>Pode ser:<BR>01 - Venda de Serviço<BR>11 - Venda de Produto<BR>12 - Venda de Produto pelo PDV<BR>13 - Devolução de Venda <BR>14 - Remessa de Produto            <BR>16 - Transferência<BR>21 - Compra de Produto<BR>23 - Devolução ao Fornecedor       &nbsp;<BR>24 - Retorno de Remessa            &nbsp;<BR>26 - Nota Complementar de Entrada  &nbsp;<BR>22 - Compra de Produto (Importação)&nbsp;<BR>28 - Ordem de Produção
	 *
	 * @var string
	 */
	public string $cOperacao;
	/**
	 * Número do documento fiscal (NF-e, NFC-e, NFS-e, etc)<BR>(Informado pelo usuário / visualizado na tela)
	 *
	 * @var string
	 */
	public string $cNumDocFiscal;
	/**
	 * Código de Barras do título.
	 *
	 * @var string
	 */
	public string $cCodigoBarras;
	/**
	 * Código do projeto.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodProjeto;
	/**
	 * Código do vendedor.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodVendedor;
	/**
	 * Código do comprador.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodComprador;
	/**
	 * Código da Categoria.
	 *
	 * @var string
	 */
	public string $cCodCateg;
	/**
	 * Data de inclusão
	 *
	 * @var string
	 */
	public string $dDtIncDe;
	/**
	 * Data de inclusão
	 *
	 * @var string
	 */
	public string $dDtIncAte;
	/**
	 * Data de alteração
	 *
	 * @var string
	 */
	public string $dDtAltDe;
	/**
	 * Data de alteração
	 *
	 * @var string
	 */
	public string $dDtAltAte;
	/**
	 * Tipo de registro que será exibido. <BR>Pode ser:<BR>CP - Lançamentos de Contas a Pagar.<BR>CR - Lançamentos de Contas a Receber.<BR>CPCR - Lançamentos de Contas a Pagar e Receber.<BR>BX - Baixas de lançamentos de Contas a Pagar e Receber.<BR>BXCP - Baixas de lançamentos de Contas a Pagar.<BR>BXCR - Baixas de lançamentos de Contas a Receber.<BR>CC - Lançamentos (todos) no Conta Corrente.<BR>CCE - Lançamentos de entrada no Conta Corrente.<BR>CCS - Lançamentos de saída no Conta Corrente.<BR>CCT - Lançamentos de transferência no Conta Corrente.<BR>PV - Previsão de Contratos de Serviço.<BR>POS - Previsão de Ordens de Serviço.<BR>PPV - Previsão de Pedidos de Venda.
	 *
	 * @var string
	 */
	public string $cTpLancamento;
	/**
	 * Exibir distribuição por departamentos (S/N).
	 *
	 * @var string
	 */
	public string $cExibirDepartamentos;
	/**
	 * Código do movimento de Conta Corrente.
	 *
	 * @var integer
	 */
	public int $nCodMovCC;
}
