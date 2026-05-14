<?php

namespace OmieLib\Produtos\Cupomfiscal;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscal\Request\CfCancelarNfceRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfCancelarRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfCancelarSatRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfDevolverCupomRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfExcluirLoteRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfExcluirPorNumRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfExcluirRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfListarRequest;
use OmieLib\Produtos\Cupomfiscal\Request\CfObterProxLoteRequest;
use OmieLib\Produtos\Cupomfiscal\Response\CfCancelarNfceResponse;
use OmieLib\Produtos\Cupomfiscal\Response\CfCancelarResponse;
use OmieLib\Produtos\Cupomfiscal\Response\CfCancelarSatResponse;
use OmieLib\Produtos\Cupomfiscal\Response\CfDevolverCupomResponse;
use OmieLib\Produtos\Cupomfiscal\Response\CfExcluirLoteResponse;
use OmieLib\Produtos\Cupomfiscal\Response\CfExcluirPorNumResponse;
use OmieLib\Produtos\Cupomfiscal\Response\CfExcluirResponse;
use OmieLib\Produtos\Cupomfiscal\Response\CfListarResponse;
use OmieLib\Produtos\Cupomfiscal\Response\CfObterProxLoteResponse;

/**
 * Informações dos produtos que serão devolvidos.
 *
 * @pw_element integer $nIdItem ID do item do cupom fiscal.<BR>Essa informação não é exibida nas telas do Omie.<BR><BR>Preenchimento obrigatório.<BR><BR>Lista com os itens do cupom em:<BR>/api/v1/produtos/cupomfiscalconsultar/#CuponsFiscais
 * @pw_element string $nQuant Quantidade do produto a ser devolvida.<BR><BR>Preenchimento opcional.<BR><BR>Caso não seja preenchida será feita a devolução integral do produto.
 * @pw_complex itens
 */
class Itens{
	/**
	 * ID do item do cupom fiscal.<BR>Essa informação não é exibida nas telas do Omie.<BR><BR>Preenchimento obrigatório.<BR><BR>Lista com os itens do cupom em:<BR>/api/v1/produtos/cupomfiscalconsultar/#CuponsFiscais
	 *
	 * @var integer
	 */
	public int $nIdItem;
	/**
	 * Quantidade do produto a ser devolvida.<BR><BR>Preenchimento opcional.<BR><BR>Caso não seja preenchida será feita a devolução integral do produto.
	 *
	 * @var string
	 */
	public string $nQuant;
}
