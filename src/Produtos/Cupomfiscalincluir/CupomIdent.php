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
 * Identificação dos envolvidos no cupom fiscal (cliente,vendedor,usuário).
 *
 * @pw_element integer $idCliente Código do cliente.<BR><BR>Quando não informado, assumirá que a venda foi realizada para um cliente consumidor padrão. <BR><BR>Caso não exista um cliente consumidor cadastrado, o mesmo será criado automaticamente.
 * @pw_element integer $idVendedor Código do vendedor.<BR><BR>Quando não informado, será criado um vendedor padrão para o emissor de cupom fiscal.
 * @pw_element integer $idProjeto Código do projeto.<BR><BR>Quando não informado, será criado um projeto padrão para o emissor de cupom fiscal.
 * @pw_element string $cUsuario Código do Usuário.<BR><BR>Quando não informado, assumirá o usuário "Integração" como o usuário responsáivel pela emissão do cupom fiscal.
 * @pw_element string $cPedidoCliente Número do pedido do cliente.<BR><BR>Preenchimento Opcional.<BR><BR>Utilizado somente na Inclusão do Cupom Fiscal.
 * @pw_element string $cNumeroContrato Número do contrato do cliente.<BR><BR>Preenchimento Opcional.<BR><BR>Utilizado somente na Inclusão do Cupom Fiscal.
 * @pw_complex cupomIdent
 */
class CupomIdent{
	/**
	 * Código do cliente.<BR><BR>Quando não informado, assumirá que a venda foi realizada para um cliente consumidor padrão. <BR><BR>Caso não exista um cliente consumidor cadastrado, o mesmo será criado automaticamente.
	 *
	 * @var integer
	 */
	public int $idCliente;
	/**
	 * Código do vendedor.<BR><BR>Quando não informado, será criado um vendedor padrão para o emissor de cupom fiscal.
	 *
	 * @var integer
	 */
	public int $idVendedor;
	/**
	 * Código do projeto.<BR><BR>Quando não informado, será criado um projeto padrão para o emissor de cupom fiscal.
	 *
	 * @var integer
	 */
	public int $idProjeto;
	/**
	 * Código do Usuário.<BR><BR>Quando não informado, assumirá o usuário "Integração" como o usuário responsáivel pela emissão do cupom fiscal.
	 *
	 * @var string
	 */
	public string $cUsuario;
	/**
	 * Número do pedido do cliente.<BR><BR>Preenchimento Opcional.<BR><BR>Utilizado somente na Inclusão do Cupom Fiscal.
	 *
	 * @var string
	 */
	public string $cPedidoCliente;
	/**
	 * Número do contrato do cliente.<BR><BR>Preenchimento Opcional.<BR><BR>Utilizado somente na Inclusão do Cupom Fiscal.
	 *
	 * @var string
	 */
	public string $cNumeroContrato;
}
