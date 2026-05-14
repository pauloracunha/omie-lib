<?php

namespace OmieLib\Crm\Contas;

use OmieLib\Common\OmieFail;
use OmieLib\Crm\Contas\Request\ContaListarRequest;
use OmieLib\Crm\Contas\Request\ContaVerificarRequest;
use OmieLib\Crm\Contas\Response\ContaListarResponse;
use OmieLib\Crm\Contas\Response\ContaVerificarResponse;

/**
 * Caracteristicas da conta
 *
 * @pw_element string $campo Nome da característica.<BR><BR>Preenchimento obrigatório. <BR>Caso não encontre a característica um novo cadastro será adicionado.
 * @pw_element string $conteudo Conteúdo do característica.<BR><BR>Preenchimento obrigatório na inclusão. <BR><BR>Caso o valor desse campo não seja informado a característica <BR>será excluída da conta.
 * @pw_complex caracteristicas
 */
class Caracteristicas{
	/**
	 * Nome da característica.<BR><BR>Preenchimento obrigatório. <BR>Caso não encontre a característica um novo cadastro será adicionado.
	 *
	 * @var string
	 */
	public string $campo;
	/**
	 * Conteúdo do característica.<BR><BR>Preenchimento obrigatório na inclusão. <BR><BR>Caso o valor desse campo não seja informado a característica <BR>será excluída da conta.
	 *
	 * @var string
	 */
	public string $conteudo;
}
