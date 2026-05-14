<?php

namespace OmieLib\Geral\Produtos;

use OmieLib\Common\OmieFail;

/**
 * Lista os produtos cadastrados
 *
 * @pw_element integer $pagina Número da página retornada
 * @pw_element integer $registros_por_pagina Número de registros retornados na página.
 * @pw_element string $apenas_importado_api Exibir apenas os registros gerados pela API.<BR><BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
 * @pw_element string $ordenar_por Ordem de exibição dos dados. Padrão: Código.
 * @pw_element string $ordem_decrescente Se a lista será apresentada em ordem decrescente (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
 * @pw_element string $filtrar_por_data_de Filtrar os registros a partir de uma data.<BR><BR>Preenchimento Opcional.<BR><BR>Formato: "dd/mm/aaaa"
 * @pw_element string $filtrar_por_hora_de Filtrar a partir da hora.<BR><BR>Preenchimento Opcional.<BR><BR>Formato: "hh:mm:ss"
 * @pw_element string $filtrar_por_data_ate Filtrar os registros até uma data.<BR><BR>Preenchimento Opcional.<BR><BR>Formato: "dd/mm/aaaa"
 * @pw_element string $filtrar_por_hora_ate Filtrar até a hora.<BR><BR>Preenchimento Opcional.<BR><BR>Formato: "hh:mm:ss"
 * @pw_element string $filtrar_apenas_inclusao Filtrar apenas os registros incluídos (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
 * @pw_element string $filtrar_apenas_alteracao Filtrar apenas os registros alterados (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
 * @pw_element string $filtrar_apenas_omiepdv Filtrar apenas produtos marcados para venda via PDV.<BR><BR>ATENÇÃO:<BR>Todos os PDVs integrados devem preencher esse campo com "S".<BR>O preenchimento desse campo é obrigatório e o seu padrão é "S".<BR>Quando preenchido como "S" filtra apenas o produtos que tenham configuração de impostos definidas para o PDV.<BR><BR>Preenchimento Obrigatório.<BR><BR>Preencher com "S" ou "N".
 * @pw_element string $filtrar_apenas_familia Filtrar por ID da Familia de Produto.<BR><BR>Preenchimento Opcional.
 * @pw_element string $filtrar_apenas_tipo Código do Tipo do Item para o SPED.<BR><BR>Preenchimento Opcional.<BR><BR>Pode ser:<BR><BR>00 - Mercadoria para Revenda<BR>01 - Matéria Prima<BR>02 - Embalagem<BR>03 - Produto em Processo<BR>04 - Produto Acabado<BR>05 - Subproduto<BR>06 - Produto Intermediário<BR>07 - Material de Uso e Consumo<BR>08 - Ativo Imobilizado<BR>09 - Serviços<BR>10 - Outros Insumos<BR>99 - Outras
 * @pw_element string $filtrar_apenas_descricao Filtro pela descrição do produto.<BR><BR>Preenchimento Opcional.<BR><BR>Para filtrar utilize:<BR><BR>"TEXTO" - Para pesquisa exata.<BR>"TEXTO%" - Para pesquisa começando com.<BR>"%TEXTO" - Para pesquisa terminando com.<BR>"%TEXTO%" - Para pesquisa contendo.
 * @pw_element string $filtrar_apenas_marketplace Filtrar apenas produtos marcados para venda via Market Place ou e-Commerce.<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
 * @pw_element string $filtrar_apenas_pdv Filtrar apenas produtos marcados para venda via Ponto de Venda (PDV).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
 * @pw_element string $exibir_caracteristicas Exibir as características do produto (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
 * @pw_element string $exibir_tabelas_preco Exibir as tabelas de preço do produto (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
 * @pw_element caracteristicasArray $caracteristicas lista de caracteristicas do produto.
 * @pw_element produtosPorCodigoArray $produtosPorCodigo Filtro por código do produto.<BR><BR>Preenchimento Opcional.
 * @pw_element string $inativo Indica se o cadastro do produto está inativo (S/N).<BR><BR>Não deve ser informado na Inclusão/Alteração.
 * @pw_element string $ncm Código da Nomenclatura Comum do Mercosul (NCM).<BR><BR>Preenchimento Obrigatório na Inclusão.
 * @pw_element string $ean Código EAN (GTIN - Global Trade Item Number).<BR><BR>Preenchimento Opcional.
 * @pw_element string $ordem_descrescente DEPRECATED.
 * @pw_element string $exibir_obs Exibir as observações do produto (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
 * @pw_element string $exibir_kit Exibir os componentes do KIT (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
 * @pw_element string $exibir_info_variacoes Opcional. Indica se deve retornar informações sobre as variações de produto. <BR><BR>Preencher com S/N.<BR><BR>Disponível apenas para o método ListarProdutos.
 * @pw_complex produto_servico_list_request
 */
