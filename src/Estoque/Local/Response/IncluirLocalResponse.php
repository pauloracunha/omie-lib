<?php

namespace OmieLib\Estoque\Local\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Estoque\Local\LocaisEncontrados;
use OmieLib\Estoque\Local\LocalEstoqueJsonClient;
use OmieLib\Estoque\Local\Request\AlterarLocalRequest;
use OmieLib\Estoque\Local\Request\IncluirLocalRequest;
use OmieLib\Estoque\Local\Request\LocaisListarRequest;

/**
 * Resposta da inclusão de Local de Estoque
 *
 * @pw_element integer $codigo_local_estoque Código do Local do Estoque.<BR><BR>Utilize esse ID para identificar os locais do estoque que serão utilizados nas demais APIs.
 * @pw_element string $codigo Código do Local do Estoque.<BR><BR>Conforme informado na tela de cadastro do Local do Estoque.<BR><BR>Para identificação do Local do Estoque via API utilize o campo "codigo_local_estoque".<BR>
 * @pw_element string $cCodStatus Codigo de Status
 * @pw_element string $cDesStatus Descricao do Status
 * @pw_complex incluirLocalResponse
 */
class IncluirLocalResponse{
	/**
	 * Código do Local do Estoque.<BR><BR>Utilize esse ID para identificar os locais do estoque que serão utilizados nas demais APIs.
	 *
	 * @var integer
	 */
	public int $codigo_local_estoque;
	/**
	 * Código do Local do Estoque.<BR><BR>Conforme informado na tela de cadastro do Local do Estoque.<BR><BR>Para identificação do Local do Estoque via API utilize o campo "codigo_local_estoque".<BR>
	 *
	 * @var string
	 */
	public string $codigo;
	/**
	 * Codigo de Status
	 *
	 * @var string
	 */
	public string $cCodStatus;
	/**
	 * Descricao do Status
	 *
	 * @var string
	 */
	public string $cDesStatus;
}
