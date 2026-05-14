<?php

namespace OmieLib\Financas\Contacorrentelancamentos;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccAlterarRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccConsultarRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccExcluirRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccIncluirRequest;
use OmieLib\Financas\Contacorrentelancamentos\Request\LanccListarRequest;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccAlterarResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccConsultarResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccExcluirResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccIncluirResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccListarResponse;

/**
 * Outras informações
 *
 * @pw_element string $cOrigem Origem do lançamento<BR><BR>Pode ser:<BR><BR>DEVP  - Conta a pagar da devolução de venda               <BR>DEVR - Conta a receber da devolução ao fornecedor        <BR>EXTP - Lançamento manual de despesa                      <BR>EXTR - Lançamento manual de receita                      <BR>IMPP - Parcela a pagar de uma nota de importação         <BR>MANP - Lançamento manual de conta a pagar                <BR>MANR - Lançamento manual de conta a receber              <BR>NFEP - Conta a pagar importada de uma NF-e               <BR>NFER - Conta a receber importada de uma NF-e             <BR>OFXP- Pagamento importado de um arquivo OFX             <BR>OFXR - Recebimento importado de um arquivo OFX           <BR>RPTP - Repetição de contas a pagar                       <BR>RPTR - Repetição de contas a receber                     <BR>TRAP - Débito de transferência entre contas correntes          <BR>TRAR - Crédito de transferência entre contas correntes         <BR>VENR - Parcela a receber de vendas                       <BR>XMLP - Conta a pagar importada de um arquivo XML         <BR>XMLR - Conta a receber importada de um arquivo XML
 * @pw_element string $dDtConc Data da conciliação do lançamento na conta corrente<BR>No formato dd/mm/aaaa.<BR>
 * @pw_element string $cHrConc Hora da conciliação do lançamento na conta corrente
 * @pw_element string $cUsConc Código do usuário responsável pela conciliação
 * @pw_element integer $nCodVendedor Código do vendedor.<BR>(Gerado internamente, não é visualizado na tela)<BR>
 * @pw_element integer $nCodComprador Código do comprador.<BR>(Gerado internamente, não é visualizado na tela)
 * @pw_element string $cNatureza Natureza do lançamento.<BR><BR>Pode ser:<BR><BR>P - Contas a pagar<BR>R - Contas a receber
 * @pw_element string $cIdentLanc Identificação do lançamento do extrato importado
 * @pw_element integer $nCodLancCP Código do lançamento de contas a pagar que gerou o lançamento de conta corrente
 * @pw_element integer $nCodLancCR Código do lançamento de contas a receber que gerou o lançamento de conta corrente
 * @pw_complex diversos
 */
class Diversos{
	/**
	 * Origem do lançamento<BR><BR>Pode ser:<BR><BR>DEVP  - Conta a pagar da devolução de venda               <BR>DEVR - Conta a receber da devolução ao fornecedor        <BR>EXTP - Lançamento manual de despesa                      <BR>EXTR - Lançamento manual de receita                      <BR>IMPP - Parcela a pagar de uma nota de importação         <BR>MANP - Lançamento manual de conta a pagar                <BR>MANR - Lançamento manual de conta a receber              <BR>NFEP - Conta a pagar importada de uma NF-e               <BR>NFER - Conta a receber importada de uma NF-e             <BR>OFXP- Pagamento importado de um arquivo OFX             <BR>OFXR - Recebimento importado de um arquivo OFX           <BR>RPTP - Repetição de contas a pagar                       <BR>RPTR - Repetição de contas a receber                     <BR>TRAP - Débito de transferência entre contas correntes          <BR>TRAR - Crédito de transferência entre contas correntes         <BR>VENR - Parcela a receber de vendas                       <BR>XMLP - Conta a pagar importada de um arquivo XML         <BR>XMLR - Conta a receber importada de um arquivo XML
	 *
	 * @var string
	 */
	public string $cOrigem;
	/**
	 * Data da conciliação do lançamento na conta corrente<BR>No formato dd/mm/aaaa.<BR>
	 *
	 * @var string
	 */
	public string $dDtConc;
	/**
	 * Hora da conciliação do lançamento na conta corrente
	 *
	 * @var string
	 */
	public string $cHrConc;
	/**
	 * Código do usuário responsável pela conciliação
	 *
	 * @var string
	 */
	public string $cUsConc;
	/**
	 * Código do vendedor.<BR>(Gerado internamente, não é visualizado na tela)<BR>
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
	 * Natureza do lançamento.<BR><BR>Pode ser:<BR><BR>P - Contas a pagar<BR>R - Contas a receber
	 *
	 * @var string
	 */
	public string $cNatureza;
	/**
	 * Identificação do lançamento do extrato importado
	 *
	 * @var string
	 */
	public string $cIdentLanc;
	/**
	 * Código do lançamento de contas a pagar que gerou o lançamento de conta corrente
	 *
	 * @var integer
	 */
	public int $nCodLancCP;
	/**
	 * Código do lançamento de contas a receber que gerou o lançamento de conta corrente
	 *
	 * @var integer
	 */
	public int $nCodLancCR;
}