class Produto_servico_list_request{
	/**
	 * Número da página retornada
	 *
	 * @var integer
	 */
	public int $pagina;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $registros_por_pagina;
	/**
	 * Exibir apenas os registros gerados pela API.<BR><BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
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
	 * Se a lista será apresentada em ordem decrescente (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $ordem_decrescente;
	/**
	 * Filtrar os registros a partir de uma data.<BR><BR>Preenchimento Opcional.<BR><BR>Formato: "dd/mm/aaaa"
	 *
	 * @var string
	 */
	public string $filtrar_por_data_de;
	/**
	 * Filtrar a partir da hora.<BR><BR>Preenchimento Opcional.<BR><BR>Formato: "hh:mm:ss"
	 *
	 * @var string
	 */
	public string $filtrar_por_hora_de;
	/**
	 * Filtrar os registros até uma data.<BR><BR>Preenchimento Opcional.<BR><BR>Formato: "dd/mm/aaaa"
	 *
	 * @var string
	 */
	public string $filtrar_por_data_ate;
	/**
	 * Filtrar até a hora.<BR><BR>Preenchimento Opcional.<BR><BR>Formato: "hh:mm:ss"
	 *
	 * @var string
	 */
	public string $filtrar_por_hora_ate;
	/**
	 * Filtrar apenas os registros incluídos (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $filtrar_apenas_inclusao;
	/**
	 * Filtrar apenas os registros alterados (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $filtrar_apenas_alteracao;
	/**
	 * Filtrar apenas produtos marcados para venda via PDV.<BR><BR>ATENÇÃO:<BR>Todos os PDVs integrados devem preencher esse campo com "S".<BR>O preenchimento desse campo é obrigatório e o seu padrão é "S".<BR>Quando preenchido como "S" filtra apenas o produtos que tenham configuração de impostos definidas para o PDV.<BR><BR>Preenchimento Obrigatório.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $filtrar_apenas_omiepdv;
	/**
	 * Filtrar por ID da Familia de Produto.<BR><BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $filtrar_apenas_familia;
	/**
	 * Código do Tipo do Item para o SPED.<BR><BR>Preenchimento Opcional.<BR><BR>Pode ser:<BR><BR>00 - Mercadoria para Revenda<BR>01 - Matéria Prima<BR>02 - Embalagem<BR>03 - Produto em Processo<BR>04 - Produto Acabado<BR>05 - Subproduto<BR>06 - Produto Intermediário<BR>07 - Material de Uso e Consumo<BR>08 - Ativo Imobilizado<BR>09 - Serviços<BR>10 - Outros Insumos<BR>99 - Outras
	 *
	 * @var string
	 */
	public string $filtrar_apenas_tipo;
	/**
	 * Filtro pela descrição do produto.<BR><BR>Preenchimento Opcional.<BR><BR>Para filtrar utilize:<BR><BR>"TEXTO" - Para pesquisa exata.<BR>"TEXTO%" - Para pesquisa começando com.<BR>"%TEXTO" - Para pesquisa terminando com.<BR>"%TEXTO%" - Para pesquisa contendo.
	 *
	 * @var string
	 */
	public string $filtrar_apenas_descricao;
	/**
	 * Filtrar apenas produtos marcados para venda via Market Place ou e-Commerce.<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $filtrar_apenas_marketplace;
	/**
	 * Filtrar apenas produtos marcados para venda via Ponto de Venda (PDV).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $filtrar_apenas_pdv;
	/**
	 * Exibir as características do produto (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $exibir_caracteristicas;
	/**
	 * Exibir as tabelas de preço do produto (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $exibir_tabelas_preco;
	/**
	 * lista de caracteristicas do produto.
	 *
	 * @var Caracteristicas[]
	 */
	public array $caracteristicas;
	/**
	 * Filtro por código do produto.<BR><BR>Preenchimento Opcional.
	 *
	 * @var ProdutosPorCodigo[]
	 */
	public array $produtosPorCodigo;
	/**
	 * Indica se o cadastro do produto está inativo (S/N).<BR><BR>Não deve ser informado na Inclusão/Alteração.
	 *
	 * @var string
	 */
	public string $inativo;
	/**
	 * Código da Nomenclatura Comum do Mercosul (NCM).<BR><BR>Preenchimento Obrigatório na Inclusão.
	 *
	 * @var string
	 */
	public string $ncm;
	/**
	 * Código EAN (GTIN - Global Trade Item Number).<BR><BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $ean;
	/**
	 * DEPRECATED.
	 *
	 * @var string
	 */
	public string $ordem_descrescente;
	/**
	 * Exibir as observações do produto (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $exibir_obs;
	/**
	 * Exibir os componentes do KIT (S/N).<BR><BR>Preenchimento Opcional.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $exibir_kit;
	/**
	 * Opcional. Indica se deve retornar informações sobre as variações de produto. <BR><BR>Preencher com S/N.<BR><BR>Disponível apenas para o método ListarProdutos.
	 *
	 * @var string
	 */
	public string $exibir_info_variacoes;
}
