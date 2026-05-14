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
 * Informações do cabeçalho do pedido.
 *
 * @pw_element integer $codigo_pedido ID do pedido do venda.<BR>Preenchimento automático na inclusão - Informe esse campo somente para pesquisa.<BR><BR>Esse campo não é exibido na tela do Pedido de Vendas. <BR>É uma informação interna, utilizada apenas nas APIs.
 * @pw_element string $codigo_pedido_integracao Código de integração do pedido de venda.<BR>Preenchimento Obrigatório na inclusão/alteração.<BR>Preenchimento Opcional na Consulta/Pesquisa.<BR><BR>Preencha esse campo com o código do pedido no aplicativo que você está integração com o Omie. A função dele é servir como uma mapa de relacionamento entre as aplicações. Ao realizar uma consulta/listagem de pedidos você conseguirá ver a relação entre o id do pedido gerado no Omie e o código de pedido existente em sua aplicação.<BR><BR>
 * @pw_element string $numero_pedido Número do pedido de venda.<BR>Preenchimento automático na inclusão/alteração.<BR>Preenchimento disponível apenas na consulta/pesquisa.<BR><BR>Esse é o número do pedido de venda no Omie, que é gerado automaticamente e exibido na tela.<BR><BR>
 * @pw_element string $sequencial Número sequencial do pedido de venda parcial.<BR>Preenchimento automático na inclusão/alteração.<BR>Preenchimento disponível apenas na consulta/pesquisa.<BR><BR>Esse é o número do pedido de venda parcial no Omie, que é gerado automaticamente e exibido na tela.
 * @pw_element integer $codigo_cliente Código do cliente.<BR>Preenchimento Obrigatório.<BR><BR>Utilize a tag "codigo_cliente_omie" do método "ListarClientes" da API<BR>http://app.omie.com.br/api/v1/geral/clientes/<BR>para obter essa informação.<BR>
 * @pw_element string $codigo_cliente_integracao Código Integração da Transportadora.<BR>Preenchimento Opcional.<BR><BR>Esse campo deve ser informado apenas se você incluiu o cliente (transportadora) via API e informou um código de integração para o cliente. Do contrário, informe sempre a tag "codigo_cliente".<BR>
 * @pw_element string $data_previsao Data de Previsão de Faturamento.<BR>Preenchimento Obrigatório.<BR><BR>Utilize o formato "dd/mm/aaaa".<BR><BR>Esse campo indica a data da previsão do faturamento do pedido e deve ser informado com uma data igual ou superior a data corrente.<BR>
 * @pw_element integer $quantidade_itens Quantidade de Itens.<BR>Preenchimento automático - Não informar.
 * @pw_element string $etapa Etapa do pedido de venda.<BR>Preenchimento Obrigatório.<BR><BR>Esse campo indica em que coluna o pedido de venda irá figurar no processo de faturamento do Omie.<BR><BR>Utilize a tag "codigo" do método "ListarEtapasFaturamento" da API<BR>http://app.omie.com.br/api/v1/produtos/etapafat/<BR>para obter essa informação.<BR><BR>Os valores são fixos, mas as descrições (funções atribuídas a cada coluna pode mudar. A API irá indicar a descrição de cada coluna.<BR><BR>Os valores disponíveis para esse campo podem ser:<BR><BR>"10" - Primeira coluna<BR>"20" - Segunda coluna<BR>"30" - Terceira coluna<BR>"40" - Quarta coluna<BR>"50" - Faturar<BR>
 * @pw_element string $codigo_parcela Código da parcela/Condição de pagamento.<BR>Preenchimento Obrigatório.<BR><BR>Utilize a tag "nCodigo" do método "ListarFormasPagVendas" da API<BR>http://app.omie.com.br/api/v1/produtos/formaspagvendas/<BR>para obter essa informação.<BR><BR>O código "999" é o único que permite uma definição de forma de pagamento customizada. Caso você escolha essa opção, deve também informar a tag "qtde_parcelas" e a estrutura "lista_parcelas".<BR><BR>Consultar a API de parcelas para obter código: 'api/v1/geral/parcelas/#ListarParcelas'
 * @pw_element integer $qtde_parcelas Quantidade de parcelas.<BR>Preenchimento Obrigatório quando o conteúdo da tag "codigo_parcela" for "999".<BR><BR>Valores permitidos de 1 a 999.
 * @pw_element string $origem_pedido Origem do Pedido.<BR><BR>Default: <BR>API - Importado via API.<BR>MLV - Mercado Livre<BR><BR>Esse campo será ignorado no método AlterarPedidoVenda.
 * @pw_element integer $codigo_cenario_impostos Código do Cenário de Impostos.<BR><BR>Se não informado, será assumido o cenário padrão.
 * @pw_element string $bloqueado Pedido Bloqueado pela API.<BR>Preenchimento automático - Não informar.
 * @pw_element string $importado_api Importado pela API.<BR>Preenchimento automático - Não informar.
 * @pw_element integer $codigo_empresa DEPRECATED
 * @pw_element string $codigo_empresa_integracao DEPRECATED
 * @pw_element string $tipo_desconto_pedido Tipo de desconto para o pedido.<BR><BR>Pode ser: <BR>V - Valor<BR>P - Percentual<BR><BR>Preenchimento opcional.<BR><BR>Ao informar o desconto na capa do pedido o mesmo será distribuído proporcionalmente para os itens. Uma vez realizada a distribuição os valores do desconto serão exibidos apenas nos itens.<BR>   <BR>IMPORTANTE: <BR>- Não será permitido informar desconto na capa caso já exista distribuição pelos itens.<BR>- Na alteração o desconto será aplicado para todos os itens do pedido.
 * @pw_element decimal $perc_desconto_pedido Percentual do desconto do pedido.<BR><BR>Preenchimento opcional.<BR><BR>Ao informar o desconto na capa do pedido o mesmo será distribuído proporcionalmente para os itens. Uma vez realizada a distribuição os valores do desconto serão exibidos apenas nos itens.<BR>   <BR>IMPORTANTE:<BR>- Não será permitido informar desconto na capa caso já exista distribuição pelos itens.<BR>- Na alteração o desconto será aplicado para todos os itens do pedido.
 * @pw_element decimal $valor_desconto_pedido Valor do desconto do pedido.<BR><BR>Preenchimento opcional.<BR><BR>Ao informar o desconto na capa do pedido o mesmo será distribuído proporcionalmente para os itens. Uma vez realizada a distribuição os valores do desconto serão exibidos apenas nos itens.<BR>   <BR>IMPORTANTE:<BR>- Não será permitido informar desconto na capa caso já exista distribuição pelos itens.<BR>- Na alteração o desconto será aplicado para todos os itens do pedido.<BR>- Se o desconto for superior ao valor do pedido ele não será aplicado.
 * @pw_element string $encerrado Indica que o pedido foi encerrado (S/N).<BR>Tag utilizada apenas nos métodos de listagem e consulta.
 * @pw_element string $enc_motivo Descrição do motivo do encerramento.<BR>Tag utilizada apenas nos métodos de listagem e consulta.
 * @pw_element string $enc_data Data de encerramento,<BR>Tag utilizada apenas nos métodos de listagem e consulta.
 * @pw_element string $enc_hora Hora de encerramento,<BR>Tag utilizada apenas nos métodos de listagem e consulta.
 * @pw_element string $enc_user Usuário do encerramento,<BR>Tag utilizada apenas nos métodos de listagem e consulta.
 * @pw_element string $nao_gerar_boleto Indica se o boleto não deve ser gerado para a(s) parcela(s) ao emitir a nota fiscal.<BR><BR>Informe "S" para não gerar o boleto. O padrão é "N".<BR><BR>Quando informado dentro do tag "cabecalho", aplica-se como valor padrão para todas as parcelas, caso não seja especificado individualmente em cada uma.<BR><BR>Quando informado dentro da tag "lista_parcelas", aplica-se individualmente para cada parcela (tem prioridade sobre o valor informado no cabeçalho).<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Parcelas" do Pedido de Venda.
 * @pw_complex cabecalho
 */
