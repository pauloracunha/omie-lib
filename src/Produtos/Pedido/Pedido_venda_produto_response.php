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
 * Resposta da Inclusão de Pedido de Venda de Produtos.
 *
 * @pw_element integer $codigo_pedido ID do pedido do venda.<BR>Preenchimento automático na inclusão - Informe esse campo somente para pesquisa.<BR><BR>Esse campo não é exibido na tela do Pedido de Vendas. <BR>É uma informação interna, utilizada apenas nas APIs.
 * @pw_element string $codigo_pedido_integracao Código de integração do pedido de venda.<BR>Preenchimento Obrigatório na inclusão/alteração.<BR>Preenchimento Opcional na Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código do pedido no aplicativo que você está integração com o Omie. A função dele é servir como uma mapa de relacionamento entre as aplicações. Ao realizar uma consulta/listagem de pedidos você conseguirá ver a relação entre o id do pedido gerado no Omie e o código de pedido existente em sua aplicação.<BR><BR>
 * @pw_element string $codigo_status Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
 * @pw_element string $descricao_status Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
 * @pw_element string $numero_pedido Número do pedido de venda.<BR>Preenchimento automático na inclusão/alteração.<BR>Preenchimento disponível apenas na consulta/pesquisa.<BR><BR>Esse é o número do pedido de venda no Omie, que é gerado automaticamente e exibido na tela.<BR><BR>
 * @pw_complex pedido_venda_produto_response
 */
class Pedido_venda_produto_response{
	/**
	 * ID do pedido do venda.<BR>Preenchimento automático na inclusão - Informe esse campo somente para pesquisa.<BR><BR>Esse campo não é exibido na tela do Pedido de Vendas. <BR>É uma informação interna, utilizada apenas nas APIs.
	 *
	 * @var integer
	 */
	public int $codigo_pedido;
	/**
	 * Código de integração do pedido de venda.<BR>Preenchimento Obrigatório na inclusão/alteração.<BR>Preenchimento Opcional na Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código do pedido no aplicativo que você está integração com o Omie. A função dele é servir como uma mapa de relacionamento entre as aplicações. Ao realizar uma consulta/listagem de pedidos você conseguirá ver a relação entre o id do pedido gerado no Omie e o código de pedido existente em sua aplicação.<BR><BR>
	 *
	 * @var string
	 */
	public string $codigo_pedido_integracao;
	/**
	 * Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
	 *
	 * @var string
	 */
	public string $codigo_status;
	/**
	 * Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
	 *
	 * @var string
	 */
	public string $descricao_status;
	/**
	 * Número do pedido de venda.<BR>Preenchimento automático na inclusão/alteração.<BR>Preenchimento disponível apenas na consulta/pesquisa.<BR><BR>Esse é o número do pedido de venda no Omie, que é gerado automaticamente e exibido na tela.<BR><BR>
	 *
	 * @var string
	 */
	public string $numero_pedido;
}
