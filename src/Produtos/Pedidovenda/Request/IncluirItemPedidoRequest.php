<?php

namespace OmieLib\Produtos\Pedidovenda\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedidovenda\Itens;
use OmieLib\Produtos\Pedidovenda\Lote_validade;
use OmieLib\Produtos\Pedidovenda\PedidoVendaJsonClient;
use OmieLib\Produtos\Pedidovenda\Response\AdicionarPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\AlterarItemPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\ExcluirItemPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\ExcluirItensPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\IncluirItemPedidoResponse;
use OmieLib\Produtos\Pedidovenda\Response\TotalizarPedidoResponse;

/**
 * Solicitação da inclusão de um Item no Pedido de Venda.
 *
 * @pw_element integer $codigo_pedido ID do pedido do venda.<BR>Identificação do pedido de venda, esse campo não é exibido na tela do Omie. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Preenchimento obrigatório.
 * @pw_element string $codigo_item_integracao Código de Integração do Item do Pedido de Venda.<BR><BR>Informe a identificação do Item do Pedido de Venda. Caso você não tenha essa informação no seu aplicativo, informe o número sequencial de cada item do pedido.<BR><BR>Informa de 1 a 199.<BR><BR>Preenchimento opcional.
 * @pw_element integer $codigo_produto ID do Produto.<BR><BR>Esse campo não é exibido na tela do Pedido de Vendas. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Utilize a tag "codigo_produto" do método "ListarProdutos" da API<BR>http://app.omie.com.br/api/v1/geral/produtos/<BR>para obter essa informação.<BR><BR>Preenchimento obrigatório.
 * @pw_element decimal $quantidade Quantidade<BR>Preenchimento obrigatório.
 * @pw_element string $cfop CFOP - Código Fiscal de Operações e Prestações.<BR><BR>Utilize a tag "nCodigo" do método "ListarCFOP" da API<BR>/api/v1/produtos/cfop/<BR>para obter essa informação.
 * @pw_element decimal $valor_unitario Valor Unitário<BR>Preenchimento obrigatório.
 * @pw_element string $tipo_desconto Tipo de Desconto.<BR>Pode ser:<BR>V - Valor<BR>P - Percentual<BR><BR>Preenchimento opcional.<BR><BR>Ao informar o desconto na capa do pedido o mesmo será distribuído proporcionalmente para os itens. Uma vez realizada a distribuição os valores do desconto serão exibidos apenas nos itens.<BR><BR>IMPORTANTE:<BR>- Não será permitido informar desconto na capa caso já exista distribuição pelos itens.<BR>- Na alteração o desconto será aplicado para todos os itens do pedido.<BR>
 * @pw_element decimal $percentual_desconto Percentual de Desconto.<BR>Preenchimento opcional.<BR><BR>Ao informar o desconto na capa do pedido o mesmo será distribuído proporcionalmente para os itens. Uma vez realizada a distribuição os valores do desconto serão exibidos apenas nos itens.<BR><BR>IMPORTANTE:<BR>- Não será permitido informar desconto na capa caso já exista distribuição pelos itens.<BR>- Na alteração o desconto será aplicado para todos os itens do pedido.
 * @pw_element decimal $valor_desconto Valor do Desconto<BR>Preenchimento opcional.<BR><BR>Ao informar o desconto na capa do pedido o mesmo será distribuído proporcionalmente para os itens. Uma vez realizada a distribuição os valores do desconto serão exibidos apenas nos itens.<BR><BR>IMPORTANTE:<BR>- Não será permitido informar desconto na capa caso já exista distribuição pelos itens.<BR>- Na alteração o desconto será aplicado para todos os itens do pedido.<BR>- Se o desconto for superior ao valor do pedido ele não será aplicado.
 * @pw_element integer $codigo_tabela_preco Código da tabela de preço.<BR><BR>(Código Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>Deve ser informada opcionalmente, caso a tabela de preços esteja configurada no Omie.
 * @pw_element integer $codigo_local_estoque Código do Local do Estoque.<BR><BR>Preenchimento opcional.
 * @pw_element integer $codigo_cenario_impostos_item Código do Cenário de Impostos.<BR><BR>Preenchimento opcional.
 * @pw_element string $numero_pedido_compra Número do Pedido de Compra.<BR>Preenchimento Opcional.
 * @pw_element integer $item_pedido_compra Item do Pedido de Compra.<BR>Preenchimento Opcional.<BR>
 * @pw_element decimal $quantidade_trib Quantidade do Item - Tributável
 * @pw_element string $unidade_trib Código da Unidade - Tributável
 * @pw_element string $dados_adicionais_item Informações para a Nota Fiscal.<BR>Preenchimento Opcional.
 * @pw_element string $nao_movimentar_estoque Não gerar a saída de estoque deste item ao emitir NF-e.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR>(informe "S" para ativar essa opção).
 * @pw_element string $nao_gerar_financeiro Não gerar conta a receber para este item.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR>(Informe "S" para ativar essa opção).
 * @pw_element string $nao_somar_total Indica se não deve somar o item no total do documento.
 * @pw_element string $codigo_categoria_item Código da Categoria do item.<BR><BR>Preenchimento opcional.
 * @pw_element string $obs_item Observações do item (elas não serão exibidas na Nota Fisca, mas serão impressas no pedido de venda).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Observações" do Item do Pedido de Venda.
 * @pw_element lote_validadeArray $lote_validade Informações referentes ao lote e validade do produto.<BR><BR>A tag só deve ser informada se o produto possuir controle de lote e se a intenção é informar os lotes "manualmente" por API.
 * @pw_complex incluirItemPedidoRequest
 */
