<?php

namespace OmieLib\Geral\Produtoskit\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Produtoskit\Componentes_kit;
use OmieLib\Geral\Produtoskit\ProdutosKitJsonClient;
use OmieLib\Geral\Produtoskit\Request\AlterarCompKitRequest;

/**
 * Resposta da solicitação de alteração dos componentes do KIT.
 *
 * @pw_element string $cCodStatus Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
 * @pw_element string $cDesStatus Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
 * @pw_element integer $codigo_produto ID do produto que irá receber os componentes do KIT.<BR><BR>(utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno gerado pelo Omie ao cadastrar o produto.<BR><BR>Para incluir componentes do KIT, o Tipo do Produto deve ser: "KT - Kit"<BR><BR>Preenchimento obrigatório.
 * @pw_element componentes_kitArray $componentes_kit Lista de Componentes do KIT.
 * @pw_complex AlterarCompKitResponse
 */
class AlterarCompKitResponse{
	/**
	 * Código do status do processamento.<BR>Se o retorno for '0' significa que a solicitação foi executada com sucesso.<BR>Se o retorno for maior que '0' ocorreu algum erro durante o processamento da solicitação.<BR>A tag 'cDesStatus' descreve o problema ocorrido.
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do status do processamento.<BR>Essa tag explica o resultado da tag 'cCodigoStatus'.
	 *
	 * @var string
	 */
	public string $cDesStatus;
	/**
	 * ID do produto que irá receber os componentes do KIT.<BR><BR>(utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno gerado pelo Omie ao cadastrar o produto.<BR><BR>Para incluir componentes do KIT, o Tipo do Produto deve ser: "KT - Kit"<BR><BR>Preenchimento obrigatório.
	 *
	 * @var integer
	 */
	public int $codigo_produto;
	/**
	 * Lista de Componentes do KIT.
	 *
	 * @var Componentes_kit[]
	 */
	public array $componentes_kit;
}
