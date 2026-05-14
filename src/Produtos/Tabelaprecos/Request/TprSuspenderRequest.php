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
 * Solicitação de Suspensão de uma Tabela de Preços.
 *
 * @pw_element integer $nCodTabPreco Código da Tabela de Preços.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno da Tabela de Preços gerado pelo Omie.<BR>
 * @pw_element string $cCodIntTabPreco Código de integração da Tabela de Preços.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o código da Tabela de Preços utilizado no seu aplicativo quando incluir uma Tabela de Preços no Omie. <BR>Assim, poderá utilizar esse campo para resgatar as informações da Tabela de Preços desejada.<BR>Caso informe esse campo, não informe a tag nCodTabPreco. Caso isso aconteça, o conteúdo dessa tag será desconsiderada.<BR>
 * @pw_complex tprSuspenderRequest
 */
class TprSuspenderRequest{
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
}
