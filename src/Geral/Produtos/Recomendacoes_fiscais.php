<?php

namespace OmieLib\Geral\Produtos;

use OmieLib\Common\OmieFail;

/**
 * Recomendações Fiscais.
 *
 * @pw_element string $origem_mercadoria Origem da Mercadoria.<BR><BR>Preenchimento Opcional.<BR><BR>Pode ser:<BR>0 - Nacional, exceto as indicadas nos códigos 3, 4, 5 e 8<BR>1 - Estrangeira - Importação direta, exceto a indicada no código 6<BR>2 - Estrangeira - Adquirida no mercado interno, exceto a indicada no código 7<BR>3 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 40% e inferior ou igual a 70<BR>4 - Nacional, cuja produção tenha sido feita em conformidade com os processos produtivos básicos de que tratam as legislações citadas nos Ajustes<BR>5 - Nacional, mercadoria ou bem com Conteúdo de Importação inferior ou igual a 40<BR>6 - Estrangeira - Importação direta, sem similar nacional, constante em lista da CAMEX e gás natural<BR>7 - Estrangeira - Adquirida no mercado interno, sem similar nacional, constante em lista da CAMEX e gás natural<BR>8 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 70<BR>
 * @pw_element integer $id_preco_tabelado ID do Preço tabelado (Pauta).<BR><BR>Preenchimento Opcional.
 * @pw_element string $id_cest Código do CEST.<BR>(Código Especificador da Substituíção Tributária).<BR><BR>Preenchimento Opcional.<BR><BR>Formato: 99.999.99
 * @pw_element string $cupom_fiscal Indica se o produto é comercializado via PDV.<BR><BR>Através de emissão de Cupom Fiscal ECF, SAT ou NFC-e.<BR><BR>Preenchimento opcional.<BR><BR>Preencher com "S" ou "N".
 * @pw_element string $market_place Indica se o produto será comercializado via Market Place ou e-commerce (S/N)<BR><BR>Preenchimento opcional.<BR><BR>Preencher com "S" ou "N".
 * @pw_element string $indicador_escala Indicador de Produção em Escala Relevante.<BR><BR>Pode ser:<BR>"S" para Produzido em Escala Relevante.<BR>"N" para Produzido em Escala NÃO Relevante.
 * @pw_element string $cnpj_fabricante CNPJ do Fabricante da Mercadoria.<BR><BR>Preenchimento opcional.
 * @pw_complex recomendacoes_fiscais
 */
class Recomendacoes_fiscais{
	/**
	 * Origem da Mercadoria.<BR><BR>Preenchimento Opcional.<BR><BR>Pode ser:<BR>0 - Nacional, exceto as indicadas nos códigos 3, 4, 5 e 8<BR>1 - Estrangeira - Importação direta, exceto a indicada no código 6<BR>2 - Estrangeira - Adquirida no mercado interno, exceto a indicada no código 7<BR>3 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 40% e inferior ou igual a 70<BR>4 - Nacional, cuja produção tenha sido feita em conformidade com os processos produtivos básicos de que tratam as legislações citadas nos Ajustes<BR>5 - Nacional, mercadoria ou bem com Conteúdo de Importação inferior ou igual a 40<BR>6 - Estrangeira - Importação direta, sem similar nacional, constante em lista da CAMEX e gás natural<BR>7 - Estrangeira - Adquirida no mercado interno, sem similar nacional, constante em lista da CAMEX e gás natural<BR>8 - Nacional, mercadoria ou bem com Conteúdo de Importação superior a 70<BR>
	 *
	 * @var string
	 */
	public string $origem_mercadoria;
	/**
	 * ID do Preço tabelado (Pauta).<BR><BR>Preenchimento Opcional.
	 *
	 * @var integer
	 */
	public int $id_preco_tabelado;
	/**
	 * Código do CEST.<BR>(Código Especificador da Substituíção Tributária).<BR><BR>Preenchimento Opcional.<BR><BR>Formato: 99.999.99
	 *
	 * @var string
	 */
	public string $id_cest;
	/**
	 * Indica se o produto é comercializado via PDV.<BR><BR>Através de emissão de Cupom Fiscal ECF, SAT ou NFC-e.<BR><BR>Preenchimento opcional.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $cupom_fiscal;
	/**
	 * Indica se o produto será comercializado via Market Place ou e-commerce (S/N)<BR><BR>Preenchimento opcional.<BR><BR>Preencher com "S" ou "N".
	 *
	 * @var string
	 */
	public string $market_place;
	/**
	 * Indicador de Produção em Escala Relevante.<BR><BR>Pode ser:<BR>"S" para Produzido em Escala Relevante.<BR>"N" para Produzido em Escala NÃO Relevante.
	 *
	 * @var string
	 */
	public string $indicador_escala;
	/**
	 * CNPJ do Fabricante da Mercadoria.<BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $cnpj_fabricante;
}
