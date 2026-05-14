<?php

namespace OmieLib\Produtos\Cupomfiscal\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Cupomfiscal\CupomFiscalJsonClient;
use OmieLib\Produtos\Cupomfiscal\DadosCancNFCE;
use OmieLib\Produtos\Cupomfiscal\DadosCancSAT;
use OmieLib\Produtos\Cupomfiscal\IdenticacaoNFCE;
use OmieLib\Produtos\Cupomfiscal\IdenticacaoSAT;
use OmieLib\Produtos\Cupomfiscal\Itens;
use OmieLib\Produtos\Cupomfiscal\ListaCupons;
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
 * Solicitação da inclusão da devolução do Cupom Fiscal.
 *
 * @pw_element integer $nIdCupom ID do Cupom Fiscal.
 * @pw_element integer $nIdMotivDevol ID do motivo da devolução.<BR><BR>Preenchimento obrigatório.<BR><BR>Lista de motivo de devolução em:<BR>/api/v1/geral/motivodevolucao/
 * @pw_element integer $nIdCliente Código do cliente.<BR>Caso o cliente não seja informado, será assumido o cliente apontado no Cupom Fiscal<BR><BR>Utilize a tag "codigo_cliente_omie" do método "ListarClientes" da API<BR>/api/v1/geral/clientes/ <BR>para obter essa informação.
 * @pw_element itensArray $itens Informações dos produtos que serão devolvidos.<BR><BR>Caso essa tag não seja preenchida será realizado a devolução integral de todos os produtos do cupom fiscal.<BR><BR>Preenchimento opcional.
 * @pw_complex cfDevolverCupomRequest
 */
class CfDevolverCupomRequest{
	/**
	 * ID do Cupom Fiscal.
	 *
	 * @var integer
	 */
	public int $nIdCupom;
	/**
	 * ID do motivo da devolução.<BR><BR>Preenchimento obrigatório.<BR><BR>Lista de motivo de devolução em:<BR>/api/v1/geral/motivodevolucao/
	 *
	 * @var integer
	 */
	public int $nIdMotivDevol;
	/**
	 * Código do cliente.<BR>Caso o cliente não seja informado, será assumido o cliente apontado no Cupom Fiscal<BR><BR>Utilize a tag "codigo_cliente_omie" do método "ListarClientes" da API<BR>/api/v1/geral/clientes/ <BR>para obter essa informação.
	 *
	 * @var integer
	 */
	public int $nIdCliente;
	/**
	 * Informações dos produtos que serão devolvidos.<BR><BR>Caso essa tag não seja preenchida será realizado a devolução integral de todos os produtos do cupom fiscal.<BR><BR>Preenchimento opcional.
	 *
	 * @var Itens[]
	 */
	public array $itens;
}
