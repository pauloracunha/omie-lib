<?php

namespace OmieLib\Geral\Produtos;

use OmieLib\Common\OmieFail;

/**
 * Cadastro completo de produtos
 *
 * @pw_element integer $codigo_produto Código do produto.<BR>É o ID do produto e será utilizado apenas nas APIs como chave principal para localizar um produto.<BR><BR>Quando um produto for incluído via API, você receberá um ID para esse novo produto. <BR>Recomendamos que você guarde essa informação no aplicativo que estiver integrando.<BR><BR>Esse campo não deve ser informado na inclusão de produtos. <BR><BR>Essa informação não será exibida nas telas do Omie.
 * @pw_element string $codigo_produto_integracao Código de integração do produto.<BR>É o código do produto no aplicativo que você está integrando ao Omie.<BR>É utilizado basicamente na Inclusão de Produtos via API, para evitar duplicidade de cadastros.<BR><BR>Quando um produto for incluído via API, você receberá um ID para esse novo produto. <BR>Recomendamos que você guarde essa informação no aplicativo que estiver integrando.<BR><BR>O preenchimento desse campo é obrigatório na inclusão de produtos. <BR><BR>Essa informação não será exibida nas telas do Omie.
 * @pw_element string $codigo Código do Produto.<BR><BR>É um código único que identifica o produto no Omie. Se você tem um código SKU (Stock Keeping Unit = Unidade de Manutenção de Estoque) é aqui que ele deve ser informado, pois é essa informação que será exibida na tela do Omie.<BR><BR>Não recomendamos que ele seja utilizado como chave para integração, pois pode ser modificado pelo usuário a qualquer momento. No lugar deste campo, utilize o ID do produto, que você encontra na tag "codigo_produto".
 * @pw_element string $descricao Descrição do produto.<BR><BR>Preenchimento Obrigatório na inclusão.
 * @pw_element string $unidade Código da Unidade.<BR><BR>Preenchimento Obrigatório.
 * @pw_element string $ncm Código da Nomenclatura Comum do Mercosul (NCM).<BR><BR>Preenchimento Obrigatório na Inclusão.
 * @pw_element string $ean Código EAN (GTIN - Global Trade Item Number).<BR><BR>Preenchimento Opcional.
 * @pw_element decimal $valor_unitario Preço Unitário de Venda.<BR><BR>Preenchimento Obrigatório.
 * @pw_element integer $codigo_familia Código da Familia do Produto.<BR><BR>Preenchimento Opcional.
 * @pw_element string $tipoItem Código do Tipo do Item para o SPED.<BR><BR>Preenchimento Opcional.<BR><BR>Pode ser:<BR><BR>00 - Mercadoria para Revenda<BR>01 - Matéria Prima<BR>02 - Embalagem<BR>03 - Produto em Processo<BR>04 - Produto Acabado<BR>05 - Subproduto<BR>06 - Produto Intermediário<BR>07 - Material de Uso e Consumo<BR>08 - Ativo Imobilizado<BR>09 - Serviços<BR>10 - Outros Insumos<BR>99 - Outras
 * @pw_element string $produto_variacao Indica se o Produto Possui Variações.<BR><BR>Campo disponível apenas para consulta.<BR><BR>(S/N) .<BR>
 * @pw_element string $produto_lote Indica se o produto possui lote.<BR>(S/N) .
 * @pw_element string $variacao Indica se o Produto é uma variação de produto.<BR>(S/N) .<BR><BR>No método ListarProdutos, esse campo só será exibido se a tag 'exibir_info_variacoes' for enviada como 'S'.
 * @pw_element integer $id_produto_variacao Código interno do produto variação que deu origem a variação.<BR><BR>Campo disponível apenas para consulta.<BR><BR>No método ListarProdutos, esse campo só será exibido se a tag 'exibir_info_variacoes' for enviada como 'S'.
 * @pw_element recomendacoes_fiscais $recomendacoes_fiscais Recomendações Fiscais.
 * @pw_element decimal $peso_liq Peso Líquido (Kg).<BR><BR>Preenchimento Opcional.<BR><BR>Localizado na aba "Informações Adicionais"
 * @pw_element decimal $peso_bruto Peso Bruto (Kg).<BR><BR>Preenchimento Opcional.<BR><BR>Localizado na aba "Informações Adicionais"
 * @pw_element decimal $altura Altura (centimentos).<BR><BR>Preenchimento Opcional.<BR><BR>Localizado na aba "Informações Adicionais"
 * @pw_element decimal $largura Largura (centimetros)<BR><BR>Preenchimento Opcional.<BR><BR>Localizado na aba "Informações Adicionais"
 * @pw_element decimal $profundidade Profundidade (centimetros).<BR><BR>Preenchimento Opcional.<BR><BR>Localizado na aba "Informações Adicionais"
 * @pw_element string $marca Marca.<BR><BR>Preenchimento Opcional.<BR><BR>Localizado na aba "Informações Adicionais"
 * @pw_element string $modelo Modelo.<BR><BR>Preenchimento Opcional.<BR><BR>Localizado na aba "Informações Adicionais"
 * @pw_element integer $dias_garantia Dias de Garantia.<BR><BR>Preenchimento Opcional.<BR><BR>Localizado na aba "Informações Adicionais"
 * @pw_element integer $dias_crossdocking Dias de Crossdocking.<BR><BR>Preenchimento Opcional.<BR><BR>Localizado na aba "Informações Adicionais"
 * @pw_element string $descr_detalhada Descrição Detalhada para o Produto.<BR><BR>Preenchimento Opcional.
 * @pw_element string $obs_internas Observações Internas.<BR>(ficam registradas apenas no cadastro do produto).<BR><BR>Preenchimento Opcional.
 * @pw_element imagensArray $imagens Lista de imagens do produto.
 * @pw_element videosArray $videos Lista de videos do produto.
 * @pw_element caracteristicasArray $caracteristicas lista de caracteristicas do produto.
 * @pw_element tabelas_precoArray $tabelas_preco Lista de tabelas de preço.
 * @pw_element info $info Informações complemetares do cadastro do produto.
 * @pw_element string $exibir_descricao_nfe Indica se a Descrição Detalhada deve ser exibida nas Informações Adicionais do Item da NF-e (S/N).
 * @pw_element string $exibir_descricao_pedido Indica se a Descrição Detalhada deve ser exibida na impressão do Pedido (S/N).
 * @pw_element medicamento $medicamento Detalhamento específico para cadastro de medicamentos<BR><BR>Obrigatório o preenchimento no caso de medicamentos e produtos farmacêuticos
 * @pw_element combustivel $combustivel Detalhamento específico para cadastro de combustíveis.<BR>
 * @pw_element veiculo $veiculo Detalhamento específico para cadastro de veículos<BR>
 * @pw_element armamento $armamento Detalhamento especifco para cadastro de armamentos.<BR><BR>Descrição completa da arma, de modo a permitir sua perfeita identificação.
 * @pw_element string $cst_icms Código da Situação Tributária do ICMS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
 * @pw_element string $modalidade_icms Modalidade da Base de Cálculo do ICMS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
 * @pw_element string $csosn_icms Código da Situação Tributária para Simples Nacional.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
 * @pw_element decimal $aliquota_icms Alíquota de ICMS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
 * @pw_element decimal $red_base_icms Percentual de redução de base do ICMS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
 * @pw_element string $motivo_deson_icms Motivo da desoneração do ICMS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
 * @pw_element decimal $per_icms_fcp Percentual do Fundo de Combate a Pobreza do ICMS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
 * @pw_element string $codigo_beneficio Código de integração da característica do produto.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o código da característica utilizado no seu aplicativo quando incluir uma característica no Omie. <BR>Assim, poderá utilizar esse campo para resgatar as informações da característica desejada.<BR>Caso informe esse campo, não informe a tag nCodCaract. Caso isso aconteça, o conteúdo dessa tag será desconsiderada.<BR>
 * @pw_element string $cst_pis Código da Situação Tributária do PIS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
 * @pw_element decimal $aliquota_pis Alíquota do PIS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
 * @pw_element decimal $red_base_pis Percentual de redução de base do PIS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
 * @pw_element string $cst_cofins Código da Situação Tributária do COFINS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
 * @pw_element decimal $aliquota_cofins Alíquota do COFINS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
 * @pw_element decimal $red_base_cofins Percentual de redução de base do COFINS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
 * @pw_element string $cfop CFOP do Produto.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
 * @pw_element dadosIbpt $dadosIbpt Dados do IBPT.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.
 * @pw_element string $codInt_familia Código de Integração da Familia do Produto.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.
 * @pw_element string $descricao_familia Descrição da Familia do Produto.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.
 * @pw_element string $bloqueado Indica se o registro está bloqueado (S/N).<BR><BR>Preenchimento Opcional.
 * @pw_element string $bloquear_exclusao Indica se a exclusão do registro está bloqueada (S/N).<BR><BR>Preenchimento Opcional.
 * @pw_element string $importado_api Indica se o registro foi incluído via API (S/N).<BR><BR>Não deve ser informado na Inclusão/Alteração.
 * @pw_element string $inativo Indica se o cadastro do produto está inativo (S/N).<BR><BR>Não deve ser informado na Inclusão/Alteração.
 * @pw_element componentes_kitArray $componentes_kit Componetes do KIT.
 * @pw_element integer $lead_time Lead Time médio de ressuprimento em dias.
 * @pw_element decimal $aliquota_ibpt DEPRECATED.
 * @pw_element string $cest DEPRECATED.
 * @pw_element decimal $quantidade_estoque DEPRECATED.
 * @pw_element decimal $estoque_minimo DEPRECATED.
 * @pw_element string $origem_imposto Origem do Imposto<BR><BR>"NCM" ou "PRD"<BR><BR>Esse campo não deve ser informado na inclusão ou alteração.<BR><BR>Finalidade: Indicar se a regra de imposto utilizada pelos PDV"s foi originada de uma configuração pelo NCM ou por uma configuração específica para o produto.
 * @pw_element string $cst_ibs_cbs Código de Situação Tributária do IBS e CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
 * @pw_element string $class_trib Código de Classificação Tributária do IBS e CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
 * @pw_element decimal $aliquota_ibs_uf Alíquota do IBS de competência das UF.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
 * @pw_element decimal $aliquota_ibs_mun Alíquota do IBS de competência do Município.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
 * @pw_element decimal $perc_reducao_ibs_uf Percentual da redução de alíquota IBS UF.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.<BR>
 * @pw_element decimal $perc_reducao_ibs_mun Percentual da redução de alíquota IBS UF.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.<BR>
 * @pw_element decimal $aliquota_cbs Alíquota da CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.<BR>
 * @pw_element decimal $perc_reducao_cbs Percentual da redução de alíquota do CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.<BR>
 * @pw_complex produto_servico_cadastro
 */
