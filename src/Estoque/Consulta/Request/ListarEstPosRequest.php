<?php

namespace OmieLib\Estoque\Consulta\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Consulta\ConsultaEstoqueJsonClient;
use OmieLib\Estoque\Consulta\Estoque_listar_pendente_request;
use OmieLib\Estoque\Consulta\Estoque_listar_pendente_response;
use OmieLib\Estoque\Consulta\Estoque_mov_consulta_cadastro;
use OmieLib\Estoque\Consulta\Estoque_mov_consulta_cadastro_resposta;
use OmieLib\Estoque\Consulta\Lista_produtos;
use OmieLib\Estoque\Consulta\MovPeriodo;
use OmieLib\Estoque\Consulta\MovProduto;
use OmieLib\Estoque\Consulta\MovProdutoListar;
use OmieLib\Estoque\Consulta\Produtos;
use OmieLib\Estoque\Consulta\Response\EstoqueMovimentoResponse;
use OmieLib\Estoque\Consulta\Response\ListarEstPosResponse;
use OmieLib\Estoque\Consulta\Response\ListarMovEstoqueResponse;
use OmieLib\Estoque\Consulta\Saldo_pendente_lista;

/**
 * Solicitação da listagem da posição do estoque.
 *
 * @pw_element integer $nPagina Número da página retornada.
 * @pw_element integer $nRegPorPagina Número de registros retornados na página.
 * @pw_element string $dDataPosicao Data do Movimento
 * @pw_element string $cExibeTodos Exibir todos os produtos mesmo que não haja movimento.<BR>Padrão: "N"
 * @pw_element string $cExibeApenasPDV Exibe apenas os produtos marcados para PDV.<BR><BR>Esse recurso funciona apenas se o cenário de impostos estiver habilitado.<BR><BR>Padrão: "N"
 * @pw_element string $cExibeApenasMarketplace Exibe apenas os produtos marcados para venda como Marketplace.<BR><BR>Padrão: "N"
 * @pw_element integer $codigo_local_estoque Código do local do estoque.
 * @pw_element string $lista_local_estoque Lista de Códigos de Locais do Estoque.<BR><BR>Preenchimento opcional.<BR><BR>Separar os IDs por virgula (,) ou informar "TODOS" para listar todos os estoques de estoque.
 * @pw_element string $cTipoItem Código do Tipo do Item.<BR><BR>Informação localizada na aba Recomendações Fiscais do cadastro do produto.<BR><BR>Preenchimento Opcional.<BR><BR>Pode ser:<BR><BR>00 - Mercadoria para Revenda<BR>01 - Matéria Prima<BR>02 - Embalagem<BR>03 - Produto em Processo<BR>04 - Produto Acabado<BR>05 - Subproduto<BR>06 - Produto Intermediário<BR>07 - Material de Uso e Consumo<BR>08 - Ativo Imobilizado<BR>09 - Serviços<BR>10 - Outros Insumos<BR>99 - Outras<BR>KT - Kit
 * @pw_element lista_produtosArray $lista_produtos Lista de produtos por ID, Código de Integração ou código do produto.
 * @pw_complex ListarEstPosRequest
 */
class ListarEstPosRequest{
	/**
	 * Número da página retornada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
	/**
	 * Data do Movimento
	 *
	 * @var string
	 */
	public string $dDataPosicao;
	/**
	 * Exibir todos os produtos mesmo que não haja movimento.<BR>Padrão: "N"
	 *
	 * @var string
	 */
	public string $cExibeTodos;
	/**
	 * Exibe apenas os produtos marcados para PDV.<BR><BR>Esse recurso funciona apenas se o cenário de impostos estiver habilitado.<BR><BR>Padrão: "N"
	 *
	 * @var string
	 */
	public string $cExibeApenasPDV;
	/**
	 * Exibe apenas os produtos marcados para venda como Marketplace.<BR><BR>Padrão: "N"
	 *
	 * @var string
	 */
	public string $cExibeApenasMarketplace;
	/**
	 * Código do local do estoque.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Lista de Códigos de Locais do Estoque.<BR><BR>Preenchimento opcional.<BR><BR>Separar os IDs por virgula (,) ou informar "TODOS" para listar todos os estoques de estoque.
	 *
	 * @var string
	 */
	public string $lista_local_estoque;
	/**
	 * Código do Tipo do Item.<BR><BR>Informação localizada na aba Recomendações Fiscais do cadastro do produto.<BR><BR>Preenchimento Opcional.<BR><BR>Pode ser:<BR><BR>00 - Mercadoria para Revenda<BR>01 - Matéria Prima<BR>02 - Embalagem<BR>03 - Produto em Processo<BR>04 - Produto Acabado<BR>05 - Subproduto<BR>06 - Produto Intermediário<BR>07 - Material de Uso e Consumo<BR>08 - Ativo Imobilizado<BR>09 - Serviços<BR>10 - Outros Insumos<BR>99 - Outras<BR>KT - Kit
	 *
	 * @var string
	 */
	public string $cTipoItem;
	/**
	 * Lista de produtos por ID, Código de Integração ou código do produto.
	 *
	 * @var Lista_produtos[]
	 */
	public array $lista_produtos;
}
