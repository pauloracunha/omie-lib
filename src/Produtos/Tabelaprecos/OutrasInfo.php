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
 * Outros filtros da tabela de preços.
 *
 * @pw_element integer $nCodOrigTab Código da Tabela de Preço Original.
 * @pw_element decimal $nPercAcrescimo Percentual de Acréscimo da tabela de preços.
 * @pw_element decimal $nPercDesconto Percentual de Desconto da tabela de preços.
 * @pw_complex outrasInfo
 */
class OutrasInfo{
	/**
	 * Código da Tabela de Preço Original.
	 *
	 * @var integer
	 */
	public int $nCodOrigTab;
	/**
	 * Percentual de Acréscimo da tabela de preços.
	 *
	 * @var decimal
	 */
	public float $nPercAcrescimo;
	/**
	 * Percentual de Desconto da tabela de preços.
	 *
	 * @var decimal
	 */
	public float $nPercDesconto;
}
