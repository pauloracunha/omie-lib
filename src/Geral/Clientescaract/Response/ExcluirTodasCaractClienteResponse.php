<?php

namespace OmieLib\Geral\Clientescaract\Response;

use OmieLib\Common\OmieFail;
use OmieLib\Geral\Clientescaract\Caracteristicas;
use OmieLib\Geral\Clientescaract\ClientesCaracteristicasJsonClient;
use OmieLib\Geral\Clientescaract\Request\AlterarCaractClienteRequest;
use OmieLib\Geral\Clientescaract\Request\ConsultarCaractClienteRequest;
use OmieLib\Geral\Clientescaract\Request\ExcluirCaractClienteRequest;
use OmieLib\Geral\Clientescaract\Request\ExcluirTodasCaractClienteRequest;
use OmieLib\Geral\Clientescaract\Request\IncluirCaractClienteRequest;

/**
 * Resposta da exclusão de todas as características de um cliente/fornecedor.
 *
 * @pw_element integer $codigo_cliente_omie Código do cliente / fornecedor
 * @pw_element string $codigo_cliente_integracao Código de integração com sistemas legados
 * @pw_element string $codigo_status Código do status de processamento
 * @pw_element string $descricao_status Descrição do status de processamento
 * @pw_complex ExcluirTodasCaractClienteResponse
 */
class ExcluirTodasCaractClienteResponse{
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
	 * Código do status de processamento
	 *
	 * @var string
	 */
	public string $codigo_status;
	/**
	 * Descrição do status de processamento
	 *
	 * @var string
	 */
	public string $descricao_status;
}
