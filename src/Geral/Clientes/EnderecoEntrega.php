<?php

namespace OmieLib\Geral\Clientes;

use OmieLib\Common\OmieFail;

/**
 * Dados do Endereço de Entrega.
 *
 * @pw_element string $entRazaoSocial Nome / Razão Social
 * @pw_element string $entCnpjCpf CNPJ / CPF do recebedor.
 * @pw_element string $entEndereco Endereço.
 * @pw_element string $entNumero Número do endereço.
 * @pw_element string $entComplemento Complemento do endereço.
 * @pw_element string $entBairro Bairro.
 * @pw_element string $entCEP CEP
 * @pw_element string $entEstado Estado.
 * @pw_element string $entCidade Cidade
 * @pw_element string $entSepararEndereco Separar endereço. <BR>Valores possível S ou N, sendo N o padrão.<BR>Quando igual S separa do endereço o número o e complemento, caso existirem.
 * @pw_element string $entTelefone Telefone
 * @pw_element string $entIE Inscrição Estadual
 * @pw_complex enderecoEntrega
 */
class EnderecoEntrega{
	/**
	 * Nome / Razão Social
	 *
	 * @var string
	 */
	public string $entRazaoSocial;
	/**
	 * CNPJ / CPF do recebedor.
	 *
	 * @var string
	 */
	public string $entCnpjCpf;
	/**
	 * Endereço.
	 *
	 * @var string
	 */
	public string $entEndereco;
	/**
	 * Número do endereço.
	 *
	 * @var string
	 */
	public string $entNumero;
	/**
	 * Complemento do endereço.
	 *
	 * @var string
	 */
	public string $entComplemento;
	/**
	 * Bairro.
	 *
	 * @var string
	 */
	public string $entBairro;
	/**
	 * CEP
	 *
	 * @var string
	 */
	public string $entCEP;
	/**
	 * Estado.
	 *
	 * @var string
	 */
	public string $entEstado;
	/**
	 * Cidade
	 *
	 * @var string
	 */
	public string $entCidade;
	/**
	 * Separar endereço. <BR>Valores possível S ou N, sendo N o padrão.<BR>Quando igual S separa do endereço o número o e complemento, caso existirem.
	 *
	 * @var string
	 */
	public string $entSepararEndereco;
	/**
	 * Telefone
	 *
	 * @var string
	 */
	public string $entTelefone;
	/**
	 * Inscrição Estadual
	 *
	 * @var string
	 */
	public string $entIE;
}
