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
 * Tabela de preço com itens.
 *
 * @pw_element integer $nCodTabPreco Código da Tabela de Preços.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno da Tabela de Preços gerado pelo Omie.<BR>
 * @pw_element string $cCodIntTabPreco Código de integração da Tabela de Preços.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o código da Tabela de Preços utilizado no seu aplicativo quando incluir uma Tabela de Preços no Omie. <BR>Assim, poderá utilizar esse campo para resgatar as informações da Tabela de Preços desejada.<BR>Caso informe esse campo, não informe a tag nCodTabPreco. Caso isso aconteça, o conteúdo dessa tag será desconsiderada.<BR>
 * @pw_element string $cNome Nome da Tabela de Preço.
 * @pw_element string $cCodigo Código da Tabela de Preço.<BR>(Exibido na tela do aplicativo).
 * @pw_element string $cAtiva Indica se a tabela de preços está ativa (S/N).<BR>
 * @pw_element string $cOrigem Origem da Tabela de Preços.<BR>Pode ser:<BR>PRD - Lê o preço do cadastro de produtos.<BR>CMC - Lê o preço do CMC do produto.<BR>TBL - Lê o preço de uma tabela específica informada na tag "nCodOrigTab".<BR>
 * @pw_element itensTabelaArray $itensTabela Itens da Tabela de Preços.
 * @pw_complex listaTabelaPreco
 */
class ListaTabelaPreco{
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
	 * Itens da Tabela de Preços.
	 *
	 * @var ItensTabela[]
	 */
	public array $itensTabela;
}
