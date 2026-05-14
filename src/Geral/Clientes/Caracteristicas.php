<?php

namespace OmieLib\Geral\Clientes;

use OmieLib\Common\OmieFail;

/**
 * Características do cliente.
 *
 * @pw_element string $campo Nome da característica.<BR><BR>Preenchimento obrigatório. <BR>Caso não encontre a característica um novo cadastro será adicionado.
 * @pw_element string $conteudo Conteúdo do característica.<BR><BR>Preenchimento obrigatório na inclusão. <BR><BR>Caso o valor desse campo não seja informado a característica <BR>será excluída para o cliente/fornecedor.
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
	 * Conteúdo do característica.<BR><BR>Preenchimento obrigatório na inclusão. <BR><BR>Caso o valor desse campo não seja informado a característica <BR>será excluída para o cliente/fornecedor.
	 *
	 * @var string
	 */
	public string $conteudo;
}
