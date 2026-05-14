<?php

namespace OmieLib\Estoque\Resumo;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Resumo\Request\ObterEstoqueProdRequest;
use OmieLib\Estoque\Resumo\Response\ObterEstoqueProdResponse;

/**
 * Lista com as informações dos produtos encontrados a partir do dado informado na tag 'xCodigo'.
 *
 * @pw_element integer $nIdProduto Código do produto.<BR>(Gerado internamente, não é visualizado na tela)<BR><BR><BR>Preenchimento Opcional.
 * @pw_element string $cCodigo Código do Produto.<BR>(É o código do produto que é exibido na tela do Omie.)<BR><BR>Preenchimento Opcional.
 * @pw_element string $cDescricao Descrição do produto.
 * @pw_element string $cEAN Código EAN (GTIN - Global Trade Item Number).<BR><BR><BR>Preenchimento Opcional.
 * @pw_element string $cNCM Código da Nomenclatura Comum do Mercosul (NCM).
 * @pw_element string $cUnidade Código da Unidade.
 * @pw_complex listaProduto
 */
class ListaProduto{
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
}
