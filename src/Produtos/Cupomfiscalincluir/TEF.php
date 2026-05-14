<?php

namespace OmieLib\Produtos\Cupomfiscalincluir;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfFecharCaixaRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirEcfRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirNfceRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirRpsRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfIncluirSatRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Request\CfInutilizarNfceRequest;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfFecharCaixaResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirEcfResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirNfceResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirRpsResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfIncluirSatResponse;
use OmieLib\Produtos\Cupomfiscalincluir\Response\CfInutilizarNfceResponse;

/**
 * Informações do TEF.
 *
 * @pw_element string $dTransacao Data da transação.<BR><BR>Preenchimento opcional.
 * @pw_element string $hTransacao Hora da transação.<BR><BR>Preenchimento opcional.
 * @pw_element string $cBandeiraTef Descrição da bandeira do cartão.<BR><BR>Exemplos:<BR>VISA CREDITO<BR>VISA ELECTRO<BR>ELO DEBITO  <BR>ELO CREDITO <BR>ALIMENTACAO <BR>MAESTRO     <BR>MASTERCARD  <BR>POLICARD<BR><BR>Preenchimento opcional.
 * @pw_element string $NSU NSU (Número Sequencial Único) identifica uma operação de venda. <BR><BR>Permite que o processo de conciliação de cartões seja realizado de forma mais assertiva, pois identifica os movimentos registrados pelos adquirentes / subadquirentes possibilitando o cruzamento dos dados com os cupons fiscais.<BR><BR>Para vendas realizadas pelo sistema TEF, o NSU é armazenado automaticamente pelo seu PDV.<BR><BR>Para vendas realizadas pelo sistema POS, o NSU pode ser informado manualmente. Verifique com o seu PDV se esse recurso está disponível.<BR><BR>Preenchimento opcional.
 * @pw_element string $NSUHost NSU (Número Sequencial Único) Identifica uma operação de venda no host.<BR><BR>Preenchimento opcional.
 * @pw_element string $TID TID (Transaction ID) identifica uma transação realizada via e-commerce pelo adquirente / subadquirente. <BR><BR>Essa informação será obtida automaticamente pelo seu PDV, quando se tratar de uma venda via e-commerce.<BR><BR>Preenchimento opcional.
 * @pw_element string $nNumeroAut Número da autorização.<BR><BR>Preenchimento opcional.
 * @pw_element integer $nParcTef Número de parcelas.<BR><BR>Preenchimento opcional.
 * @pw_element string $cRedeTef Descrição da rede de pagamento ou adquirente.<BR><BR>Exemplos:<BR>REDECARD      <BR>STONE       <BR>VISANET    <BR>BCARD       <BR>CIELO      <BR><BR>Preenchimento opcional.
 * @pw_element decimal $nValorAut Valor autorizado.<BR><BR>Preenchimento opcional.
 * @pw_element string $cTipoCartao Tipo de cartão (Débito ou Crédito)<BR><BR>Pode ser:<BR>"D" - para Débito.<BR>"C" - para Crédito.<BR><BR>Preenchimento opcional.
 * @pw_complex TEF
 */
class TEF{
	/**
	 * Data da transação.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dTransacao;
	/**
	 * Hora da transação.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $hTransacao;
	/**
	 * Descrição da bandeira do cartão.<BR><BR>Exemplos:<BR>VISA CREDITO<BR>VISA ELECTRO<BR>ELO DEBITO  <BR>ELO CREDITO <BR>ALIMENTACAO <BR>MAESTRO     <BR>MASTERCARD  <BR>POLICARD<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $cBandeiraTef;
	/**
	 * NSU (Número Sequencial Único) identifica uma operação de venda. <BR><BR>Permite que o processo de conciliação de cartões seja realizado de forma mais assertiva, pois identifica os movimentos registrados pelos adquirentes / subadquirentes possibilitando o cruzamento dos dados com os cupons fiscais.<BR><BR>Para vendas realizadas pelo sistema TEF, o NSU é armazenado automaticamente pelo seu PDV.<BR><BR>Para vendas realizadas pelo sistema POS, o NSU pode ser informado manualmente. Verifique com o seu PDV se esse recurso está disponível.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $NSU;
	/**
	 * NSU (Número Sequencial Único) Identifica uma operação de venda no host.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $NSUHost;
	/**
	 * TID (Transaction ID) identifica uma transação realizada via e-commerce pelo adquirente / subadquirente. <BR><BR>Essa informação será obtida automaticamente pelo seu PDV, quando se tratar de uma venda via e-commerce.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $TID;
	/**
	 * Número da autorização.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $nNumeroAut;
	/**
	 * Número de parcelas.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $nParcTef;
	/**
	 * Descrição da rede de pagamento ou adquirente.<BR><BR>Exemplos:<BR>REDECARD      <BR>STONE       <BR>VISANET    <BR>BCARD       <BR>CIELO      <BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $cRedeTef;
	/**
	 * Valor autorizado.<BR><BR>Preenchimento opcional.
	 *
	 * @var decimal
	 */
	public float $nValorAut;
	/**
	 * Tipo de cartão (Débito ou Crédito)<BR><BR>Pode ser:<BR>"D" - para Débito.<BR>"C" - para Crédito.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $cTipoCartao;
}
