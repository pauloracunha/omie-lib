<?php

namespace OmieLib\Financas\Pesquisartitulos\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Pesquisartitulos\ACodCateg;
use OmieLib\Financas\Pesquisartitulos\CabecTitulo;
use OmieLib\Financas\Pesquisartitulos\Departamentos;
use OmieLib\Financas\Pesquisartitulos\Info;
use OmieLib\Financas\Pesquisartitulos\Lancamentos;
use OmieLib\Financas\Pesquisartitulos\PesquisarTitulosJsonClient;
use OmieLib\Financas\Pesquisartitulos\Response\LtLinkBoletoResponse;
use OmieLib\Financas\Pesquisartitulos\Response\LtListarExcluidosResponse;
use OmieLib\Financas\Pesquisartitulos\Response\LtPesquisarResponse;
use OmieLib\Financas\Pesquisartitulos\Resumo;
use OmieLib\Financas\Pesquisartitulos\TitulosEncontrados;
use OmieLib\Financas\Pesquisartitulos\TitulosExcluidos;

/**
 * Solicitação de Listagem de Contas a Receber
 *
 * @pw_element integer $nPagina Número da página retornada
 * @pw_element integer $nRegPorPagina Número de registros retornados na página.
 * @pw_element string $cOrdenarPor Ordem de exibição do dados.<BR>Pode ser:<BR>CODIGO<BR>CODIGO_INTEGRACAO
 * @pw_element string $cOrdemDecrescente Se a lista será apresentada em ordem decrescente.
 * @pw_element integer $nCodTitulo Código do titulo.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodIntTitulo Código de integração do título.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
 * @pw_element string $cNumTitulo Número do título.<BR>(Informado pelo usuário / visualizado na tela)
 * @pw_element string $dDtEmisDe Filtrar os títulos pela data de emissão - até.
 * @pw_element string $dDtEmisAte Filtrar os títulos pela data de emissão - até.
 * @pw_element string $dDtVencDe Data de vencimento do título.
 * @pw_element string $dDtVencAte Data de vencimento do título.
 * @pw_element string $dDtPagtoDe Data do Lançamento
 * @pw_element string $dDtPagtoAte Data do Lançamento
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
 * @pw_element string $cTipo Tipo de documento.<BR>Pode ser:<BR>ADI - Adiantamento                                      <BR>BOL - Boleto                                            <BR>CRT - Cartão                                            <BR>CHQ - Cheque                                            <BR>CON - Convênios                                         <BR>CRE - Crediário                                         <BR>DRF - DARF                                              <BR>DAS - DAS                                               <BR>DEB - Débito em conta                                   <BR>DIN - Dinheiro                                          <BR>DOC - DOC                                               <BR>GUIA - Guia de Recolhimento                              <BR>PROT - Protesto                                          <BR>REC - Recibo                                            <BR>RPA - RPA                                               <BR>TED - TED                                               <BR>TRA - Transferência                                    <BR>99999 - Outros                                            <BR>
 * @pw_element string $cOperacao Operação do título.<BR>Pode ser:<BR>01 - Venda de Serviço<BR>11 - Venda de Produto<BR>12 - Venda de Produto pelo PDV<BR>13 - Devolução de Venda <BR>14 - Remessa de Produto            <BR>16 - Nota Complementar de Saída    <BR>21 - Compra de Produto<BR>22 - Compra de Produto (Importação)<BR>23 - Devolução ao Fornecedor<BR>24 - Retorno de Remessa<BR>26 - Nota Complementar de Entrada<BR>28 - Ordem de Produção
 * @pw_element string $cNumDocFiscal Número do documento fiscal (NF-e, NFC-e, NFS-e, etc)<BR>(Informado pelo usuário / visualizado na tela)
 * @pw_element string $cCodigoBarras Código de Barras do título.
 * @pw_element integer $nCodProjeto Código do projeto.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element integer $nCodVendedor Código do vendedor.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element integer $nCodComprador Código do comprador.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodCateg Código da categoria.
 * @pw_element string $dDtIncDe Data da Inclusão.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dDtIncAte Data da Inclusão.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dDtAltDe Data da Alteração.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dDtAltAte Data da Alteração.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dDtCancDe Data de Cancelamento do título.
 * @pw_element string $dDtCancAte Data de Cancelamento do título.
 * @pw_element string $cChaveNFe Chave da NF-e, CT-e, NFC-e de origem.
 * @pw_element boolean $lDadosCad Exibir dados cadastrais como Data de Inclusão, Alteração do Título.<BR><BR>Pode ser:<BR><BR>true<BR>false<BR><BR>Default false.
 * @pw_complex ltPesquisarRequest
 */
class LtPesquisarRequest{
	/**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados na página.
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
	 * Se a lista será apresentada em ordem decrescente.
	 *
	 * @var string
	 */
	public string $cOrdemDecrescente;
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
	 * Filtrar os títulos pela data de emissão - até.
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
	 * Data do Lançamento
	 *
	 * @var string
	 */
	public string $dDtPagtoDe;
	/**
	 * Data do Lançamento
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
	 * Tipo de documento.<BR>Pode ser:<BR>ADI - Adiantamento                                      <BR>BOL - Boleto                                            <BR>CRT - Cartão                                            <BR>CHQ - Cheque                                            <BR>CON - Convênios                                         <BR>CRE - Crediário                                         <BR>DRF - DARF                                              <BR>DAS - DAS                                               <BR>DEB - Débito em conta                                   <BR>DIN - Dinheiro                                          <BR>DOC - DOC                                               <BR>GUIA - Guia de Recolhimento                              <BR>PROT - Protesto                                          <BR>REC - Recibo                                            <BR>RPA - RPA                                               <BR>TED - TED                                               <BR>TRA - Transferência                                    <BR>99999 - Outros                                            <BR>
	 *
	 * @var string
	 */
	public string $cTipo;
	/**
	 * Operação do título.<BR>Pode ser:<BR>01 - Venda de Serviço<BR>11 - Venda de Produto<BR>12 - Venda de Produto pelo PDV<BR>13 - Devolução de Venda <BR>14 - Remessa de Produto            <BR>16 - Nota Complementar de Saída    <BR>21 - Compra de Produto<BR>22 - Compra de Produto (Importação)<BR>23 - Devolução ao Fornecedor<BR>24 - Retorno de Remessa<BR>26 - Nota Complementar de Entrada<BR>28 - Ordem de Produção
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
	 * Código da categoria.
	 *
	 * @var string
	 */
	public string $cCodCateg;
	/**
	 * Data da Inclusão.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtIncDe;
	/**
	 * Data da Inclusão.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtIncAte;
	/**
	 * Data da Alteração.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtAltDe;
	/**
	 * Data da Alteração.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtAltAte;
	/**
	 * Data de Cancelamento do título.
	 *
	 * @var string
	 */
	public string $dDtCancDe;
	/**
	 * Data de Cancelamento do título.
	 *
	 * @var string
	 */
	public string $dDtCancAte;
	/**
	 * Chave da NF-e, CT-e, NFC-e de origem.
	 *
	 * @var string
	 */
	public string $cChaveNFe;
	/**
	 * Exibir dados cadastrais como Data de Inclusão, Alteração do Título.<BR><BR>Pode ser:<BR><BR>true<BR>false<BR><BR>Default false.
	 *
	 * @var boolean
	 */
	public bool $lDadosCad;
}
