<?php

namespace OmieLib\Geral\Clientetag\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Clientetag\ClientesTagsJsonClient;
use OmieLib\Geral\Clientetag\Response\CTagExcluirResponse;
use OmieLib\Geral\Clientetag\Response\CTagExcluirTodasResponse;
use OmieLib\Geral\Clientetag\Response\CTagIncluirResponse;
use OmieLib\Geral\Clientetag\Response\CTagListarResponse;
use OmieLib\Geral\Clientetag\Tags;
use OmieLib\Geral\Clientetag\TagsLista;

/**
 * Solicitação de inclusão de tags de um cliente.
 *
 * @pw_element integer $nCodCliente Código do cliente.<BR>(Código interno utilizado apenas na API, não aparece na tela).<BR>
 * @pw_element string $cCodIntCliente Código de integração do cliente.<BR>(Utilizado para integração via API, não aparece na tela)
 * @pw_element tags $tags Tags do Cliente ou Fornecedor.
 * @pw_complex cTagIncluirRequest
 */
class CTagIncluirRequest{
	/**
	 * Código do cliente.<BR>(Código interno utilizado apenas na API, não aparece na tela).<BR>
	 *
	 * @var integer
	 */
	public int $nCodCliente;
	/**
	 * Código de integração do cliente.<BR>(Utilizado para integração via API, não aparece na tela)
	 *
	 * @var string
	 */
	public string $cCodIntCliente;
	/**
	 * Tags do Cliente ou Fornecedor.
	 *
	 * @var Tags
	 */
	public Tags $tags;
}
