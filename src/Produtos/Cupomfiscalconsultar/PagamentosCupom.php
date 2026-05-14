<?php

namespace OmieLib\Produtos\Cupomfiscalconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcItensRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcListarRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Request\CfcPagamentosRequest;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcItensResponse;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcListarResponse;
use OmieLib\Produtos\Cupomfiscalconsultar\Response\CfcPagamentosResponse;

/**
 * Informações dos Pagamentos do Cupom Fiscal.
 *
 * @pw_element integer $nCodTitulo Código do título.
 * @pw_element decimal $nValorDocumento Valor do Documento.
 * @pw_element integer $idContaCorrente Código da Conta Corrente.
 * @pw_element string $cTipoDoc Tipo de Documento.<BR><BR>Pode ser: <BR><BR>99999 - Outros<BR>BOL   - Boleto<BR>CHQ   - Cheque<BR>CHT   - Cheque de Terceiros<BR>CRC   - Cartão de Crédito<BR>CRD   - Cartão de Débito<BR>CRE   - Creadiário<BR>CRT   - Cartão <BR>DIN   - Dinheiro<BR>PIX   - Pix
 * @pw_element string $dDtVencimento Data de Vencimento do Documento.
 * @pw_element string $cNumParcela Número da parcela.
 * @pw_element decimal $nValorTaxa Valor da Taxa.
 * @pw_element string $cCategoria Código da Categoria
 * @pw_element integer $nSequencia Sequência do item no Cupom Fiscal.
 * @pw_complex pagamentosCupom
 */
class PagamentosCupom{
	/**
	 * Código do título.
	 *
	 * @var integer
	 */
	public int $nCodTitulo;
	/**
	 * Valor do Documento.
	 *
	 * @var decimal
	 */
	public float $nValorDocumento;
	/**
	 * Código da Conta Corrente.
	 *
	 * @var integer
	 */
	public int $idContaCorrente;
	/**
	 * Tipo de Documento.<BR><BR>Pode ser: <BR><BR>99999 - Outros<BR>BOL   - Boleto<BR>CHQ   - Cheque<BR>CHT   - Cheque de Terceiros<BR>CRC   - Cartão de Crédito<BR>CRD   - Cartão de Débito<BR>CRE   - Creadiário<BR>CRT   - Cartão <BR>DIN   - Dinheiro<BR>PIX   - Pix
	 *
	 * @var string
	 */
	public string $cTipoDoc;
	/**
	 * Data de Vencimento do Documento.
	 *
	 * @var string
	 */
	public string $dDtVencimento;
	/**
	 * Número da parcela.
	 *
	 * @var string
	 */
	public string $cNumParcela;
	/**
	 * Valor da Taxa.
	 *
	 * @var decimal
	 */
	public float $nValorTaxa;
	/**
	 * Código da Categoria
	 *
	 * @var string
	 */
	public string $cCategoria;
	/**
	 * Sequência do item no Cupom Fiscal.
	 *
	 * @var integer
	 */
	public int $nSequencia;
}