class Produto_servico_cadastro{
	/**
	 * Código do produto.<BR>É o ID do produto e será utilizado apenas nas APIs como chave principal para localizar um produto.<BR><BR>Quando um produto for incluído via API, você receberá um ID para esse novo produto. <BR>Recomendamos que você guarde essa informação no aplicativo que estiver integrando.<BR><BR>Esse campo não deve ser informado na inclusão de produtos. <BR><BR>Essa informação não será exibida nas telas do Omie.
	 *
	 * @var integer
	 */
	public int $codigo_produto;
	/**
	 * Código de integração do produto.<BR>É o código do produto no aplicativo que você está integrando ao Omie.<BR>É utilizado basicamente na Inclusão de Produtos via API, para evitar duplicidade de cadastros.<BR><BR>Quando um produto for incluído via API, você receberá um ID para esse novo produto. <BR>Recomendamos que você guarde essa informação no aplicativo que estiver integrando.<BR><BR>O preenchimento desse campo é obrigatório na inclusão de produtos. <BR><BR>Essa informação não será exibida nas telas do Omie.
	 *
	 * @var string
	 */
	public string $codigo_produto_integracao;
	/**
	 * Código do Produto.<BR><BR>É um código único que identifica o produto no Omie. Se você tem um código SKU (Stock Keeping Unit = Unidade de Manutenção de Estoque) é aqui que ele deve ser informado, pois é essa informação que será exibida na tela do Omie.<BR><BR>Não recomendamos que ele seja utilizado como chave para integração, pois pode ser modificado pelo usuário a qualquer momento. No lugar deste campo, utilize o ID do produto, que você encontra na tag "codigo_produto".
	 *
	 * @var string
	 */
	public string $codigo;
	/**
	 * Descrição do produto.<BR><BR>Preenchimento Obrigatório na inclusão.
	 *
	 * @var string
	 */
	public string $descricao;
	/**
	 * Código da Unidade.<BR><BR>Preenchimento Obrigatório.
	 *
	 * @var string
	 */
	public string $unidade;
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
	 * Preço Unitário de Venda.<BR><BR>Preenchimento Obrigatório.
	 *
	 * @var decimal
	 */
	public float $valor_unitario;
	/**
	 * Código da Familia do Produto.<BR><BR>Preenchimento Opcional.
	 *
	 * @var integer
	 */
	public int $codigo_familia;
	/**
	 * Código do Tipo do Item para o SPED.<BR><BR>Preenchimento Opcional.<BR><BR>Pode ser:<BR><BR>00 - Mercadoria para Revenda<BR>01 - Matéria Prima<BR>02 - Embalagem<BR>03 - Produto em Processo<BR>04 - Produto Acabado<BR>05 - Subproduto<BR>06 - Produto Intermediário<BR>07 - Material de Uso e Consumo<BR>08 - Ativo Imobilizado<BR>09 - Serviços<BR>10 - Outros Insumos<BR>99 - Outras
	 *
	 * @var string
	 */
	public string $tipoItem;
	/**
	 * Indica se o Produto Possui Variações.<BR><BR>Campo disponível apenas para consulta.<BR><BR>(S/N) .<BR>
	 *
	 * @var string
	 */
	public string $produto_variacao;
	/**
	 * Indica se o produto possui lote.<BR>(S/N) .
	 *
	 * @var string
	 */
	public string $produto_lote;
	/**
	 * Indica se o Produto é uma variação de produto.<BR>(S/N) .<BR><BR>No método ListarProdutos, esse campo só será exibido se a tag 'exibir_info_variacoes' for enviada como 'S'.
	 *
	 * @var string
	 */
	public string $variacao;
	/**
	 * Código interno do produto variação que deu origem a variação.<BR><BR>Campo disponível apenas para consulta.<BR><BR>No método ListarProdutos, esse campo só será exibido se a tag 'exibir_info_variacoes' for enviada como 'S'.
	 *
	 * @var integer
	 */
	public int $id_produto_variacao;
	/**
	 * Recomendações Fiscais.
	 *
	 * @var Recomendacoes_fiscais
	 */
	public Recomendacoes_fiscais $recomendacoes_fiscais;
	/**
	 * Peso Líquido (Kg).<BR><BR>Preenchimento Opcional.<BR><BR>Localizado na aba "Informações Adicionais"
	 *
	 * @var decimal
	 */
	public float $peso_liq;
	/**
	 * Peso Bruto (Kg).<BR><BR>Preenchimento Opcional.<BR><BR>Localizado na aba "Informações Adicionais"
	 *
	 * @var decimal
	 */
	public float $peso_bruto;
	/**
	 * Altura (centimentos).<BR><BR>Preenchimento Opcional.<BR><BR>Localizado na aba "Informações Adicionais"
	 *
	 * @var decimal
	 */
	public float $altura;
	/**
	 * Largura (centimetros)<BR><BR>Preenchimento Opcional.<BR><BR>Localizado na aba "Informações Adicionais"
	 *
	 * @var decimal
	 */
	public float $largura;
	/**
	 * Profundidade (centimetros).<BR><BR>Preenchimento Opcional.<BR><BR>Localizado na aba "Informações Adicionais"
	 *
	 * @var decimal
	 */
	public float $profundidade;
	/**
	 * Marca.<BR><BR>Preenchimento Opcional.<BR><BR>Localizado na aba "Informações Adicionais"
	 *
	 * @var string
	 */
	public string $marca;
	/**
	 * Modelo.<BR><BR>Preenchimento Opcional.<BR><BR>Localizado na aba "Informações Adicionais"
	 *
	 * @var string
	 */
	public string $modelo;
	/**
	 * Dias de Garantia.<BR><BR>Preenchimento Opcional.<BR><BR>Localizado na aba "Informações Adicionais"
	 *
	 * @var integer
	 */
	public int $dias_garantia;
	/**
	 * Dias de Crossdocking.<BR><BR>Preenchimento Opcional.<BR><BR>Localizado na aba "Informações Adicionais"
	 *
	 * @var integer
	 */
	public int $dias_crossdocking;
	/**
	 * Descrição Detalhada para o Produto.<BR><BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $descr_detalhada;
	/**
	 * Observações Internas.<BR>(ficam registradas apenas no cadastro do produto).<BR><BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $obs_internas;
	/**
	 * Lista de imagens do produto.
	 *
	 * @var Imagens[]
	 */
	public array $imagens;
	/**
	 * Lista de videos do produto.
	 *
	 * @var Videos[]
	 */
	public array $videos;
	/**
	 * lista de caracteristicas do produto.
	 *
	 * @var Caracteristicas[]
	 */
	public array $caracteristicas;
	/**
	 * Lista de tabelas de preço.
	 *
	 * @var Tabelas_preco[]
	 */
	public array $tabelas_preco;
	/**
	 * Informações complemetares do cadastro do produto.
	 *
	 * @var Info
	 */
	public Info $info;
	/**
	 * Indica se a Descrição Detalhada deve ser exibida nas Informações Adicionais do Item da NF-e (S/N).
	 *
	 * @var string
	 */
	public string $exibir_descricao_nfe;
	/**
	 * Indica se a Descrição Detalhada deve ser exibida na impressão do Pedido (S/N).
	 *
	 * @var string
	 */
	public string $exibir_descricao_pedido;
	/**
	 * Detalhamento específico para cadastro de medicamentos<BR><BR>Obrigatório o preenchimento no caso de medicamentos e produtos farmacêuticos
	 *
	 * @var Medicamento
	 */
	public Medicamento $medicamento;
	/**
	 * Detalhamento específico para cadastro de combustíveis.<BR>
	 *
	 * @var Combustivel
	 */
	public Combustivel $combustivel;
	/**
	 * Detalhamento específico para cadastro de veículos<BR>
	 *
	 * @var Veiculo
	 */
	public Veiculo $veiculo;
	/**
	 * Detalhamento especifco para cadastro de armamentos.<BR><BR>Descrição completa da arma, de modo a permitir sua perfeita identificação.
	 *
	 * @var Armamento
	 */
	public Armamento $armamento;
	/**
	 * Código da Situação Tributária do ICMS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
	 *
	 * @var string
	 */
	public string $cst_icms;
	/**
	 * Modalidade da Base de Cálculo do ICMS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
	 *
	 * @var string
	 */
	public string $modalidade_icms;
	/**
	 * Código da Situação Tributária para Simples Nacional.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
	 *
	 * @var string
	 */
	public string $csosn_icms;
	/**
	 * Alíquota de ICMS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
	 *
	 * @var decimal
	 */
	public float $aliquota_icms;
	/**
	 * Percentual de redução de base do ICMS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
	 *
	 * @var decimal
	 */
	public float $red_base_icms;
	/**
	 * Motivo da desoneração do ICMS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
	 *
	 * @var string
	 */
	public string $motivo_deson_icms;
	/**
	 * Percentual do Fundo de Combate a Pobreza do ICMS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
	 *
	 * @var decimal
	 */
	public float $per_icms_fcp;
	/**
	 * Código de integração da característica do produto.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o código da característica utilizado no seu aplicativo quando incluir uma característica no Omie. <BR>Assim, poderá utilizar esse campo para resgatar as informações da característica desejada.<BR>Caso informe esse campo, não informe a tag nCodCaract. Caso isso aconteça, o conteúdo dessa tag será desconsiderada.<BR>
	 *
	 * @var string
	 */
	public string $codigo_beneficio;
	/**
	 * Código da Situação Tributária do PIS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
	 *
	 * @var string
	 */
	public string $cst_pis;
	/**
	 * Alíquota do PIS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
	 *
	 * @var decimal
	 */
	public float $aliquota_pis;
	/**
	 * Percentual de redução de base do PIS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
	 *
	 * @var decimal
	 */
	public float $red_base_pis;
	/**
	 * Código da Situação Tributária do COFINS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
	 *
	 * @var string
	 */
	public string $cst_cofins;
	/**
	 * Alíquota do COFINS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
	 *
	 * @var decimal
	 */
	public float $aliquota_cofins;
	/**
	 * Percentual de redução de base do COFINS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
	 *
	 * @var decimal
	 */
	public float $red_base_cofins;
	/**
	 * CFOP do Produto.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
	 *
	 * @var string
	 */
	public string $cfop;
	/**
	 * Dados do IBPT.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.
	 *
	 * @var DadosIbpt
	 */
	public DadosIbpt $dadosIbpt;
	/**
	 * Código de Integração da Familia do Produto.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.
	 *
	 * @var string
	 */
	public string $codInt_familia;
	/**
	 * Descrição da Familia do Produto.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.
	 *
	 * @var string
	 */
	public string $descricao_familia;
	/**
	 * Indica se o registro está bloqueado (S/N).<BR><BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $bloqueado;
	/**
	 * Indica se a exclusão do registro está bloqueada (S/N).<BR><BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $bloquear_exclusao;
	/**
	 * Indica se o registro foi incluído via API (S/N).<BR><BR>Não deve ser informado na Inclusão/Alteração.
	 *
	 * @var string
	 */
	public string $importado_api;
	/**
	 * Indica se o cadastro do produto está inativo (S/N).<BR><BR>Não deve ser informado na Inclusão/Alteração.
	 *
	 * @var string
	 */
	public string $inativo;
	/**
	 * Componetes do KIT.
	 *
	 * @var Componentes_kit[]
	 */
	public array $componentes_kit;
	/**
	 * Lead Time médio de ressuprimento em dias.
	 *
	 * @var integer
	 */
	public int $lead_time;
	/**
	 * DEPRECATED.
	 *
	 * @var decimal
	 */
	public float $aliquota_ibpt;
	/**
	 * DEPRECATED.
	 *
	 * @var string
	 */
	public string $cest;
	/**
	 * DEPRECATED.
	 *
	 * @var decimal
	 */
	public float $quantidade_estoque;
	/**
	 * DEPRECATED.
	 *
	 * @var decimal
	 */
	public float $estoque_minimo;
	/**
	 * Origem do Imposto<BR><BR>"NCM" ou "PRD"<BR><BR>Esse campo não deve ser informado na inclusão ou alteração.<BR><BR>Finalidade: Indicar se a regra de imposto utilizada pelos PDV"s foi originada de uma configuração pelo NCM ou por uma configuração específica para o produto.
	 *
	 * @var string
	 */
	public string $origem_imposto;
	/**
	 * Código de Situação Tributária do IBS e CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
	 *
	 * @var string
	 */
	public string $cst_ibs_cbs;
	/**
	 * Código de Classificação Tributária do IBS e CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
	 *
	 * @var string
	 */
	public string $class_trib;
	/**
	 * Alíquota do IBS de competência das UF.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
	 *
	 * @var decimal
	 */
	public float $aliquota_ibs_uf;
	/**
	 * Alíquota do IBS de competência do Município.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.
	 *
	 * @var decimal
	 */
	public float $aliquota_ibs_mun;
	/**
	 * Percentual da redução de alíquota IBS UF.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.<BR>
	 *
	 * @var decimal
	 */
	public float $perc_reducao_ibs_uf;
	/**
	 * Percentual da redução de alíquota IBS UF.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.<BR>
	 *
	 * @var decimal
	 */
	public float $perc_reducao_ibs_mun;
	/**
	 * Alíquota da CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.<BR>
	 *
	 * @var decimal
	 */
	public float $aliquota_cbs;
	/**
	 * Percentual da redução de alíquota do CBS.<BR><BR>Não deve ser informado na Inclusão/Alteração.<BR>Informação retornada apenas para consultas do PDV.<BR>Utiliza o Cenário de Impostos Padrão.<BR>
	 *
	 * @var decimal
	 */
	public float $perc_reducao_cbs;
}
