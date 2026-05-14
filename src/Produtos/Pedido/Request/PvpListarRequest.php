<?php

namespace OmieLib\Produtos\Pedido\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Pedido\Agropecuario;
use OmieLib\Produtos\Pedido\Cabecalho;
use OmieLib\Produtos\Pedido\Cbs;
use OmieLib\Produtos\Pedido\Cliente_simul;
use OmieLib\Produtos\Pedido\Cofins_padrao;
use OmieLib\Produtos\Pedido\Cofins_st;
use OmieLib\Produtos\Pedido\Combustivel;
use OmieLib\Produtos\Pedido\Csll;
use OmieLib\Produtos\Pedido\Departamentos;
use OmieLib\Produtos\Pedido\Det;
use OmieLib\Produtos\Pedido\Det_simul;
use OmieLib\Produtos\Pedido\Det_simul_resp;
use OmieLib\Produtos\Pedido\Exportacao;
use OmieLib\Produtos\Pedido\Frete;
use OmieLib\Produtos\Pedido\Frete_simul;
use OmieLib\Produtos\Pedido\Ibs;
use OmieLib\Produtos\Pedido\Ibs_cbs;
use OmieLib\Produtos\Pedido\Icms;
use OmieLib\Produtos\Pedido\Icms_efet;
use OmieLib\Produtos\Pedido\Icms_ie;
use OmieLib\Produtos\Pedido\Icms_retido;
use OmieLib\Produtos\Pedido\Icms_sn;
use OmieLib\Produtos\Pedido\Icms_st;
use OmieLib\Produtos\Pedido\Ide;
use OmieLib\Produtos\Pedido\Imposto;
use OmieLib\Produtos\Pedido\Inf_adic;
use OmieLib\Produtos\Pedido\InfoCadastro;
use OmieLib\Produtos\Pedido\Informacoes_adicionais;
use OmieLib\Produtos\Pedido\Inss;
use OmieLib\Produtos\Pedido\Ipi;
use OmieLib\Produtos\Pedido\Irrf;
use OmieLib\Produtos\Pedido\Iss;
use OmieLib\Produtos\Pedido\Itens;
use OmieLib\Produtos\Pedido\Lancamentos;
use OmieLib\Produtos\Pedido\ListaNfe;
use OmieLib\Produtos\Pedido\Lista_parcelas;
use OmieLib\Produtos\Pedido\Lote_validade;
use OmieLib\Produtos\Pedido\Market_place;
use OmieLib\Produtos\Pedido\Mensagens;
use OmieLib\Produtos\Pedido\NfRelacionada;
use OmieLib\Produtos\Pedido\NrCupomFiscal;
use OmieLib\Produtos\Pedido\NrModelo1_1A;
use OmieLib\Produtos\Pedido\NrNF;
use OmieLib\Produtos\Pedido\NrProdutorRural;
use OmieLib\Produtos\Pedido\Observacao;
use OmieLib\Produtos\Pedido\Observacoes;
use OmieLib\Produtos\Pedido\Outros_detalhes;
use OmieLib\Produtos\Pedido\Parcela;
use OmieLib\Produtos\Pedido\PedidoVendaProdutoJsonClient;
use OmieLib\Produtos\Pedido\Pedido_venda_produto;
use OmieLib\Produtos\Pedido\Pedido_venda_produto_response;
use OmieLib\Produtos\Pedido\Pis_padrao;
use OmieLib\Produtos\Pedido\Pis_st;
use OmieLib\Produtos\Pedido\Produto;
use OmieLib\Produtos\Pedido\Produto_simul;
use OmieLib\Produtos\Pedido\Produto_simul_resp;
use OmieLib\Produtos\Pedido\Rastreabilidade;
use OmieLib\Produtos\Pedido\Response\PvpAlterarPedFatResponse;
use OmieLib\Produtos\Pedido\Response\PvpConsultarResponse;
use OmieLib\Produtos\Pedido\Response\PvpDevolverResponse;
use OmieLib\Produtos\Pedido\Response\PvpExcluirResponse;
use OmieLib\Produtos\Pedido\Response\PvpListarResponse;
use OmieLib\Produtos\Pedido\Response\PvpSimularImpResponse;
use OmieLib\Produtos\Pedido\Response\PvpStatusResponse;
use OmieLib\Produtos\Pedido\Response\PvpTrocarEtapaResponse;
use OmieLib\Produtos\Pedido\Total_pedido;
use OmieLib\Produtos\Pedido\Trib_reg;
use OmieLib\Produtos\Pedido\Tributavel;