class IncluirItemPedidoRequest{
	/**
	 * ID do pedido do venda.<BR>Identificação do pedido de venda, esse campo não é exibido na tela do Omie. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var integer
	 */
	public int $codigo_pedido;
	/**
	 * Código de Integração do Item do Pedido de Venda.<BR><BR>Informe a identificação do Item do Pedido de Venda. Caso você não tenha essa informação no seu aplicativo, informe o número sequencial de cada item do pedido.<BR><BR>Informa de 1 a 199.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $codigo_item_integracao;
	/**
	 * ID do Produto.<BR><BR>Esse campo não é exibido na tela do Pedido de Vendas. <BR>É uma informação interna, utilizada apenas nas APIs.<BR><BR>Utilize a tag "codigo_produto" do método "ListarProdutos" da API<BR>http://app.omie.com.br/api/v1/geral/produtos/<BR>para obter essa informação.<BR><BR>Preenchimento obrigatório.
	 *
	 * @var integer
	 */
	public int $codigo_produto;
	/**
	 * Quantidade<BR>Preenchimento obrigatório.
	 *
	 * @var decimal
	 */
	public float $quantidade;
	/**
	 * CFOP - Código Fiscal de Operações e Prestações.<BR><BR>Utilize a tag "nCodigo" do método "ListarCFOP" da API<BR>/api/v1/produtos/cfop/<BR>para obter essa informação.
	 *
	 * @var string
	 */
	public string $cfop;
	/**
	 * Valor Unitário<BR>Preenchimento obrigatório.
	 *
	 * @var decimal
	 */
	public float $valor_unitario;
	/**
	 * Tipo de Desconto.<BR>Pode ser:<BR>V - Valor<BR>P - Percentual<BR><BR>Preenchimento opcional.<BR><BR>Ao informar o desconto na capa do pedido o mesmo será distribuído proporcionalmente para os itens. Uma vez realizada a distribuição os valores do desconto serão exibidos apenas nos itens.<BR><BR>IMPORTANTE:<BR>- Não será permitido informar desconto na capa caso já exista distribuição pelos itens.<BR>- Na alteração o desconto será aplicado para todos os itens do pedido.<BR>
	 *
	 * @var string
	 */
	public string $tipo_desconto;
	/**
	 * Percentual de Desconto.<BR>Preenchimento opcional.<BR><BR>Ao informar o desconto na capa do pedido o mesmo será distribuído proporcionalmente para os itens. Uma vez realizada a distribuição os valores do desconto serão exibidos apenas nos itens.<BR><BR>IMPORTANTE:<BR>- Não será permitido informar desconto na capa caso já exista distribuição pelos itens.<BR>- Na alteração o desconto será aplicado para todos os itens do pedido.
	 *
	 * @var decimal
	 */
	public float $percentual_desconto;
	/**
	 * Valor do Desconto<BR>Preenchimento opcional.<BR><BR>Ao informar o desconto na capa do pedido o mesmo será distribuído proporcionalmente para os itens. Uma vez realizada a distribuição os valores do desconto serão exibidos apenas nos itens.<BR><BR>IMPORTANTE:<BR>- Não será permitido informar desconto na capa caso já exista distribuição pelos itens.<BR>- Na alteração o desconto será aplicado para todos os itens do pedido.<BR>- Se o desconto for superior ao valor do pedido ele não será aplicado.
	 *
	 * @var decimal
	 */
	public float $valor_desconto;
	/**
	 * Código da tabela de preço.<BR><BR>(Código Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>Deve ser informada opcionalmente, caso a tabela de preços esteja configurada no Omie.
	 *
	 * @var integer
	 */
	public int $codigo_tabela_preco;
	/**
	 * Código do Local do Estoque.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Código do Cenário de Impostos.<BR><BR>Preenchimento opcional.
	 *
	 * @var integer
	 */
	public int $codigo_cenario_impostos_item;
	/**
	 * Número do Pedido de Compra.<BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $numero_pedido_compra;
	/**
	 * Item do Pedido de Compra.<BR>Preenchimento Opcional.<BR>
	 *
	 * @var integer
	 */
	public int $item_pedido_compra;
	/**
	 * Quantidade do Item - Tributável
	 *
	 * @var decimal
	 */
	public float $quantidade_trib;
	/**
	 * Código da Unidade - Tributável
	 *
	 * @var string
	 */
	public string $unidade_trib;
	/**
	 * Informações para a Nota Fiscal.<BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $dados_adicionais_item;
	/**
	 * Não gerar a saída de estoque deste item ao emitir NF-e.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR>(informe "S" para ativar essa opção).
	 *
	 * @var string
	 */
	public string $nao_movimentar_estoque;
	/**
	 * Não gerar conta a receber para este item.<BR>Preenchimento Opcional.<BR><BR>Informar "S" ou "N".<BR>(Informe "S" para ativar essa opção).
	 *
	 * @var string
	 */
	public string $nao_gerar_financeiro;
	/**
	 * Indica se não deve somar o item no total do documento.
	 *
	 * @var string
	 */
	public string $nao_somar_total;
	/**
	 * Código da Categoria do item.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $codigo_categoria_item;
	/**
	 * Observações do item (elas não serão exibidas na Nota Fisca, mas serão impressas no pedido de venda).<BR>Preenchimento Opcional.<BR><BR>Informação localizada na Aba "Observações" do Item do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $obs_item;
	/**
	 * Informações referentes ao lote e validade do produto.<BR><BR>A tag só deve ser informada se o produto possuir controle de lote e se a intenção é informar os lotes "manualmente" por API.
	 *
	 * @var Lote_validade[]
	 */
	public array $lote_validade;
}
