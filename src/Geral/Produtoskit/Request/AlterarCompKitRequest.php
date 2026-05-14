<?php

namespace OmieLib\Geral\Produtoskit\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Produtoskit\Componentes_kit;
use OmieLib\Geral\Produtoskit\ProdutosKitJsonClient;
use OmieLib\Geral\Produtoskit\Response\AlterarCompKitResponse;

/**
 * Inclui/Altera/Exclui os componentes do KIT.
 *
 * @pw_element integer $codigo_produto ID do produto que irá receber os componentes do KIT.<BR><BR>(utilizado apenas na integração via API, não é exibido na tela).<BR>O conteúdo desse campo é o código interno gerado pelo Omie ao cadastrar o produto.<BR><BR>Para incluir componentes do KIT, o Tipo do Produto deve ser: "KT - Kit"<BR><BR>Preenchimento obrigatório.
 * @pw_element componentes_kitArray $componentes_kit Lista de Componentes do KIT.
 * @pw_complex AlterarCompKitRequest
 */
class AlterarCompKitRequest{
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
