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
 * Listagem de itens da tabela de preços.
 *
 * @pw_element integer $nPagina Número da página resgatada.
 * @pw_element integer $nRegPorPagina Número de registros retornados na página.
 * @pw_element string $cOrdenarPor Ordem os resultados da página por:<BR>CODIGO - Código da Tabela de Preço.<BR>CODINT - Código de Integração da Tabela de Preço.<BR>NOME - Nome da Tabela de Preço.
 * @pw_element string $cOrdemDecrescente Indica se a ordem de exibição é Decrescente caso seja informado "S".
 * @pw_element integer $nCodTabPreco Código da Tabela de Preços.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno da Tabela de Preços gerado pelo Omie.<BR>
 * @pw_element string $cCodIntTabPreco Código de integração da Tabela de Preços.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o código da Tabela de Preços utilizado no seu aplicativo quando incluir uma Tabela de Preços no Omie. <BR>Assim, poderá utilizar esse campo para resgatar as informações da Tabela de Preços desejada.<BR>Caso informe esse campo, não informe a tag nCodTabPreco. Caso isso aconteça, o conteúdo dessa tag será desconsiderada.<BR>
 * @pw_element string $dDtIncDe Data de inclusão inicial.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dDtIncAte Data de inclusão final.<BR>No formato dd/mm/aaaa.<BR>
 * @pw_element string $dDtAltDe Data de alteração inicial.<BR>No formato dd/mm/aaaa.
 * @pw_element string $dDtAltAte Data de alteração final.<BR>No formato dd/mm/aaaa.
 * @pw_element boolean $lApenasItens Filtrar apenas itens que tiveram alteração no período definido entre dDtAltDe e dDtAltAte.<BR><BR>Ativando esse filtro, não serão consideradas alterações no cabeçalho da Tabela de Preços.
 * @pw_element string $cApenasFixado Indica se deve retornar apenas itens que foram modificados manualmente (S/N).
 * @pw_complex tprItensListarRequest
 */
class TprItensListarRequest{
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
	 * Código da Tabela de Preços.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno da Tabela de Preços gerado pelo Omie.<BR>
	 *
	 * @var integer
	 */
	public int $nCodTabPreco;
	/**
	 * Código de integração da Tabela de Preços.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o código da Tabela de Preços utilizado no seu aplicativo quando incluir uma Tabela de Preços no Omie. <BR>Assim, poderá utilizar esse campo para resgatar as informações da Tabela de Preços desejada.<BR>Caso informe esse campo, não informe a tag nCodTabPreco. Caso isso aconteça, o conteúdo dessa tag será desconsiderada.<BR>
	 *
	 * @var string
	 */
	public string $cCodIntTabPreco;
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
	 * Filtrar apenas itens que tiveram alteração no período definido entre dDtAltDe e dDtAltAte.<BR><BR>Ativando esse filtro, não serão consideradas alterações no cabeçalho da Tabela de Preços.
	 *
	 * @var boolean
	 */
	public bool $lApenasItens;
	/**
	 * Indica se deve retornar apenas itens que foram modificados manualmente (S/N).
	 *
	 * @var string
	 */
	public string $cApenasFixado;
}
