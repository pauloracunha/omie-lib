<?php

namespace OmieLib\Estoque\Resumo\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Resumo\ListaEstoque;
use OmieLib\Estoque\Resumo\ListaImagens;
use OmieLib\Estoque\Resumo\ListaProduto;
use OmieLib\Estoque\Resumo\Response\ObterEstoqueProdResponse;
use OmieLib\Estoque\Resumo\ResumoEstoqueJsonClient;

/**
 * Solicitação da posição de estoque do produto.
 *
 * @pw_element string $cEAN Código EAN (GTIN - Global Trade Item Number).<BR><BR><BR>Preenchimento Opcional.
 * @pw_element integer $nIdProduto Código do produto.<BR>(Gerado internamente, não é visualizado na tela)<BR><BR><BR>Preenchimento Opcional.
 * @pw_element string $cCodigo Código do Produto.<BR>(É o código do produto que é exibido na tela do Omie.)<BR><BR>Preenchimento Opcional.
 * @pw_element string $xCodigo Campo dinâmico para filtrar o cadastro de produto.<BR><BR>Pode ser: <BR><BR>EAN<BR>Código (SKU)<BR>Descrição.<BR><BR>Quando mais de um produto for encontrado, a lista de itens será retornada na tag 'ListaProduto' e a 'listaEstoque' não será retornada.
 * @pw_element string $dDia Data da consulta.<BR><BR><BR>Preenchimento opcional.
 * @pw_element string $cExibirImagens Exibir imagens do produto? (S/N)
 * @pw_complex ObterEstoqueProdRequest
 */
class ObterEstoqueProdRequest{
	/**
	 * Código EAN (GTIN - Global Trade Item Number).<BR><BR><BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $cEAN;
	/**
	 * Código do produto.<BR>(Gerado internamente, não é visualizado na tela)<BR><BR><BR>Preenchimento Opcional.
	 *
	 * @var integer
	 */
	public int $nIdProduto;
	/**
	 * Código do Produto.<BR>(É o código do produto que é exibido na tela do Omie.)<BR><BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Campo dinâmico para filtrar o cadastro de produto.<BR><BR>Pode ser: <BR><BR>EAN<BR>Código (SKU)<BR>Descrição.<BR><BR>Quando mais de um produto for encontrado, a lista de itens será retornada na tag 'ListaProduto' e a 'listaEstoque' não será retornada.
	 *
	 * @var string
	 */
	public string $xCodigo;
	/**
	 * Data da consulta.<BR><BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dDia;
	/**
	 * Exibir imagens do produto? (S/N)
	 *
	 * @var string
	 */
	public string $cExibirImagens;
}
