<?php

namespace OmieLib\Geral\Dre\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Dre\DreCadastroJsonClient;
use OmieLib\Geral\Dre\DreLista;
use OmieLib\Geral\Dre\Request\DreCadastroListRequest;

/**
 * Retorna a lista de Contas do DRE.
 *
 * @pw_element integer $totalRegistros total de registros encontrados
 * @pw_element dreListaArray $dreLista Cadastro de Contas do DRE.
 * @pw_complex dreCadastroListResponse
 */
class DreCadastroListResponse{
	/**
	 * total de registros encontrados
	 *
	 * @var integer
	 */
	public int $totalRegistros;
	/**
	 * Cadastro de Contas do DRE.
	 *
	 * @var DreLista[]
	 */
	public array $dreLista;
}
