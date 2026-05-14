<?php

namespace OmieLib\Estoque\Resumo\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Resumo\ListaEstoque;
use OmieLib\Estoque\Resumo\ListaImagens;
use OmieLib\Estoque\Resumo\ListaProduto;
use OmieLib\Estoque\Resumo\Request\ObterEstoqueProdRequest;
use OmieLib\Estoque\Resumo\ResumoEstoqueJsonClient;

/**
 * Resposta da solicitação da posição de estoque do produto.
 *
 * @pw_element integer $nIdProduto Código do produto.<BR>(Gerado internamente, não é visualizado na tela)<BR><BR><BR>Preenchimento Opcional.
 * @pw_element string $cCodigo Código do Produto.<BR>(É o código do produto que é exibido na tela do Omie.)<BR><BR>Preenchimento Opcional.
 * @pw_element string $cDescricao Descrição do produto.
 * @pw_element string $cEAN Código EAN (GTIN - Global Trade Item Number).<BR><BR><BR>Preenchimento Opcional.
 * @pw_element string $dDia Data da consulta.<BR><BR><BR>Preenchimento opcional.
 * @pw_element string $cNCM Código da Nomenclatura Comum do Mercosul (NCM).
 * @pw_element string $cUnidade Código da Unidade.
 * @pw_element listaEstoqueArray $listaEstoque Exibe os totais de estoque do produto.
 * @pw_element listaProduto $listaProduto Lista com as informações dos produtos encontrados a partir do dado informado na tag 'xCodigo'.<BR><BR>Essa estrutura será retornada apenas quando a tag 'xCodigo' for preenchida.
 * @pw_element listaImagensArray $listaImagens Lista de imagens do produto.
 * @pw_complex ObterEstoqueProdResponse
 */
class ObterEstoqueProdResponse{
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
	 * Descrição do produto.
	 *
	 * @var string
	 */
	public string $cDescricao;
	/**
	 * Código EAN (GTIN - Global Trade Item Number).<BR><BR><BR>Preenchimento Opcional.
	 *
	 * @var string
	 */
	public string $cEAN;
	/**
	 * Data da consulta.<BR><BR><BR>Preenchimento opcional.
	 *
	 * @var string
	 */
	public string $dDia;
	/**
	 * Código da Nomenclatura Comum do Mercosul (NCM).
	 *
	 * @var string
	 */
	public string $cNCM;
	/**
	 * Código da Unidade.
	 *
	 * @var string
	 */
	public string $cUnidade;
	/**
	 * Exibe os totais de estoque do produto.
	 *
	 * @var ListaEstoque[]
	 */
	public array $listaEstoque;
	/**
	 * Lista com as informações dos produtos encontrados a partir do dado informado na tag 'xCodigo'.<BR><BR>Essa estrutura será retornada apenas quando a tag 'xCodigo' for preenchida.
	 *
	 * @var ListaProduto
	 */
	public ListaProduto $listaProduto;
	/**
	 * Lista de imagens do produto.
	 *
	 * @var ListaImagens[]
	 */
	public array $listaImagens;
}
