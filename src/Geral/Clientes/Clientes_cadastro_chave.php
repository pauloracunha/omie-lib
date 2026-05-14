<?php

namespace OmieLib\Geral\Clientes;

use OmieLib\Common\OmieFail;

/**
 * Chave para pesquisa do cadastro de clientes.
 *
 * @pw_element integer $codigo_cliente_omie Código de Cliente / Fornecedor
 * @pw_element string $codigo_cliente_integracao Código de Integração com sistemas legados.
 * @pw_complex clientes_cadastro_chave
 */
class Clientes_cadastro_chave{
	/**
	 * Código de Cliente / Fornecedor
	 *
	 * @var integer
	 */
	public int $codigo_cliente_omie;
	/**
	 * Código de Integração com sistemas legados.
	 *
	 * @var string
	 */
	public string $codigo_cliente_integracao;
}
