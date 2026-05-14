<?php

namespace OmieLib\Geral\Clientescaract;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Clientescaract\Request\AlterarCaractClienteRequest;
use OmieLib\Geral\Clientescaract\Request\ConsultarCaractClienteRequest;
use OmieLib\Geral\Clientescaract\Request\ExcluirCaractClienteRequest;
use OmieLib\Geral\Clientescaract\Request\ExcluirTodasCaractClienteRequest;
use OmieLib\Geral\Clientescaract\Request\IncluirCaractClienteRequest;
use OmieLib\Geral\Clientescaract\Response\AlterarCaractClienteResponse;
use OmieLib\Geral\Clientescaract\Response\ConsultarCaractClienteResponse;
use OmieLib\Geral\Clientescaract\Response\ExcluirCaractClienteResponse;
use OmieLib\Geral\Clientescaract\Response\ExcluirTodasCaractClienteResponse;
use OmieLib\Geral\Clientescaract\Response\IncluirCaractClienteResponse;

/**
 * Características do cliente/fornecedor
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
