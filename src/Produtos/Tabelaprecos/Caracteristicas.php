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
 * Características da tabela de preço.
 *
 * @pw_element string $cTemValidade Indica se a Tabela de Preço possui Validade (S/N).
 * @pw_element string $dDtInicial Data Inicial da Validade da Tabela de Preço.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dDtFinal Data Final de Validade Tabela de Preço.<BR>No formato dd/mm/aaaa.
 * @pw_element string $cTemDesconto Indica se a Tabela de Preço possui Desconto Sugerido ou Máximo (S/N).
 * @pw_element decimal $nDescSugerido Percentual de Desconto Sugerido.
 * @pw_element decimal $nPercDescMax Percentual de Desconto Máximo Permitido.
 * @pw_element string $cArredPreco Indica se deve Arredondar o preço do produto (S/N).
 * @pw_complex caracteristicas
 */
class Caracteristicas{
	/**
	 * Indica se a Tabela de Preço possui Validade (S/N).
	 *
	 * @var string
	 */
	public string $cTemValidade;
	/**
	 * Data Inicial da Validade da Tabela de Preço.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtInicial;
	/**
	 * Data Final de Validade Tabela de Preço.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtFinal;
	/**
	 * Indica se a Tabela de Preço possui Desconto Sugerido ou Máximo (S/N).
	 *
	 * @var string
	 */
	public string $cTemDesconto;
	/**
	 * Percentual de Desconto Sugerido.
	 *
	 * @var decimal
	 */
	public float $nDescSugerido;
	/**
	 * Percentual de Desconto Máximo Permitido.
	 *
	 * @var decimal
	 */
	public float $nPercDescMax;
	/**
	 * Indica se deve Arredondar o preço do produto (S/N).
	 *
	 * @var string
	 */
	public string $cArredPreco;
}
