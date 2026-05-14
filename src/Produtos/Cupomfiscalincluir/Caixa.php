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
 * Identificação do caixa.
 *
 * @pw_element integer $seqCaixa Número sequencial do movimento do caixa. <BR><BR>Caso não tenha controle de caixa, enviar um sequencial para cada dia para que seja possível acompanhar os movimentos de caixas por dia.<BR><BR>Preenchimento obrigatório.
 * @pw_element integer $seqCupom Número sequencial do cupom fiscal enviado.<BR><BR>Não é o número do cupom fiscal, mas sim o número sequencial de venda.<BR><BR>Preenchimento obrigatório.<BR>
 * @pw_element boolean $lCxAberto Indica se o Caixa está aberto.<BR><BR>O padrão é false.<BR><BR>Quando esse campo foi preenchido como true não haverá movimentação de estoque e não será gerado título de contas a receber até que o processo de fechamento do caixa seja executado.<BR>
 * @pw_complex caixa
 */
class Caixa{
	/**
	 * Número sequencial do movimento do caixa. <BR><BR>Caso não tenha controle de caixa, enviar um sequencial para cada dia para que seja possível acompanhar os movimentos de caixas por dia.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var integer
	 */
	public int $seqCaixa;
	/**
	 * Número sequencial do cupom fiscal enviado.<BR><BR>Não é o número do cupom fiscal, mas sim o número sequencial de venda.<BR><BR>Preenchimento obrigatório.<BR>
	 *
	 * @var integer
	 */
	public int $seqCupom;
	/**
	 * Indica se o Caixa está aberto.<BR><BR>O padrão é false.<BR><BR>Quando esse campo foi preenchido como true não haverá movimentação de estoque e não será gerado título de contas a receber até que o processo de fechamento do caixa seja executado.<BR>
	 *
	 * @var boolean
	 */
	public bool $lCxAberto;
}
