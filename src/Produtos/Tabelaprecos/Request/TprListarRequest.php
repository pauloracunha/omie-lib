<?php

namespace OmieLib\Produtos\Tabelaprecos\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Produtos\Tabelaprecos\Caracteristicas;
use OmieLib\Produtos\Tabelaprecos\Clientes;
use OmieLib\Produtos\Tabelaprecos\Info;
use OmieLib\Produtos\Tabelaprecos\ItemInfo;
use OmieLib\Produtos\Tabelaprecos\ItensTabela;
use OmieLib\Produtos\Tabelaprecos\ListaTabelaPreco;
use OmieLib\Produtos\Tabelaprecos\ListaTabelasPreco;
use OmieLib\Produtos\Tabelaprecos\OutrasInfo;
use OmieLib\Produtos\Tabelaprecos\Produtos;
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
use OmieLib\Produtos\Tabelaprecos\TabelaPrecosJsonClient;

/**
 * Listagem de tabela de preços.
 *
 * @pw_element integer $nPagina Número da página resgatada.
 * @pw_element integer $nRegPorPagina Número de registros retornados na página.
 * @pw_element string $cOrdenarPor Ordem os resultados da página por:<BR>CODIGO - Código da Tabela de Preço.<BR>CODINT - Código de Integração da Tabela de Preço.<BR>NOME - Nome da Tabela de Preço.
 * @pw_element string $cOrdemDecrescente Indica se a ordem de exibição é Decrescente caso seja informado "S".
 * @pw_element string $dDtIncDe Data de inclusão inicial.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dDtIncAte Data de inclusão final.<BR>No formato dd/mm/aaaa.<BR>
 * @pw_element string $dDtAltDe Data de alteração inicial.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dDtAltAte Data de alteração final.<BR>No formato dd/mm/aaaa.
 * @pw_element integer $nCodTag Considerar apenas os clientes de uma determinada Tag.<BR>Será ignorado caso o campo "cTodosClientes" estiver preenhido com "S".
 * @pw_complex tprListarRequest
 */
class TprListarRequest{
	/**
	 * Número da página resgatada.
	 *
	 * @var integer
	 */
	public int $nPagina;
	/**
	 * Número de registros retornados na página.
	 *
	 * @var integer
	 */
	public int $nRegPorPagina;
	/**
	 * Ordem os resultados da página por:<BR>CODIGO - Código da Tabela de Preço.<BR>CODINT - Código de Integração da Tabela de Preço.<BR>NOME - Nome da Tabela de Preço.
	 *
	 * @var string
	 */
	public string $cOrdenarPor;
	/**
	 * Indica se a ordem de exibição é Decrescente caso seja informado "S".
	 *
	 * @var string
	 */
	public string $cOrdemDecrescente;
	/**
	 * Data de inclusão inicial.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtIncDe;
	/**
	 * Data de inclusão final.<BR>No formato dd/mm/aaaa.<BR>
	 *
	 * @var string
	 */
	public string $dDtIncAte;
	/**
	 * Data de alteração inicial.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtAltDe;
	/**
	 * Data de alteração final.<BR>No formato dd/mm/aaaa.
	 *
	 * @var string
	 */
	public string $dDtAltAte;
	/**
	 * Considerar apenas os clientes de uma determinada Tag.<BR>Será ignorado caso o campo "cTodosClientes" estiver preenhido com "S".
	 *
	 * @var integer
	 */
	public int $nCodTag;
}
