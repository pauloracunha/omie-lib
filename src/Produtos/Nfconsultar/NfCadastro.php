<?php

namespace OmieLib\Produtos\Nfconsultar;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Nfconsultar\Request\NfListarRequest;
use OmieLib\Produtos\Nfconsultar\Response\NfListarResponse;

/**
 * Dados da Nota Fiscal
 *
 * @pw_element ide $ide Identificação da NF-e
 * @pw_element nfEmitInt $nfEmitInt Dados da Integração do Emitente
 * @pw_element nfDestInt $nfDestInt Dados de Integração do Destinatário da Nota Fiscal
 * @pw_element detArray $det Detalhes dos itens da Nota Fiscal.&nbsp;
 * @pw_element total $total Total da Nota Fiscal
 * @pw_element info $info Informações complementares.
 * @pw_element compl $compl Dados complementares da NF
 * @pw_element titulosArray $titulos Titulos gerados para a nota fiscal.
 * @pw_element pedido $pedido Dados do pedido.
 * @pw_complex nfCadastro
 */
class NfCadastro{
	/**
	 * Identificação da NF-e
	 *
	 * @var Ide
	 */
	public Ide $ide;
	/**
	 * Dados da Integração do Emitente
	 *
	 * @var NfEmitInt
	 */
	public NfEmitInt $nfEmitInt;
	/**
	 * Dados de Integração do Destinatário da Nota Fiscal
	 *
	 * @var NfDestInt
	 */
	public NfDestInt $nfDestInt;
	/**
	 * Detalhes dos itens da Nota Fiscal.&nbsp;
	 *
	 * @var Det[]
	 */
	public array $det;
	/**
	 * Total da Nota Fiscal
	 *
	 * @var Total
	 */
	public Total $total;
	/**
	 * Informações complementares.
	 *
	 * @var Info
	 */
	public Info $info;
	/**
	 * Dados complementares da NF
	 *
	 * @var Compl
	 */
	public Compl $compl;
	/**
	 * Titulos gerados para a nota fiscal.
	 *
	 * @var Titulos[]
	 */
	public array $titulos;
	/**
	 * Dados do pedido.
	 *
	 * @var Pedido
	 */
	public Pedido $pedido;
}
