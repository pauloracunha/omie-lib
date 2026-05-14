<?php

namespace OmieLib\Geral\Clientetag;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Clientetag\Request\CTagExcluirRequest;
use OmieLib\Geral\Clientetag\Request\CTagExcluirTodasRequest;
use OmieLib\Geral\Clientetag\Request\CTagIncluirRequest;
use OmieLib\Geral\Clientetag\Request\CTagListarRequest;
use OmieLib\Geral\Clientetag\Response\CTagExcluirResponse;
use OmieLib\Geral\Clientetag\Response\CTagExcluirTodasResponse;
use OmieLib\Geral\Clientetag\Response\CTagIncluirResponse;
use OmieLib\Geral\Clientetag\Response\CTagListarResponse;

/**
 * Tags do Cliente ou Fornecedor.
 *
 * @pw_element string $tag Tag do Cliente ou Fornecedor
 * @pw_element integer $nCodTag Código da Tag.<BR><BR>Criada pelo Omie no momento da inclusão.
 * @pw_complex tagsLista
 */
class TagsLista{
	/**
	 * Tag do Cliente ou Fornecedor
	 *
	 * @var string
	 */
	public string $tag;
	/**
	 * Código da Tag.<BR><BR>Criada pelo Omie no momento da inclusão.
	 *
	 * @var integer
	 */
	public int $nCodTag;
}
