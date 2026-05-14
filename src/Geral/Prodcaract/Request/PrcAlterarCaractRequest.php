<?php

namespace OmieLib\Geral\Prodcaract\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Prodcaract\Info;
use OmieLib\Geral\Prodcaract\ListaCaracteristicas;
use OmieLib\Geral\Prodcaract\ProdutosCaracteristicasJsonClient;
use OmieLib\Geral\Prodcaract\Response\PrcAlterarCaractResponse;
use OmieLib\Geral\Prodcaract\Response\PrcConsultarCaractResponse;
use OmieLib\Geral\Prodcaract\Response\PrcExcluirCaractResponse;
use OmieLib\Geral\Prodcaract\Response\PrcIncluirCaractResponse;
use OmieLib\Geral\Prodcaract\Response\PrcListarCaractResponse;

/**
 * Altera uma característica para um produto.
 *
 * @pw_element integer $nCodProd Código do produto.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno do produto gerado pelo Omie.
 * @pw_element string $cCodIntProd Código de integração do produto.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o código utilizado no seu aplicativo quando incluir um produto no Omie. <BR>Assim, poderá utilizá-lo para resgatar as informações do produto desejado.<BR>Caso informe esse campo, não informe a tag nCodProd. Caso isso aconteça, o conteúdo dessa tag será desconsiderada.
 * @pw_element integer $nCodCaract Código da característica de produto.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno da característica do produto gerado pelo Omie.
 * @pw_element string $cCodIntCaract Código de integração da característica do produto.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o código da característica utilizado no seu aplicativo quando incluir uma característica no Omie. <BR>Assim, poderá utilizar esse campo para resgatar as informações da característica desejada.<BR>Caso informe esse campo, não informe a tag nCodCaract. Caso isso aconteça, o conteúdo dessa tag será desconsiderada.<BR>
 * @pw_element string $cConteudo Conteúdo da característica.
 * @pw_element string $cExibirItemNF Exibir esta característica no item da NF-e emitida (S/N).
 * @pw_element string $cExibirItemPedido Exibir esta característica no item do Pedido, Remessa ou Devolução (S/N).
 * @pw_element string $cExibirOrdemProd Exibir esta característica na Ordem de Produção e Mapa de Custo (S/N).
 * @pw_complex prcAlterarCaractRequest
 */
class PrcAlterarCaractRequest{
	/**
	 * Código do produto.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno do produto gerado pelo Omie.
	 *
	 * @var integer
	 */
	public int $nCodProd;
	/**
	 * Código de integração do produto.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o código utilizado no seu aplicativo quando incluir um produto no Omie. <BR>Assim, poderá utilizá-lo para resgatar as informações do produto desejado.<BR>Caso informe esse campo, não informe a tag nCodProd. Caso isso aconteça, o conteúdo dessa tag será desconsiderada.
	 *
	 * @var string
	 */
	public string $cCodIntProd;
	/**
	 * Código da característica de produto.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno da característica do produto gerado pelo Omie.
	 *
	 * @var integer
	 */
	public int $nCodCaract;
	/**
	 * Código de integração da característica do produto.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o código da característica utilizado no seu aplicativo quando incluir uma característica no Omie. <BR>Assim, poderá utilizar esse campo para resgatar as informações da característica desejada.<BR>Caso informe esse campo, não informe a tag nCodCaract. Caso isso aconteça, o conteúdo dessa tag será desconsiderada.<BR>
	 *
	 * @var string
	 */
	public string $cCodIntCaract;
	/**
	 * Conteúdo da característica.
	 *
	 * @var string
	 */
	public string $cConteudo;
	/**
	 * Exibir esta característica no item da NF-e emitida (S/N).
	 *
	 * @var string
	 */
	public string $cExibirItemNF;
	/**
	 * Exibir esta característica no item do Pedido, Remessa ou Devolução (S/N).
	 *
	 * @var string
	 */
	public string $cExibirItemPedido;
	/**
	 * Exibir esta característica na Ordem de Produção e Mapa de Custo (S/N).
	 *
	 * @var string
	 */
	public string $cExibirOrdemProd;
}