/**
 * Solicitação de listagem de pedidos de venda.
 *
 * @pw_element integer $pagina Número da página que será listada.
 * @pw_element integer $registros_por_pagina Número de registros retornados
 * @pw_element string $apenas_importado_api DEPRECATED
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $filtrar_por_data_de Filtra os registros a partir da data.
 * @pw_element string $filtrar_por_data_ate Filtrar lançamentos incluídos e/ou alterados até a data
 * @pw_element string $filtrar_por_hora_de Filtra os registros a partir da hora específicada.
 * @pw_element string $filtrar_por_hora_ate Filtra os registros até a hora específicada.
 * @pw_element string $filtrar_apenas_inclusao Filtrar apenas registros incluídos (S/N)
 * @pw_element string $filtrar_apenas_alteracao Filtrar apenas registros alterados (S/N)
 * @pw_element integer $filtrar_por_cliente Filtra os registros do cliente específicado.
 * @pw_element integer $filtrar_por_vendedor Filtra os registros do vendedor específicado.
 * @pw_element integer $filtrar_por_projeto Filtra os registros do projeto específicado.
 * @pw_element string $etapa Etapa do pedido de venda.<BR>Preenchimento Obrigatório.<BR><BR>Esse campo indica em que coluna o pedido de venda irá figurar no processo de faturamento do Omie.<BR><BR>Utilize a tag "codigo" do método "ListarEtapasFaturamento" da API<BR>http://app.omie.com.br/api/v1/produtos/etapafat/<BR>para obter essa informação.<BR><BR>Os valores são fixos, mas as descrições (funções atribuídas a cada coluna pode mudar. A API irá indicar a descrição de cada coluna.<BR><BR>Os valores disponíveis para esse campo podem ser:<BR><BR>"10" - Primeira coluna<BR>"20" - Segunda coluna<BR>"30" - Terceira coluna<BR>"40" - Quarta coluna<BR>"50" - Faturar<BR>
 * @pw_element integer $numero_pedido_de Filtra os registros a partir do número do pedido específicado.
 * @pw_element integer $numero_pedido_ate Filtra os registros até o número do pedido específicado.
 * @pw_element string $apenas_resumo Exibir apenas o resumo do pedido de vendas.<BR><BR>Preencher com "S" ou "N".
 * @pw_element string $data_previsao_de Data de Previsão do faturamento inicio.
 * @pw_element string $data_previsao_ate Data de Previsão do faturamento final.
 * @pw_element string $data_faturamento_de Data de Faturamento inicial.
 * @pw_element string $data_faturamento_ate Data de Faturamento final.
 * @pw_element string $data_emissao_de DEPRECATED
 * @pw_element string $data_emissao_ate DEPRECATED
 * @pw_element string $data_cancelamento_de Data de Cancelamento inicial.
 * @pw_element string $data_cancelamento_ate Data de Cancelamento final.
 * @pw_element string $status_pedido Status do Pedido.<BR><BR>FATURADO<BR>CANCELADO<BR>AUTORIZADO<BR>DENEGADO<BR>DEVOLVIDO
 * @pw_element string $ordem_descrescente DEPRECATED
 * @pw_complex pvpListarRequest
 */
