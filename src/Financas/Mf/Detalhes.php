<?php

namespace OmieLib\Financas\Mf;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Mf\Request\MfListarRequest;
use OmieLib\Financas\Mf\Response\MfListarResponse;

/**
 * Detalhes do movimento financeiro.
 *
 * @pw_element integer $nCodTitulo Código do titulo.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodIntTitulo Código de integração do título.<BR>(Utilizado em títulos criados via API, não é visualizado na tela)
 * @pw_element string $cNumTitulo Número do título.<BR>(Informado pelo usuário / visualizado na tela)
 * @pw_element string $dDtEmissao Data de emissão do título.
 * @pw_element string $dDtVenc Data de vencimento do título.
 * @pw_element string $dDtPrevisao Data de previsão de Pagamento/Recebimento.
 * @pw_element string $dDtPagamento Data de pagamento do título.
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
 * @pw_element string $cCodCateg Código da Categoria.
 * @pw_element string $cNumParcela Número da parcela "Formatada" como 999/999
 * @pw_element decimal $nValorTitulo Valor do título.
 * @pw_element decimal $nValorPIS Valor do PIS.
 * @pw_element string $cRetPIS Indica que o Valor do PIS informado deve ser retido.
 * @pw_element decimal $nValorCOFINS Valor do COFINS.
 * @pw_element string $cRetCOFINS Indica que o Valor do COFINS informado deve ser retido.
 * @pw_element decimal $nValorCSLL Valor do CSLL.
 * @pw_element string $cRetCSLL Indica que o Valor do CSLL informado deve ser retido.
 * @pw_element decimal $nValorIR Valor do Imposto de Renda.
 * @pw_element string $cRetIR Indica que o Valor do Imposto de Renda  informado deve ser retido.
 * @pw_element decimal $nValorISS Valor do ISS.
 * @pw_element string $cRetISS Indica que o Valor do ISS informado deve ser retido.
 * @pw_element decimal $nValorINSS Valor do INSS.
 * @pw_element string $cRetINSS Indica que o Valor do INSS informado deve ser retido.
 * @pw_element integer $cCodProjeto Código do projeto.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $observacao Observações do título.
 * @pw_element integer $cCodVendedor Código do vendedor.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element integer $nCodComprador Código do comprador.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cCodigoBarras Código de Barras do título.
 * @pw_element string $cNSU Número Sequencial Único - Comprovante de pagamento.
 * @pw_element integer $nCodNF Código da Nota Fiscal.
 * @pw_element string $dDtRegistro Data de registro da NF.
 * @pw_element string $cNumBoleto Número do Boleto.
 * @pw_element string $cChaveNFe Chave da NF-e de origem.
 * @pw_element string $cOrigem Origem do lançamento.<BR>Pode ser:<BR><BR>APBP&nbsp;Integração de Pagamento de Conta                  <BR>APBR&nbsp;Integração de Recebimento de Conta                <BR>APEP&nbsp;Integração de Lançamento de Despesa               <BR>APER&nbsp;Integração de Lançamento de Receita               <BR>APIP&nbsp;Integração de Conta a Pagar                       <BR>APIR&nbsp;Integração de Conta a Receber                     <BR>BARP&nbsp;Conta a Pagar Importada por Código de Barras      <BR>BARR&nbsp;Conta a Receber Importada por Código de Barras    <BR>BAXP&nbsp;Pagamento de Conta a Pagar                        <BR>BAXR&nbsp;Recebimento de Conta a Receber                    <BR>COMP&nbsp;Parcela a Pagar de Compras                        <BR>DEVP&nbsp;Conta a Pagar da Devolução de Venda               <BR>DEVR&nbsp;Conta a Receber da Devolução ao Fornecedor        <BR>EXTP&nbsp;Lançamento Manual de Despesa                      <BR>EXTR&nbsp;Lançamento Manual de Receita                      <BR>IMPP&nbsp;Parcela a Pagar de uma Nota de Importação         <BR>MANP&nbsp;Lançamento Manual de Conta a Pagar                <BR>MANR&nbsp;Lançamento Manual de Conta a Receber              <BR>NFEP&nbsp;Conta a Pagar Importada de uma NF-e               <BR>NFER&nbsp;Conta a Receber Importada de uma NF-e             <BR>OFXP&nbsp;Pagamento Importado de um arquivo OFX             <BR>OFXR&nbsp;Recebimento Importado de um arquivo OFX           <BR>RPTP&nbsp;Repetição de Contas a Pagar                       <BR>RPTR&nbsp;Repetição de Contas a Receber                     <BR>TRAP&nbsp;Débito de Transf. entre Contas Correntes          <BR>TRAR&nbsp;Crédito de Transf. entre Contas Correntes         <BR>VENR&nbsp;Parcela a Receber de Vendas                       <BR>XMLP&nbsp;Conta a Pagar Importada de um arquivo XML         <BR>XMLR&nbsp;Conta a Receber Importada de um arquivo XML
 * @pw_element integer $nCodTitRepet Código do título original que gerou a repetição dos lançamentos.
 * @pw_element string $cGrupo Grupo do lançamento.
 * @pw_element integer $nCodMovCC Código do movimento de Conta Corrente.
 * @pw_element decimal $nValorMovCC Valor do movimento de Conta Corrente.
 * @pw_element integer $nCodMovCCRepet Código do movimento de repetição,
 * @pw_element decimal $nDesconto Valor do Desconto.
 * @pw_element decimal $nJuros Valor do Juros.
 * @pw_element decimal $nMulta Valor da Multa.
 * @pw_element integer $nCodBaixa Código da baixa.
 * @pw_element string $dDtCredito Data de credito.
 * @pw_element string $dDtConcilia Data da conciliação.
 * @pw_element string $cHrConcilia Hora de conciliação.
 * @pw_element string $cUsConcilia Código do usuário responsável pela conciliação
 * @pw_element string $dDtInc Data de Inclusão.
 * @pw_element string $cHrInc Hora de Inclusão.
 * @pw_element string $cUsInc Usuário da Inclusão.
 * @pw_element string $dDtAlt Data de Alteração.
 * @pw_element string $cHrAlt Hora de Alteração.
 * @pw_element string $cUsAlt Usuário de alteração.
 * @pw_complex detalhes
 */
