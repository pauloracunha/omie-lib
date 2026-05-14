<?php

namespace OmieLib\Geral\Caracteristicas\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Caracteristicas\CaracteristicasCadastroJsonClient;
use OmieLib\Geral\Caracteristicas\ConteudosPermitidos;
use OmieLib\Geral\Caracteristicas\Info;
use OmieLib\Geral\Caracteristicas\ListaCaracteristicas;
use OmieLib\Geral\Caracteristicas\Response\CaractAlterarResponse;
use OmieLib\Geral\Caracteristicas\Response\CaractConsultarResponse;
use OmieLib\Geral\Caracteristicas\Response\CaractExcluirResponse;
use OmieLib\Geral\Caracteristicas\Response\CaractIncluirResponse;
use OmieLib\Geral\Caracteristicas\Response\CaractListarResponse;

/**
 * Altera uma característica de produto.
 *
 * @pw_element integer $nCodCaract Código da característica de produto.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno da característica do produto gerado pelo Omie.<BR>
 * @pw_element string $cCodIntCaract Código de integração da característica do produto.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o código da característica utilizado no seu aplicativo quando incluir uma característica no Omie. <BR>Assim, poderá utilizar esse campo para resgatar as informações da característica desejada.<BR>Caso informe esse campo, não informe a tag nCodCaract. Caso isso aconteça, o conteúdo dessa tag será desconsiderada.<BR>
 * @pw_element string $cNomeCaract Nome da característica.<BR>(Não será permitida a inclusão de mais de uma característica com a mesma descrição.
 * @pw_element string $cValorDef Definir os conteúdos possíveis para essa característica (S/N).<BR><BR>Como padrão o valor é "N".
 * @pw_element conteudosPermitidosArray $conteudosPermitidos Lista com os possíveis conteúdos para uma característica.
 * @pw_complex caractAlterarRequest
 */
class CaractAlterarRequest{
	/**
	 * Código da característica de produto.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno da característica do produto gerado pelo Omie.<BR>
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
	 * Nome da característica.<BR>(Não será permitida a inclusão de mais de uma característica com a mesma descrição.
	 *
	 * @var string
	 */
	public string $cNomeCaract;
	/**
	 * Definir os conteúdos possíveis para essa característica (S/N).<BR><BR>Como padrão o valor é "N".
	 *
	 * @var string
	 */
	public string $cValorDef;
	/**
	 * Lista com os possíveis conteúdos para uma característica.
	 *
	 * @var ConteudosPermitidos[]
	 */
	public array $conteudosPermitidos;
}
