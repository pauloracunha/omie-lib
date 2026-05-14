<?php

namespace OmieLib\Produtos\Tabelaprecos\Response;

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
use OmieLib\Produtos\Tabelaprecos\TabelaPrecosJsonClient;

/**
 * Resposta da Solicitação de Consulta de uma Tabela de Preços.
 *
 * @pw_element integer $nCodTabPreco Código da Tabela de Preços.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno da Tabela de Preços gerado pelo Omie.<BR>
 * @pw_element string $cCodIntTabPreco Código de integração da Tabela de Preços.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o código da Tabela de Preços utilizado no seu aplicativo quando incluir uma Tabela de Preços no Omie. <BR>Assim, poderá utilizar esse campo para resgatar as informações da Tabela de Preços desejada.<BR>Caso informe esse campo, não informe a tag nCodTabPreco. Caso isso aconteça, o conteúdo dessa tag será desconsiderada.<BR>
 * @pw_element string $cNome Nome da Tabela de Preço.
 * @pw_element string $cCodigo Código da Tabela de Preço.<BR>(Exibido na tela do aplicativo).
 * @pw_element string $cAtiva Indica se a tabela de preços está ativa (S/N).<BR>
 * @pw_element string $cOrigem Origem da Tabela de Preços.<BR>Pode ser:<BR>PRD - Lê o preço do cadastro de produtos.<BR>CMC - Lê o preço do CMC do produto.<BR>TBL - Lê o preço de uma tabela específica informada na tag "nCodOrigTab".<BR>
 * @pw_element produtos $produtos Dados dos filtros por produto.
 * @pw_element clientes $clientes Dados dos filtros do cliente.
 * @pw_element outrasInfo $outrasInfo Outros filtros da tabela de preços.
 * @pw_element caracteristicas $caracteristicas Características da tabela de preço.
 * @pw_element info $info Informações do cadastro da tabela de preços.
 * @pw_complex tprConsultarResponse
 */
class TprConsultarResponse{
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
	 * Nome da Tabela de Preço.
	 *
	 * @var string
	 */
	public string $cNome;
	/**
	 * Código da Tabela de Preço.<BR>(Exibido na tela do aplicativo).
	 *
	 * @var string
	 */
	public string $cCodigo;
	/**
	 * Indica se a tabela de preços está ativa (S/N).<BR>
	 *
	 * @var string
	 */
	public string $cAtiva;
	/**
	 * Origem da Tabela de Preços.<BR>Pode ser:<BR>PRD - Lê o preço do cadastro de produtos.<BR>CMC - Lê o preço do CMC do produto.<BR>TBL - Lê o preço de uma tabela específica informada na tag "nCodOrigTab".<BR>
	 *
	 * @var string
	 */
	public string $cOrigem;
	/**
	 * Dados dos filtros por produto.
	 *
	 * @var Produtos
	 */
	public Produtos $produtos;
	/**
	 * Dados dos filtros do cliente.
	 *
	 * @var Clientes
	 */
	public Clientes $clientes;
	/**
	 * Outros filtros da tabela de preços.
	 *
	 * @var OutrasInfo
	 */
	public OutrasInfo $outrasInfo;
	/**
	 * Características da tabela de preço.
	 *
	 * @var Caracteristicas
	 */
	public Caracteristicas $caracteristicas;
	/**
	 * Informações do cadastro da tabela de preços.
	 *
	 * @var Info
	 */
	public Info $info;
}
