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
 * Lista de cupons processados.
 *
 * @pw_element integer $idCupom Identificação do cupom fiscal.
 * @pw_element integer $idLote Identificação do lote do cupom fiscal.
 * @pw_element string $dEmi Data da emissão do cupom fiscal.<BR><BR>Preenchimento obrigatório.<BR>
 * @pw_element decimal $vCF Valor do Cupom Fiscal.<BR><BR>Preenchimento obrigatório.
 * @pw_complex listaProcessados
 */
class ListaProcessados{
	/**
	 * Identificação do cupom fiscal.
	 *
	 * @var integer
	 */
	public int $idCupom;
	/**
	 * Identificação do lote do cupom fiscal.
	 *
	 * @var integer
	 */
	public int $idLote;
	/**
	 * Data da emissão do cupom fiscal.<BR><BR>Preenchimento obrigatório.<BR>
	 *
	 * @var string
	 */
	public string $dEmi;
	/**
	 * Valor do Cupom Fiscal.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var decimal
	 */
	public float $vCF;
}
