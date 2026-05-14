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
 * Formas de pagamento.
 *
 * @pw_element integer $seqPag Sequência do pagamento.<BR><BR>Preenchimento obrigatório.
 * @pw_element boolean $lCanc Status de cancelamento.<BR><BR>true - Cancelado.<BR>false - Ativo.<BR><BR>Preenchimento obrigatório.
 * @pw_element pag $pag Informações do pagamento.
 * @pw_element pagIdent $pagIdent Identificação do pagamento.
 * @pw_element TEF $TEF Informações do TEF.
 * @pw_element POS $POS Informações do POS.
 * @pw_element Cheque $Cheque Informações do Cheque.
 * @pw_element parcelasArray $parcelas Lista de parcelas da forma de pagamento.
 * @pw_element PIX $PIX Informações do PIX.
 * @pw_element string $lNaoGerarTitulo Indica que a parcela não deve gerar um título no financeiro.<BR>
 * @pw_complex formasPag
 */
class FormasPag{
	/**
	 * Sequência do pagamento.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var integer
	 */
	public int $seqPag;
	/**
	 * Status de cancelamento.<BR><BR>true - Cancelado.<BR>false - Ativo.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var boolean
	 */
	public bool $lCanc;
	/**
	 * Informações do pagamento.
	 *
	 * @var Pag
	 */
	public Pag $pag;
	/**
	 * Identificação do pagamento.
	 *
	 * @var PagIdent
	 */
	public PagIdent $pagIdent;
	/**
	 * Informações do TEF.
	 *
	 * @var TEF
	 */
	public TEF $TEF;
	/**
	 * Informações do POS.
	 *
	 * @var POS
	 */
	public POS $POS;
	/**
	 * Informações do Cheque.
	 *
	 * @var Cheque
	 */
	public Cheque $Cheque;
	/**
	 * Lista de parcelas da forma de pagamento.
	 *
	 * @var Parcelas[]
	 */
	public array $parcelas;
	/**
	 * Informações do PIX.
	 *
	 * @var PIX
	 */
	public PIX $PIX;
	/**
	 * Indica que a parcela não deve gerar um título no financeiro.<BR>
	 *
	 * @var string
	 */
	public string $lNaoGerarTitulo;
}
