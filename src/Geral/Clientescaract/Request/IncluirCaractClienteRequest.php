<?php

namespace OmieLib\Geral\Clientescaract\Request;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Clientescaract\Caracteristicas;
use OmieLib\Geral\Clientescaract\ClientesCaracteristicasJsonClient;
use OmieLib\Geral\Clientescaract\Response\AlterarCaractClienteResponse;
use OmieLib\Geral\Clientescaract\Response\ConsultarCaractClienteResponse;
use OmieLib\Geral\Clientescaract\Response\ExcluirCaractClienteResponse;
use OmieLib\Geral\Clientescaract\Response\ExcluirTodasCaractClienteResponse;
use OmieLib\Geral\Clientescaract\Response\IncluirCaractClienteResponse;

/**
 * Inclui uma característica de um cliente/fornecedor.
 *
 * @pw_element integer $codigo_cliente_omie Código do cliente / fornecedor
 * @pw_element string $codigo_cliente_integracao Código de integração com sistemas legados
 * @pw_element string $campo Nome da característica.<BR><BR>Preenchimento obrigatório. <BR>Caso não encontre a característica um novo cadastro será adicionado.
 * @pw_element string $conteudo Conteúdo do característica.<BR><BR>Preenchimento obrigatório na inclusão. <BR><BR>Caso o valor desse campo não seja informado a característica <BR>será excluída para o cliente/fornecedor.
 * @pw_complex IncluirCaractClienteRequest
 */
class IncluirCaractClienteRequest{
	/**
	 * Código do cliente / fornecedor
	 *
	 * @var integer
	 */
	public int $codigo_cliente_omie;
	/**
	 * Código de integração com sistemas legados
	 *
	 * @var string
	 */
	public string $codigo_cliente_integracao;
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
