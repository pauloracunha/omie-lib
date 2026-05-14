<?php

namespace OmieLib\Geral\Caracteristicas;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Caracteristicas\Request\CaractAlterarRequest;
use OmieLib\Geral\Caracteristicas\Request\CaractConsultarRequest;
use OmieLib\Geral\Caracteristicas\Request\CaractExcluirRequest;
use OmieLib\Geral\Caracteristicas\Request\CaractIncluirRequest;
use OmieLib\Geral\Caracteristicas\Request\CaractListarRequest;
use OmieLib\Geral\Caracteristicas\Response\CaractAlterarResponse;
use OmieLib\Geral\Caracteristicas\Response\CaractConsultarResponse;
use OmieLib\Geral\Caracteristicas\Response\CaractExcluirResponse;
use OmieLib\Geral\Caracteristicas\Response\CaractIncluirResponse;
use OmieLib\Geral\Caracteristicas\Response\CaractListarResponse;

/**
 * Lista de características de produto.
 *
 * @pw_element integer $nCodCaract Código da característica de produto.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno da característica do produto gerado pelo Omie.<BR>
 * @pw_element string $cCodIntCaract Código de integração da característica do produto.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o código da característica utilizado no seu aplicativo quando incluir uma característica no Omie. <BR>Assim, poderá utilizar esse campo para resgatar as informações da característica desejada.<BR>Caso informe esse campo, não informe a tag nCodCaract. Caso isso aconteça, o conteúdo dessa tag será desconsiderada.<BR>
 * @pw_element string $cNomeCaract Nome da característica.<BR>(Não será permitida a inclusão de mais de uma característica com a mesma descrição.
 * @pw_element conteudosPermitidosArray $conteudosPermitidos Lista com os possíveis conteúdos para uma característica.
 * @pw_element info $info Informações complementares da característica do produto.
 * @pw_complex listaCaracteristicas
 */
class ListaCaracteristicas{
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
	 * Lista com os possíveis conteúdos para uma característica.
	 *
	 * @var ConteudosPermitidos[]
	 */
	public array $conteudosPermitidos;
	/**
	 * Informações complementares da característica do produto.
	 *
	 * @var Info
	 */
	public Info $info;
}
