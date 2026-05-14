<?php

namespace OmieLib\Financas\Contacorrentelancamentos\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Financas\Contacorrentelancamentos\ACodCateg;
use OmieLib\Financas\Contacorrentelancamentos\Cabecalho;
use OmieLib\Financas\Contacorrentelancamentos\ContaCorrenteLancamentosJsonClient;
use OmieLib\Financas\Contacorrentelancamentos\Departamentos;
use OmieLib\Financas\Contacorrentelancamentos\Detalhes;
use OmieLib\Financas\Contacorrentelancamentos\Diversos;
use OmieLib\Financas\Contacorrentelancamentos\Info;
use OmieLib\Financas\Contacorrentelancamentos\ListaLancamentos;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccAlterarResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccConsultarResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccExcluirResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccIncluirResponse;
use OmieLib\Financas\Contacorrentelancamentos\Response\LanccListarResponse;
use OmieLib\Financas\Contacorrentelancamentos\Transferencia;

/**
 * Solicitação de listagem de lançamentos da conta corrente
 *
 * @pw_element integer $nPagina Número da página resgatada.
 * @pw_element integer $nRegPorPagina Número de registros retornados na página.
 * @pw_element string $cOrdenarPor Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $cOrdemDecrescente Indica se a ordem de exibição é decrescente caso seja informado "S".
 * @pw_element string $cOrigem Origem do lançamento<BR><BR>Pode ser:<BR><BR>DEVP  - Conta a pagar da devolução de venda               <BR>DEVR - Conta a receber da devolução ao fornecedor        <BR>EXTP - Lançamento manual de despesa                      <BR>EXTR - Lançamento manual de receita                      <BR>IMPP - Parcela a pagar de uma nota de importação         <BR>MANP - Lançamento manual de conta a pagar                <BR>MANR - Lançamento manual de conta a receber              <BR>NFEP - Conta a pagar importada de uma NF-e               <BR>NFER - Conta a receber importada de uma NF-e             <BR>OFXP- Pagamento importado de um arquivo OFX             <BR>OFXR - Recebimento importado de um arquivo OFX           <BR>RPTP - Repetição de contas a pagar                       <BR>RPTR - Repetição de contas a receber                     <BR>TRAP - Débito de transferência entre contas correntes          <BR>TRAR - Crédito de transferência entre contas correntes         <BR>VENR - Parcela a receber de vendas                       <BR>XMLP - Conta a pagar importada de um arquivo XML         <BR>XMLR - Conta a receber importada de um arquivo XML
 * @pw_element string $dDtIncDe Data de inclusão inicial.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dDtIncAte Data de inclusão final.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dDtAltDe Data de alteração inicial.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dDtAltAte Data de alteração final.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dtPagInicial Filtra os registros a partir da data
 * @pw_element string $dtPagFinal Filtra os registros até a data especificada
 * @pw_complex lanccListarRequest
 */
class LanccListarRequest{
	/**
	 * Número da página resgatada.
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
	 * Ordem de exibição dos dados. Padrão: Código.
	 *
	 * @var string
	 */
	public string $cOrdenarPor;
	/**
	 * Indica se a ordem de exibição é decrescente caso seja informado "S".
	 *
	 * @var string
	 */
	public string $cOrdemDecrescente;
	/**
	 * Origem do lançamento<BR><BR>Pode ser:<BR><BR>DEVP  - Conta a pagar da devolução de venda               <BR>DEVR - Conta a receber da devolução ao fornecedor        <BR>EXTP - Lançamento manual de despesa                      <BR>EXTR - Lançamento manual de receita                      <BR>IMPP - Parcela a pagar de uma nota de importação         <BR>MANP - Lançamento manual de conta a pagar                <BR>MANR - Lançamento manual de conta a receber              <BR>NFEP - Conta a pagar importada de uma NF-e               <BR>NFER - Conta a receber importada de uma NF-e             <BR>OFXP- Pagamento importado de um arquivo OFX             <BR>OFXR - Recebimento importado de um arquivo OFX           <BR>RPTP - Repetição de contas a pagar                       <BR>RPTR - Repetição de contas a receber                     <BR>TRAP - Débito de transferência entre contas correntes          <BR>TRAR - Crédito de transferência entre contas correntes         <BR>VENR - Parcela a receber de vendas                       <BR>XMLP - Conta a pagar importada de um arquivo XML         <BR>XMLR - Conta a receber importada de um arquivo XML
	 *
	 * @var string
	 */
	public string $cOrigem;
	/**
	 * Data de inclusão inicial.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtIncDe;
	/**
	 * Data de inclusão final.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtIncAte;
	/**
	 * Data de alteração inicial.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtAltDe;
	/**
	 * Data de alteração final.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtAltAte;
	/**
	 * Filtra os registros a partir da data
	 *
	 * @var string
	 */
	public string $dtPagInicial;
	/**
	 * Filtra os registros até a data especificada
	 *
	 * @var string
	 */
	public string $dtPagFinal;
}