class Detalhes{
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
	 * Data de emissão do título.
	 *
	 * @var string
	 */
	public string $dDtEmissao;
	/**
	 * Data de vencimento do título.
	 *
	 * @var string
	 */
	public string $dDtVenc;
	/**
	 * Data de previsão de Pagamento/Recebimento.
	 *
	 * @var string
	 */
	public string $dDtPrevisao;
	/**
	 * Data de pagamento do título.
	 *
	 * @var string
	 */
	public string $dDtPagamento;
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
	 * Código da Categoria.
	 *
	 * @var string
	 */
	public string $cCodCateg;
	/**
	 * Número da parcela "Formatada" como 999/999
	 *
	 * @var string
	 */
	public string $cNumParcela;
	/**
	 * Valor do título.
	 *
	 * @var decimal
	 */
	public float $nValorTitulo;
	/**
	 * Valor do PIS.
	 *
	 * @var decimal
	 */
	public float $nValorPIS;
	/**
	 * Indica que o Valor do PIS informado deve ser retido.
	 *
	 * @var string
	 */
	public string $cRetPIS;
	/**
	 * Valor do COFINS.
	 *
	 * @var decimal
	 */
	public float $nValorCOFINS;
	/**
	 * Indica que o Valor do COFINS informado deve ser retido.
	 *
	 * @var string
	 */
	public string $cRetCOFINS;
	/**
	 * Valor do CSLL.
	 *
	 * @var decimal
	 */
	public float $nValorCSLL;
	/**
	 * Indica que o Valor do CSLL informado deve ser retido.
	 *
	 * @var string
	 */
	public string $cRetCSLL;
	/**
	 * Valor do Imposto de Renda.
	 *
	 * @var decimal
	 */
	public float $nValorIR;
	/**
	 * Indica que o Valor do Imposto de Renda  informado deve ser retido.
	 *
	 * @var string
	 */
	public string $cRetIR;
	/**
	 * Valor do ISS.
	 *
	 * @var decimal
	 */
	public float $nValorISS;
	/**
	 * Indica que o Valor do ISS informado deve ser retido.
	 *
	 * @var string
	 */
	public string $cRetISS;
	/**
	 * Valor do INSS.
	 *
	 * @var decimal
	 */
	public float $nValorINSS;
	/**
	 * Indica que o Valor do INSS informado deve ser retido.
	 *
	 * @var string
	 */
	public string $cRetINSS;
	/**
	 * Código do projeto.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $cCodProjeto;
	/**
	 * Observações do título.
	 *
	 * @var string
	 */
	public string $observacao;
	/**
	 * Código do vendedor.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $cCodVendedor;
	/**
	 * Código do comprador.<BR>(Gerado internamente, não é visualizado na tela)
	 *
	 * @var integer
	 */
	public int $nCodComprador;
	/**
	 * Código de Barras do título.
	 *
	 * @var string
	 */
	public string $cCodigoBarras;
	/**
	 * Número Sequencial Único - Comprovante de pagamento.
	 *
	 * @var string
	 */
	public string $cNSU;
	/**
	 * Código da Nota Fiscal.
	 *
	 * @var integer
	 */
	public int $nCodNF;
	/**
	 * Data de registro da NF.
	 *
	 * @var string
	 */
	public string $dDtRegistro;
	/**
	 * Número do Boleto.
	 *
	 * @var string
	 */
	public string $cNumBoleto;
	/**
	 * Chave da NF-e de origem.
	 *
	 * @var string
	 */
	public string $cChaveNFe;
	/**
	 * Origem do lançamento.<BR>Pode ser:<BR><BR>APBP&nbsp;Integração de Pagamento de Conta                  <BR>APBR&nbsp;Integração de Recebimento de Conta                <BR>APEP&nbsp;Integração de Lançamento de Despesa               <BR>APER&nbsp;Integração de Lançamento de Receita               <BR>APIP&nbsp;Integração de Conta a Pagar                       <BR>APIR&nbsp;Integração de Conta a Receber                     <BR>BARP&nbsp;Conta a Pagar Importada por Código de Barras      <BR>BARR&nbsp;Conta a Receber Importada por Código de Barras    <BR>BAXP&nbsp;Pagamento de Conta a Pagar                        <BR>BAXR&nbsp;Recebimento de Conta a Receber                    <BR>COMP&nbsp;Parcela a Pagar de Compras                        <BR>DEVP&nbsp;Conta a Pagar da Devolução de Venda               <BR>DEVR&nbsp;Conta a Receber da Devolução ao Fornecedor        <BR>EXTP&nbsp;Lançamento Manual de Despesa                      <BR>EXTR&nbsp;Lançamento Manual de Receita                      <BR>IMPP&nbsp;Parcela a Pagar de uma Nota de Importação         <BR>MANP&nbsp;Lançamento Manual de Conta a Pagar                <BR>MANR&nbsp;Lançamento Manual de Conta a Receber              <BR>NFEP&nbsp;Conta a Pagar Importada de uma NF-e               <BR>NFER&nbsp;Conta a Receber Importada de uma NF-e             <BR>OFXP&nbsp;Pagamento Importado de um arquivo OFX             <BR>OFXR&nbsp;Recebimento Importado de um arquivo OFX           <BR>RPTP&nbsp;Repetição de Contas a Pagar                       <BR>RPTR&nbsp;Repetição de Contas a Receber                     <BR>TRAP&nbsp;Débito de Transf. entre Contas Correntes          <BR>TRAR&nbsp;Crédito de Transf. entre Contas Correntes         <BR>VENR&nbsp;Parcela a Receber de Vendas                       <BR>XMLP&nbsp;Conta a Pagar Importada de um arquivo XML         <BR>XMLR&nbsp;Conta a Receber Importada de um arquivo XML
	 *
	 * @var string
	 */
	public string $cOrigem;
	/**
	 * Código do título original que gerou a repetição dos lançamentos.
	 *
	 * @var integer
	 */
	public int $nCodTitRepet;
	/**
	 * Grupo do lançamento.
	 *
	 * @var string
	 */
	public string $cGrupo;
	/**
	 * Código do movimento de Conta Corrente.
	 *
	 * @var integer
	 */
	public int $nCodMovCC;
	/**
	 * Valor do movimento de Conta Corrente.
	 *
	 * @var decimal
	 */
	public float $nValorMovCC;
	/**
	 * Código do movimento de repetição,
	 *
	 * @var integer
	 */
	public int $nCodMovCCRepet;
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
	 * Código da baixa.
	 *
	 * @var integer
	 */
	public int $nCodBaixa;
	/**
	 * Data de credito.
	 *
	 * @var string
	 */
	public string $dDtCredito;
	/**
	 * Data da conciliação.
	 *
	 * @var string
	 */
	public string $dDtConcilia;
	/**
	 * Hora de conciliação.
	 *
	 * @var string
	 */
	public string $cHrConcilia;
	/**
	 * Código do usuário responsável pela conciliação
	 *
	 * @var string
	 */
	public string $cUsConcilia;
	/**
	 * Data de Inclusão.
	 *
	 * @var string
	 */
	public string $dDtInc;
	/**
	 * Hora de Inclusão.
	 *
	 * @var string
	 */
	public string $cHrInc;
	/**
	 * Usuário da Inclusão.
	 *
	 * @var string
	 */
	public string $cUsInc;
	/**
	 * Data de Alteração.
	 *
	 * @var string
	 */
	public string $dDtAlt;
	/**
	 * Hora de Alteração.
	 *
	 * @var string
	 */
	public string $cHrAlt;
	/**
	 * Usuário de alteração.
	 *
	 * @var string
	 */
	public string $cUsAlt;
}
