<?php

namespace OmieLib\Geral\Clientetag\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Clientetag\ClientesTagsJsonClient;
use OmieLib\Geral\Clientetag\Request\CTagExcluirRequest;
use OmieLib\Geral\Clientetag\Request\CTagExcluirTodasRequest;
use OmieLib\Geral\Clientetag\Request\CTagIncluirRequest;
use OmieLib\Geral\Clientetag\Request\CTagListarRequest;
use OmieLib\Geral\Clientetag\Tags;
use OmieLib\Geral\Clientetag\TagsLista;

/**
 * Resposta da solicitação de inclusão de tags de um cliente.
 *
 * @pw_element integer $nCodCliente Código do cliente.<BR>(Código interno utilizado apenas na API, não aparece na tela).<BR>
 * @pw_element string $cCodIntCliente Código de integração do cliente.<BR>(Utilizado para integração via API, não aparece na tela)
 * @pw_element string $cCodStatus Código do Status.
 * @pw_element string $cDesStatus Descrição do Status.
 * @pw_element tagsListaArray $tagsLista Tags do Cliente ou Fornecedor.
 * @pw_complex cTagIncluirResponse
 */
class CTagIncluirResponse{
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
	 * Código do Status.
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descrição do Status.
	 *
	 * @var string
	 */
	public string $cDesStatus;
	/**
	 * Tags do Cliente ou Fornecedor.
	 *
	 * @var TagsLista[]
	 */
	public array $tagsLista;
}
