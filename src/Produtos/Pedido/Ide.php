<?php

namespace OmieLib\Produtos\Pedido;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedido\Request\PvpAlterarPedFatRequest;
use OmieLib\Produtos\Pedido\Request\PvpConsultarRequest;
use OmieLib\Produtos\Pedido\Request\PvpDevolverRequest;
use OmieLib\Produtos\Pedido\Request\PvpExcluirRequest;
use OmieLib\Produtos\Pedido\Request\PvpListarRequest;
use OmieLib\Produtos\Pedido\Request\PvpSimularImpRequest;
use OmieLib\Produtos\Pedido\Request\PvpStatusRequest;
use OmieLib\Produtos\Pedido\Request\PvpTrocarEtapaRequest;
use OmieLib\Produtos\Pedido\Response\PvpAlterarPedFatResponse;
use OmieLib\Produtos\Pedido\Response\PvpConsultarResponse;
use OmieLib\Produtos\Pedido\Response\PvpDevolverResponse;
use OmieLib\Produtos\Pedido\Response\PvpExcluirResponse;
use OmieLib\Produtos\Pedido\Response\PvpListarResponse;
use OmieLib\Produtos\Pedido\Response\PvpSimularImpResponse;
use OmieLib\Produtos\Pedido\Response\PvpStatusResponse;
use OmieLib\Produtos\Pedido\Response\PvpTrocarEtapaResponse;

/**
 * Identificação do Item do Pedido de Vendas.
 *
 * @pw_element string $codigo_item_integracao Código de Integração do Item do Pedido de Venda.<BR>Preenchimento Obrigatório.<BR><BR>Informe a identificação do Item do Pedido de Venda. Caso você não tenha essa informação no seu aplicativo, informe o número sequencial de cada item do pedido.<BR><BR>Informa de 1 a 199.<BR><BR>
 * @pw_element integer $codigo_item ID do Item do Pedido.<BR>Preenchimento automático - Não informar.
 * @pw_element string $simples_nacional Indica que a empresa é Optante pelo Simples Nacional.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".
 * @pw_element string $acao_item Ação para o item.<BR><BR>Pode ser:<BR><BR>"E" - para excluir um item.
 * @pw_element integer $id_ordem_producao Id da Ordem de Produção.<BR><BR>Campo disponível apenas para consulta. <BR><BR>Não deve ser informado na Inclusão ou Alteração.
 * @pw_element integer $regra_impostos DEPRECATED
 * @pw_complex ide
 */
class Ide{
	/**
	 * Código de Integração do Item do Pedido de Venda.<BR>Preenchimento Obrigatório.<BR><BR>Informe a identificação do Item do Pedido de Venda. Caso você não tenha essa informação no seu aplicativo, informe o número sequencial de cada item do pedido.<BR><BR>Informa de 1 a 199.<BR><BR>
	 *
	 * @var string
	 */
	public string $codigo_item_integracao;
	/**
	 * ID do Item do Pedido.<BR>Preenchimento automático - Não informar.
	 *
	 * @var integer
	 */
	public int $codigo_item;
	/**
	 * Indica que a empresa é Optante pelo Simples Nacional.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".
	 *
	 * @var string
	 */
	public string $simples_nacional;
	/**
	 * Ação para o item.<BR><BR>Pode ser:<BR><BR>"E" - para excluir um item.
	 *
	 * @var string
	 */
	public string $acao_item;
	/**
	 * Id da Ordem de Produção.<BR><BR>Campo disponível apenas para consulta. <BR><BR>Não deve ser informado na Inclusão ou Alteração.
	 *
	 * @var integer
	 */
	public int $id_ordem_producao;
	/**
	 * DEPRECATED
	 *
	 * @var integer
	 */
	public int $regra_impostos;
}
