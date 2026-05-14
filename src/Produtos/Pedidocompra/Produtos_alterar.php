<?php

namespace OmieLib\Produtos\Pedidocompra;

use OmieLib\Common\OmieFail;

/**
 * Produtos do Pedido de Compra
 *
 * @pw_element string $cCodIntItem Código de integração do item do pedido de compra (este é o código do item no seu sistema)
 * @pw_element integer $nCodItem Código interno do item do pedido de compra (este é o código do item no Omie)
 * @pw_element string $cCodIntProd Código de integração do cadastro do produto (este é o código do produto no seu sistema)
 * @pw_element integer $nCodProd Código interno do cadastro do produto (este é o código do produto no Omie)
 * @pw_element string $cProduto Código do item no pedido (pode ser o mesmo código que aparece na NF-e do fornecedor)
 * @pw_element string $cDescricao Descrição do item no pedido
 * @pw_element string $cNCM Código NCM do item
 * @pw_element string $cUnidade Unidade do item no pedido
 * @pw_element string $cEAN Código EAN / GTIN do item no pedido
 * @pw_element decimal $nPesoLiq Peso líquido (Kg)
 * @pw_element decimal $nPesoBruto Peso bruto (Kg)
 * @pw_element decimal $nQtde Quantidade do item no pedido
 * @pw_element decimal $nValUnit Valor unitário do item no pedido
 * @pw_element decimal $nDesconto Valor do desconto do item no pedido
 * @pw_element decimal $nValorIcms Valor do ICMS
 * @pw_element decimal $nValorSt Valor do ICMS ST
 * @pw_element decimal $nValorIpi Valor do IPI
 * @pw_element decimal $nValorPis Valor do PIS
 * @pw_element decimal $nValorCofins Valor do COFINS
 * @pw_element string $cObs Observação do item no pedido (elas serão impressas no pedido enviado ao fornecedor)
 * @pw_element string $cMkpAtuPv Indica que deve atualizar o preço de venda do produto no recebimento
 * @pw_element string $cMkpAtuSm Indica que deve atualizar o preço apenas se for maior que o atual
 * @pw_element decimal $nMkpPerc Percentual a ser utilizado para a atualização do preço de venda do produto
 * @pw_element integer $codigo_local_estoque Código do Local do Estoque.<BR><BR>Preenchimento opcional.<BR><BR>Caso não informado assumirá o Local do Estoque padrão.
 * @pw_element string $cCodCateg Código da categoria de compra do item
 * @pw_complex produtos_alterar
 */
class Produtos_alterar{
	/**
	 * Código de integração do item do pedido de compra (este é o código do item no seu sistema)
	 *
	 * @var string
	 */
	public string $cCodIntItem;
	/**
	 * Código interno do item do pedido de compra (este é o código do item no Omie)
	 *
	 * @var integer
	 */
	public int $nCodItem;
	/**
	 * Código de integração do cadastro do produto (este é o código do produto no seu sistema)
	 *
	 * @var string
	 */
	public string $cCodIntProd;
	/**
	 * Código interno do cadastro do produto (este é o código do produto no Omie)
	 *
	 * @var integer
	 */
	public int $nCodProd;
	/**
	 * Código do item no pedido (pode ser o mesmo código que aparece na NF-e do fornecedor)
	 *
	 * @var string
	 */
	public string $cProduto;
	/**
	 * Descrição do item no pedido
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Código NCM do item
	 *
	 * @var string
	 */
	public string $cNCM;
	/**
	 * Unidade do item no pedido
	 *
	 * @var string
	 */
	public string $cUnidade;
	/**
	 * Código EAN / GTIN do item no pedido
	 *
	 * @var string
	 */
	public string $cEAN;
	/**
	 * Peso líquido (Kg)
	 *
	 * @var decimal
	 */
	public float $nPesoLiq;
	/**
	 * Peso bruto (Kg)
	 *
	 * @var decimal
	 */
	public float $nPesoBruto;
	/**
	 * Quantidade do item no pedido
	 *
	 * @var decimal
	 */
	public float $nQtde;
	/**
	 * Valor unitário do item no pedido
	 *
	 * @var decimal
	 */
	public float $nValUnit;
	/**
	 * Valor do desconto do item no pedido
	 *
	 * @var decimal
	 */
	public float $nDesconto;
	/**
	 * Valor do ICMS
	 *
	 * @var decimal
	 */
	public float $nValorIcms;
	/**
	 * Valor do ICMS ST
	 *
	 * @var decimal
	 */
	public float $nValorSt;
	/**
	 * Valor do IPI
	 *
	 * @var decimal
	 */
	public float $nValorIpi;
	/**
	 * Valor do PIS
	 *
	 * @var decimal
	 */
	public float $nValorPis;
	/**
	 * Valor do COFINS
	 *
	 * @var decimal
	 */
	public float $nValorCofins;
	/**
	 * Observação do item no pedido (elas serão impressas no pedido enviado ao fornecedor)
	 *
	 * @var string
	 */
	public string $cObs;
	/**
	 * Indica que deve atualizar o preço de venda do produto no recebimento
	 *
	 * @var string
	 */
	public string $cMkpAtuPv;
	/**
	 * Indica que deve atualizar o preço apenas se for maior que o atual
	 *
	 * @var string
	 */
	public string $cMkpAtuSm;
	/**
	 * Percentual a ser utilizado para a atualização do preço de venda do produto
	 *
	 * @var decimal
	 */
	public float $nMkpPerc;
	/**
	 * Código do Local do Estoque.<BR><BR>Preenchimento opcional.<BR><BR>Caso não informado assumirá o Local do Estoque padrão.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Código da categoria de compra do item
	 *
	 * @var string
	 */
	public string $cCodCateg;
}
