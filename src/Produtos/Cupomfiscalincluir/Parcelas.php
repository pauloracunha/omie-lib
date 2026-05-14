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
 * Lista de parcelas da forma de pagamento.
 *
 * @pw_element string $nParc Número da parcela.<BR><BR>Preenchimento obrigatório.<BR>Formato: 999/999.<BR><BR>Exemplos:<BR>001/001<BR>001/003<BR>002/003<BR>003/003
 * @pw_element string $dVenc Data de vencimento da parcela.<BR><BR>Preenchimento obrigatório.<BR>Formato: dd/mm/aaaa.
 * @pw_element decimal $vParc Valor da parcela.<BR><BR>Preenchimento obrigatório.
 * @pw_complex parcelas
 */
class Parcelas{
	/**
	 * Número da parcela.<BR><BR>Preenchimento obrigatório.<BR>Formato: 999/999.<BR><BR>Exemplos:<BR>001/001<BR>001/003<BR>002/003<BR>003/003
	 *
	 * @var string
	 */
	public string $nParc;
	/**
	 * Data de vencimento da parcela.<BR><BR>Preenchimento obrigatório.<BR>Formato: dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dVenc;
	/**
	 * Valor da parcela.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var decimal
	 */
	public float $vParc;
}
