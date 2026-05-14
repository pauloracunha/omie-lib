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
 * Informações do POS.
 *
 * @pw_element string $dTransacao Data da transação.<BR><BR>Preenchimento opcional.
 * @pw_element string $hTransacao Hora da transação.<BR><BR>Preenchimento opcional.
 * @pw_element string $NSU NSU (Número Sequencial Único) identifica uma operação de venda. <BR><BR>Permite que o processo de conciliação de cartões seja realizado de forma mais assertiva, pois identifica os movimentos registrados pelos adquirentes / subadquirentes possibilitando o cruzamento dos dados com os cupons fiscais.<BR><BR>Para vendas realizadas pelo sistema TEF, o NSU é armazenado automaticamente pelo seu PDV.<BR><BR>Para vendas realizadas pelo sistema POS, o NSU pode ser informado manualmente. Verifique com o seu PDV se esse recurso está disponível.<BR><BR>Preenchimento opcional.
 * @pw_element integer $nParcPos Número de parcelas.<BR><BR>Preenchimento opcional.
 * @pw_element string $cRedePos Descrição da rede de pagamento ou adquirente.<BR><BR>Exemplos:<BR>REDECARD      <BR>STONE       <BR>VISANET    <BR>BCARD       <BR>CIELO      <BR><BR>Preenchimento opcional.
 * @pw_element decimal $nValorAut Valor autorizado.<BR><BR>Preenchimento opcional.
 * @pw_complex POS
 */
class POS{
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
	 * NSU (Número Sequencial Único) identifica uma operação de venda. <BR><BR>Permite que o processo de conciliação de cartões seja realizado de forma mais assertiva, pois identifica os movimentos registrados pelos adquirentes / subadquirentes possibilitando o cruzamento dos dados com os cupons fiscais.<BR><BR>Para vendas realizadas pelo sistema TEF, o NSU é armazenado automaticamente pelo seu PDV.<BR><BR>Para vendas realizadas pelo sistema POS, o NSU pode ser informado manualmente. Verifique com o seu PDV se esse recurso está disponível.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $NSU;
	/**
	 * Número de parcelas.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $nParcPos;
	/**
	 * Descrição da rede de pagamento ou adquirente.<BR><BR>Exemplos:<BR>REDECARD      <BR>STONE       <BR>VISANET    <BR>BCARD       <BR>CIELO      <BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $cRedePos;
	/**
	 * Valor autorizado.<BR><BR>Preenchimento opcional.
	 *
	 * @var decimal
	 */
	public float $nValorAut;
}