class PvpListarRequest{
	/**
	 * Número da página que será listada.
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número de registros retornados
	 *
	 * @var integer
	 */
	public int $registros_por_pagina;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $apenas_importado_api;
	/**
	 * Ordem de exibição dos dados. Padrão: Código.
	 *
	 * @var string
	 */
	public string $ordenar_por;
	/**
	 * Filtra os registros a partir da data.
	 *
	 * @var string
	 */
	public string $filtrar_por_data_de;
	/**
	 * Filtrar lançamentos incluídos e/ou alterados até a data
	 *
	 * @var string
	 */
	public string $filtrar_por_data_ate;
	/**
	 * Filtra os registros a partir da hora específicada.
	 *
	 * @var string
	 */
	public string $filtrar_por_hora_de;
	/**
	 * Filtra os registros até a hora específicada.
	 *
	 * @var string
	 */
	public string $filtrar_por_hora_ate;
	/**
	 * Filtrar apenas registros incluídos (S/N)
	 *
	 * @var string
	 */
	public string $filtrar_apenas_inclusao;
	/**
	 * Filtrar apenas registros alterados (S/N)
	 *
	 * @var string
	 */
	public string $filtrar_apenas_alteracao;
	/**
	 * Filtra os registros do cliente específicado.
	 *
	 * @var integer
	 */
	public int $filtrar_por_cliente;
	/**
	 * Filtra os registros do vendedor específicado.
	 *
	 * @var integer
	 */
	public int $filtrar_por_vendedor;
	/**
	 * Filtra os registros do projeto específicado.
	 *
	 * @var integer
	 */
	public int $filtrar_por_projeto;
	/**
	 * Etapa do pedido de venda.<BR>Preenchimento Obrigatório.<BR><BR>Esse campo indica em que coluna o pedido de venda irá figurar no processo de faturamento do Omie.<BR><BR>Utilize a tag "codigo" do método "ListarEtapasFaturamento" da API<BR>http://app.omie.com.br/api/v1/produtos/etapafat/<BR>para obter essa informação.<BR><BR>Os valores são fixos, mas as descrições (funções atribuídas a cada coluna pode mudar. A API irá indicar a descrição de cada coluna.<BR><BR>Os valores disponíveis para esse campo podem ser:<BR><BR>"10" - Primeira coluna<BR>"20" - Segunda coluna<BR>"30" - Terceira coluna<BR>"40" - Quarta coluna<BR>"50" - Faturar<BR>
	 *
	 * @var string
	 */
	public string $etapa;
	/**
	 * Filtra os registros a partir do número do pedido específicado.
	 *
	 * @var integer
	 */
	public int $numero_pedido_de;
	/**
	 * Filtra os registros até o número do pedido específicado.
	 *
	 * @var integer
	 */
	public int $numero_pedido_ate;
	/**
	 * Exibir apenas o resumo do pedido de vendas.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $apenas_resumo;
	/**
	 * Data de Previsão do faturamento inicio.
	 *
	 * @var string
	 */
	public string $data_previsao_de;
	/**
	 * Data de Previsão do faturamento final.
	 *
	 * @var string
	 */
	public string $data_previsao_ate;
	/**
	 * Data de Faturamento inicial.
	 *
	 * @var string
	 */
	public string $data_faturamento_de;
	/**
	 * Data de Faturamento final.
	 *
	 * @var string
	 */
	public string $data_faturamento_ate;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $data_emissao_de;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $data_emissao_ate;
	/**
	 * Data de Cancelamento inicial.
	 *
	 * @var string
	 */
	public string $data_cancelamento_de;
	/**
	 * Data de Cancelamento final.
	 *
	 * @var string
	 */
	public string $data_cancelamento_ate;
	/**
	 * Status do Pedido.<BR><BR>FATURADO<BR>CANCELADO<BR>AUTORIZADO<BR>DENEGADO<BR>DEVOLVIDO
	 *
	 * @var string
	 */
	public string $status_pedido;
	/**
	 * DEPRECATED
	 *
	 * @var string
	 */
	public string $ordem_descrescente;
}