class Cabecalho{
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
	 * Número do pedido de venda.<BR>Preenchimento automático na inclusão/alteração.<BR>Preenchimento disponível apenas na consulta/pesquisa.<BR><BR>Esse é o número do pedido de venda no Omie, que é gerado automaticamente e exibido na tela.<BR><BR>
	 *
	 * @var string
	 */
	public string $numero_pedido;
	/**
	 * Número sequencial do pedido de venda parcial.<BR>Preenchimento automático na inclusão/alteração.<BR>Preenchimento disponível apenas na consulta/pesquisa.<BR><BR>Esse é o número do pedido de venda parcial no Omie, que é gerado automaticamente e exibido na tela.
	 *
	 * @var string
	 */
	public string $sequencial;
	/**
	 * Código do cliente.<BR>Preenchimento Obrigatório.<BR><BR>Utilize a tag "codigo_cliente_omie" do método "ListarClientes" da API<BR>http://app.omie.com.br/api/v1/geral/clientes/<BR>para obter essa informação.<BR>
	 *
	 * @var integer
	 */
	public int $codigo_cliente;
	/**
	 * Código Integração da Transportadora.<BR>Preenchimento Opcional.<BR><BR>Esse campo deve ser informado apenas se você incluiu o cliente (transportadora) via API e informou um código de integração para o cliente. Do contrário, informe sempre a tag "codigo_cliente".<BR>
	 *
	 * @var string
	 */
	public string $codigo_cliente_integracao;
	/**
	 * Data de Previsão de Faturamento.<BR>Preenchimento Obrigatório.<BR><BR>Utilize o formato "dd/mm/aaaa".<BR><BR>Esse campo indica a data da previsão do faturamento do pedido e deve ser informado com uma data igual ou superior a data corrente.<BR>
	 *
	 * @var string
	 */
	public string $data_previsao;
	/**
	 * Quantidade de Itens.<BR>Preenchimento automático - Não informar.
	 *
	 * @var integer
	 */
	public int $quantidade_itens;
	/**
	 * Etapa do pedido de venda.<BR>Preenchimento Obrigatório.<BR><BR>Esse campo indica em que coluna o pedido de venda irá figurar no processo de faturamento do Omie.<BR><BR>Utilize a tag "codigo" do método "ListarEtapasFaturamento" da API<BR>http://app.omie.com.br/api/v1/produtos/etapafat/<BR>para obter essa informação.<BR><BR>Os valores são fixos, mas as descrições (funções atribuídas a cada coluna pode mudar. A API irá indicar a descrição de cada coluna.<BR><BR>Os valores disponíveis para esse campo podem ser:<BR><BR>"10" - Primeira coluna<BR>"20" - Segunda coluna<BR>"30" - Terceira coluna<BR>"40" - Quarta coluna<BR>"50" - Faturar<BR>
	 *
	 * @var string
	 */
	public string $etapa;
	/**
	 * Código da parcela/Condição de pagamento.<BR>Preenchimento Obrigatório.<BR><BR>Utilize a tag "nCodigo" do método "ListarFormasPagVendas" da API<BR>http://app.omie.com.br/api/v1/produtos/formaspagvendas/<BR>para obter essa informação.<BR><BR>O código "999" é o único que permite uma definição de forma de pagamento customizada. Caso você escolha essa opção, deve também informar a tag "qtde_parcelas" e a estrutura "lista_parcelas".<BR><BR>Consultar a API de parcelas para obter código: 'api/v1/geral/parcelas/#ListarParcelas'
	 *
	 * @var string
	 */
	public string $codigo_parcela;
	/**
	 * Quantidade de parcelas.<BR>Preenchimento Obrigatório quando o conteúdo da tag "codigo_parcela" for "999".<BR><BR>Valores permitidos de 1 a 999.
	 *
	 * @var integer
	 */
	public int $qtde_parcelas;
	/**
	 * Origem do Pedido.<BR><BR>Default: <BR>API - Importado via API.<BR>MLV - Mercado Livre<BR><BR>Esse campo será ignorado no método AlterarPedidoVenda.
	 *
	 * @var string
	 */
	public string $origem_pedido;
	/**
	 * Código do Cenário de Impostos.<BR><BR>Se não informado, será assumido o cenário padrão.
	 *
	 * @var integer
	 */
	public int $codigo_cenario_impostos;
	/**
	 * Pedido Bloqueado pela API.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $bloqueado;
	/**
	 * Importado pela API.<BR>Preenchimento automático - Não informar.
	 *
	 * @var string
	 */
	public string $importado_api;
	/**
	 * DEPRECATED
	 *
	 * @var integer
	 */
	public int $codigo_empresa;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $codigo_empresa_integracao;
	/**
	 * Tipo de desconto para o pedido.<BR><BR>Pode ser: <BR>V - Valor<BR>P - Percentual<BR><BR>Preenchimento opcional.<BR><BR>Ao informar o desconto na capa do pedido o mesmo será distribuído proporcionalmente para os itens. Uma vez realizada a distribuição os valores do desconto serão exibidos apenas nos itens.<BR>   <BR>IMPORTANTE: <BR>- Não será permitido informar desconto na capa caso já exista distribuição pelos itens.<BR>- Na alteração o desconto será aplicado para todos os itens do pedido.
	 *
	 * @var string
	 */
	public string $tipo_desconto_pedido;
	/**
	 * Percentual do desconto do pedido.<BR><BR>Preenchimento opcional.<BR><BR>Ao informar o desconto na capa do pedido o mesmo será distribuído proporcionalmente para os itens. Uma vez realizada a distribuição os valores do desconto serão exibidos apenas nos itens.<BR>   <BR>IMPORTANTE:<BR>- Não será permitido informar desconto na capa caso já exista distribuição pelos itens.<BR>- Na alteração o desconto será aplicado para todos os itens do pedido.
	 *
	 * @var decimal
	 */
	public float $perc_desconto_pedido;
	/**
	 * Valor do desconto do pedido.<BR><BR>Preenchimento opcional.<BR><BR>Ao informar o desconto na capa do pedido o mesmo será distribuído proporcionalmente para os itens. Uma vez realizada a distribuição os valores do desconto serão exibidos apenas nos itens.<BR>   <BR>IMPORTANTE:<BR>- Não será permitido informar desconto na capa caso já exista distribuição pelos itens.<BR>- Na alteração o desconto será aplicado para todos os itens do pedido.<BR>- Se o desconto for superior ao valor do pedido ele não será aplicado.
	 *
	 * @var decimal
	 */
	public float $valor_desconto_pedido;
	/**
	 * Indica que o pedido foi encerrado (S/N).<BR>Tag utilizada apenas nos métodos de listagem e consulta.
	 *
	 * @var string
	 */
	public string $encerrado;
	/**
	 * Descrição do motivo do encerramento.<BR>Tag utilizada apenas nos métodos de listagem e consulta.
	 *
	 * @var string
	 */
	public string $enc_motivo;
	/**
	 * Data de encerramento,<BR>Tag utilizada apenas nos métodos de listagem e consulta.
	 *
	 * @var string
	 */
	public string $enc_data;
	/**
	 * Hora de encerramento,<BR>Tag utilizada apenas nos métodos de listagem e consulta.
	 *
	 * @var string
	 */
	public string $enc_hora;
	/**
	 * Usuário do encerramento,<BR>Tag utilizada apenas nos métodos de listagem e consulta.
	 *
	 * @var string
	 */
	public string $enc_user;
	/**
	 * Indica se o boleto não deve ser gerado para a(s) parcela(s) ao emitir a nota fiscal.<BR><BR>Informe "S" para não gerar o boleto. O padrão é "N".<BR><BR>Quando informado dentro do tag "cabecalho", aplica-se como valor padrão para todas as parcelas, caso não seja especificado individualmente em cada uma.<BR><BR>Quando informado dentro da tag "lista_parcelas", aplica-se individualmente para cada parcela (tem prioridade sobre o valor informado no cabeçalho).<BR><BR>Preenchimento opcional.<BR><BR>Informação localizada na Aba "Parcelas" do Pedido de Venda.
	 *
	 * @var string
	 */
	public string $nao_gerar_boleto;
}
