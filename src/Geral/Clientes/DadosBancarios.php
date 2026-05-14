<?php

namespace OmieLib\Geral\Clientes;

use OmieLib\Common\OmieFail;

/**
 * Dados Bancários do cliente.
 *
 * @pw_element string $codigo_banco Código do Banco.
 * @pw_element string $agencia Agência
 * @pw_element string $conta_corrente Número da Conta Corrente.
 * @pw_element string $doc_titular CNPJ ou CPF do titular.
 * @pw_element string $nome_titular Nome do titular.
 * @pw_element string $transf_padrao Definir transferência como forma de pagamento padrão<BR><BR>Pode ser:<BR>"S" para SIM<BR>"N" para NÃO
 * @pw_element string $cChavePix Chave PIX.
 * @pw_complex dadosBancarios
 */
class DadosBancarios{
	/**
	 * Código do Banco.
	 *
	 * @var string
	 */
	public string $codigo_banco;
	/**
	 * Agência
	 *
	 * @var string
	 */
	public string $agencia;
	/**
	 * Número da Conta Corrente.
	 *
	 * @var string
	 */
	public string $conta_corrente;
	/**
	 * CNPJ ou CPF do titular.
	 *
	 * @var string
	 */
	public string $doc_titular;
	/**
	 * Nome do titular.
	 *
	 * @var string
	 */
	public string $nome_titular;
	/**
	 * Definir transferência como forma de pagamento padrão<BR><BR>Pode ser:<BR>"S" para SIM<BR>"N" para NÃO
	 *
	 * @var string
	 */
	public string $transf_padrao;
	/**
	 * Chave PIX.
	 *
	 * @var string
	 */
	public string $cChavePix;
}
