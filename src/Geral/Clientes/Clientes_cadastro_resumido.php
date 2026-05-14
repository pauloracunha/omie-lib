<?php

namespace OmieLib\Geral\Clientes;

use OmieLib\Common\OmieFail;

/**
 * Cadastro reduzido de clientes.
 *
 * @pw_element integer $codigo_cliente Código de Cliente / Fornecedor
 * @pw_element string $codigo_cliente_integracao Código de Integração com sistemas legados.
 * @pw_element string $razao_social Razão Social<BR>Preenchimento Obrigatório.
 * @pw_element string $nome_fantasia Nome Fantasia<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
 * @pw_element string $cnpj_cpf CNPJ / CPF<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
 * @pw_complex clientes_cadastro_resumido
 */
class Clientes_cadastro_resumido{
	/**
	 * Código de Cliente / Fornecedor
	 *
	 * @var integer
	 */
	public int $codigo_cliente;
	/**
	 * Código de Integração com sistemas legados.
	 *
	 * @var string
	 */
	public string $codigo_cliente_integracao;
	/**
	 * Razão Social<BR>Preenchimento Obrigatório.
	 *
	 * @var string
	 */
	public string $razao_social;
	/**
	 * Nome Fantasia<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
	 *
	 * @var string
	 */
	public string $nome_fantasia;
	/**
	 * CNPJ / CPF<BR>Preenchimento Obrigatório para emissão de NF-e/NFS-e.
	 *
	 * @var string
	 */
	public string $cnpj_cpf;
}
