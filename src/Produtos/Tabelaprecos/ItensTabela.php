<?php

namespace OmieLib\Produtos\Tabelaprecos;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Tabelaprecos\Request\TprAltPrecoItemRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprAlterarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprAtivarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprAtualizarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprConsultarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprExcluirRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprIncluirRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprItensListarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprListarRequest;
use OmieLib\Produtos\Tabelaprecos\Request\TprSuspenderRequest;
use OmieLib\Produtos\Tabelaprecos\Response\TprAltPrecoItemResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprAlterarResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprAtivarResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprAtualizarResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprConsultarResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprExcluirResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprIncluirResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprItensListarResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprListarResponse;
use OmieLib\Produtos\Tabelaprecos\Response\TprSuspenderResponse;

/**
 * Itens da Tabela de Preços.
 *
 * @pw_element integer $nCodProd Código do produto.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno do produto gerado pelo Omie.<BR>
 * @pw_element string $cCodIntProd Código de integração do produto.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o código utilizado no seu aplicativo quando incluir um produto no Omie. <BR>Assim, poderá utilizá-lo para resgatar as informações do produto desejado.<BR>Caso informe esse campo, não informe a tag nCodProd. Caso isso aconteça, o conteúdo dessa tag será desconsiderada.
 * @pw_element string $cCodigoProduto Código do produto.<BR>(Exibido na tela do aplicativo).
 * @pw_element string $cDescricaoProduto Descrição do produto.
 * @pw_element string $cNCM Código do NCM.<BR>No formato 9999.99.99
 * @pw_element string $cEAN EAN do produto.
 * @pw_element integer $nCodFamilia Código da Familia do Produto.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno da família gerado pelo Omie.<BR>
 * @pw_element string $cArredPreco Indica se deve Arredondar o preço do produto (S/N).
 * @pw_element string $cTemDesconto Indica se a Tabela de Preço possui Desconto Sugerido ou Máximo (S/N).
 * @pw_element decimal $nDescMaximo Percentual de Desconto Máximo Permitido.
 * @pw_element decimal $nDescSugerido Percentual de Desconto Sugerido.
 * @pw_element string $cManual Indica se o item foi modificado Manualmente (S/N).
 * @pw_element decimal $nPercDesconto Percentual de Desconto da tabela de preços.
 * @pw_element decimal $nPercAcrescimo Percentual de Acréscimo da tabela de preços.
 * @pw_element decimal $nValorCalculado Valor Calculado.
 * @pw_element decimal $nValorOriginal Valor Original.
 * @pw_element decimal $nValorTabela Valor da Tabela de Preços.
 * @pw_element itemInfo $itemInfo Informações do cadastro do item.
 * @pw_complex itensTabela
 */
class ItensTabela{
	/**
	 * Código do produto.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno do produto gerado pelo Omie.<BR>
	 *
	 * @var integer
	 */
	public int $nCodProd;
	/**
	 * Código de integração do produto.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o código utilizado no seu aplicativo quando incluir um produto no Omie. <BR>Assim, poderá utilizá-lo para resgatar as informações do produto desejado.<BR>Caso informe esse campo, não informe a tag nCodProd. Caso isso aconteça, o conteúdo dessa tag será desconsiderada.
	 *
	 * @var string
	 */
	public string $cCodIntProd;
	/**
	 * Código do produto.<BR>(Exibido na tela do aplicativo).
	 *
	 * @var string
	 */
	public string $cCodigoProduto;
	/**
	 * Descrição do produto.
	 *
	 * @var string
	 */
	public string $cDescricaoProduto;
	/**
	 * Código do NCM.<BR>No formato 9999.99.99
	 *
	 * @var string
	 */
	public string $cNCM;
	/**
	 * EAN do produto.
	 *
	 * @var string
	 */
	public string $cEAN;
	/**
	 * Código da Familia do Produto.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno da família gerado pelo Omie.<BR>
	 *
	 * @var integer
	 */
	public int $nCodFamilia;
	/**
	 * Indica se deve Arredondar o preço do produto (S/N).
	 *
	 * @var string
	 */
	public string $cArredPreco;
	/**
	 * Indica se a Tabela de Preço possui Desconto Sugerido ou Máximo (S/N).
	 *
	 * @var string
	 */
	public string $cTemDesconto;
	/**
	 * Percentual de Desconto Máximo Permitido.
	 *
	 * @var decimal
	 */
	public float $nDescMaximo;
	/**
	 * Percentual de Desconto Sugerido.
	 *
	 * @var decimal
	 */
	public float $nDescSugerido;
	/**
	 * Indica se o item foi modificado Manualmente (S/N).
	 *
	 * @var string
	 */
	public string $cManual;
	/**
	 * Percentual de Desconto da tabela de preços.
	 *
	 * @var decimal
	 */
	public float $nPercDesconto;
	/**
	 * Percentual de Acréscimo da tabela de preços.
	 *
	 * @var decimal
	 */
	public float $nPercAcrescimo;
	/**
	 * Valor Calculado.
	 *
	 * @var decimal
	 */
	public float $nValorCalculado;
	/**
	 * Valor Original.
	 *
	 * @var decimal
	 */
	public float $nValorOriginal;
	/**
	 * Valor da Tabela de Preços.
	 *
	 * @var decimal
	 */
	public float $nValorTabela;
	/**
	 * Informações do cadastro do item.
	 *
	 * @var ItemInfo
	 */
	public ItemInfo $itemInfo;
}
