<?php

namespace OmieLib\Geral\Caracteristicas\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Caracteristicas\CaracteristicasCadastroJsonClient;
use OmieLib\Geral\Caracteristicas\ConteudosPermitidos;
use OmieLib\Geral\Caracteristicas\Info;
use OmieLib\Geral\Caracteristicas\ListaCaracteristicas;
use OmieLib\Geral\Caracteristicas\Request\CaractAlterarRequest;
use OmieLib\Geral\Caracteristicas\Request\CaractConsultarRequest;
use OmieLib\Geral\Caracteristicas\Request\CaractExcluirRequest;
use OmieLib\Geral\Caracteristicas\Request\CaractIncluirRequest;
use OmieLib\Geral\Caracteristicas\Request\CaractListarRequest;

/**
 * Resposta da solicitação de exclusão de uma característica de produto.
 *
 * @pw_element integer $nCodCaract Código da característica de produto.<BR>(Interno, utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno da característica do produto gerado pelo Omie.<BR>
 * @pw_element string $cCodIntCaract Código de integração da característica do produto.<BR>(Interno, utilizado apenas na Integração via API, não aparece na tela).<BR>Utilize esse campo para informar o código da característica utilizado no seu aplicativo quando incluir uma característica no Omie. <BR>Assim, poderá utilizar esse campo para resgatar as informações da característica desejada.<BR>Caso informe esse campo, não informe a tag nCodCaract. Caso isso aconteça, o conteúdo dessa tag será desconsiderada.<BR>
 * @pw_element string $cCodStatus Código do status do processamento.<BR>Se o retorno for "0" significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que "0" ocorreu algum erro duranteo o processamento da solicitação.<BR>A tag "cDesStatus" descreve o problema ocorrido.
 * @pw_element string $cDesStatus Descrição do status do processamento.<BR>Essa tag explica o resultado da tag "cCodigoStatus".
 * @pw_complex caractExcluirResponse
 */
class CaractExcluirResponse{
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
	 * Código do status do processamento.<BR>Se o retorno for "0" significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que "0" ocorreu algum erro duranteo o processamento da solicitação.<BR>A tag "cDesStatus" descreve o problema ocorrido.
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do status do processamento.<BR>Essa tag explica o resultado da tag "cCodigoStatus".
	 *
	 * @var string
	 */
	public string $cDesStatus;
}
