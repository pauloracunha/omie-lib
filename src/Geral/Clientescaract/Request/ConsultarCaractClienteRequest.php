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
 * Consulta todas as características de um cliente/fornecedor.
 *
 * @pw_element integer $codigo_cliente_omie Código do cliente / fornecedor
 * @pw_element string $codigo_cliente_integracao Código de integração com sistemas legados
 * @pw_complex ConsultarCaractClienteRequest
 */
class ConsultarCaractClienteRequest{
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
}
